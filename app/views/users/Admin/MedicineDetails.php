<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left:17%; padding:1px 16px; width: 40%">
                <button class="prebtn" style="margin-right: 200px;"><span><a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a> </span></button>
                </div>   

<div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
                 <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>       

                <a href="<?php echo URLROOT ?>/Admins/addmed"><button class="button button1">Add New Medicine +</button></a>

                <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Medicine Details</h3></li>
                    <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/viewmed">
                    <table>
                    <tr>
                      <th><li Style="float: right; vertical-align: middle; display: inline;">
                      <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 530px; height: 35px; width: 200px;" placeholder="Medicine Name"></li>
                      </th>
                      <th><button style="margin-left: 10px;" class="form-submit">SEARCH</button></th>
                    </tr>
                    </table>
                    </form>
                </ul>

                <table id="customers">
                    <tr>
                      <th>Medicine ID</th>
                      <th>Generic Name</th>
                      <th>Brand Name</th>
                      <th>Importer Name</th>
                      <th>Dealer</th>
                      <th>Purchase Price</th>
                      <th>Selling Price</th>
                      <th>Profit Margin</th>
                      <th>Access Level</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                    <?php foreach($data['med'] as $allmed): ?>

                        <tr>
                            <td><?php echo $allmed->medid;  ?></td>
                            <td><?php echo $allmed->medgenname; ?></td>
                            <td><?php echo $allmed->medbrand;  ?></td>
                            <td><?php echo $allmed->medimporter; ?></td>
                            <td><?php echo $allmed->meddealer; ?></td>
                            <td><?php echo $allmed->medpurchprice;  ?></td>
                            <td><?php echo  $allmed->medsellprice ?></td>
                            <td><?php echo  $allmed->medprofit ?></td>
                            <td><?php echo  $allmed->medacslvl?></td>
                            
                            <td>
                               
                            
                                        
                            <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT . "/admins/updatemed/" .  $allmed->medid ?>">
                                Update 
                            </a> 
                            
                           
                            
                            </td>
                             

                            <td>
                           
                            <form action="<?php echo URLROOT . "/admins/deletemed/" . $allmed->medid?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                           
                        </tr>
                        
                        <?php endforeach; ?>

                  </table>

            </div>

<!-- <script>
    function get_text(event)
    {
        var string = event.textContent;

        //fetch api

        fetch("<?php echo URLROOT . "/Admins/automedsearch"?>", {

            method:"POST",

            body: JSON.stringify({
                search_query : string
            }),

            headers : {
                "Content-type" : "application/json; charset=UTF-8"
            }
        }).then(function(response){

            return response.json();

        }).then(function(responseData){

            document.getElementsByName('search_box')[0].value = string;

            document.getElementById('search_result').innerHTML = '';

        });



    }
    function load_data(query)
    {
        if(query.length > 2)
        {
            var form_data = new FormData();

            form_data.append('query', query);

            var ajax_request = new XMLHttpRequest();

            ajax_request.open('POST', '<?php echo URLROOT . "/Admins/automedsearch"?>');

            ajax_request.send(form_data);

            ajax_request.onreadystatechange = function()
            {
                if(ajax_request.readyState == 4 && ajax_request.status == 200)
                {
                    var response = JSON.parse(ajax_request.responseText);

                    var html = '<div class="list-group">';

                    if(response.length > 0)
                    {
                        for(var count = 0; count < response.length; count++)
                        {
                            html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text(this)">'+response[count].post_title+'</a>';
                        }
                    }
                    else
                    {
                        html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
                    }

                    html += '</div>';

                    document.getElementById('search_result').innerHTML = html;
                }
            }
        }
        else
        {
            document.getElementById('search_result').innerHTML = '';
        }
    }
</script> -->

            <script>
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected medicine ?");
            }
            </script> 