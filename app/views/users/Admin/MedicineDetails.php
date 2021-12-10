<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">
                 <span class="successadded">
                 <?php
                 if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
                 ?>
                </span> <br>
                <a href="<?php echo URLROOT ?>/Admins/addmed"><button class="button button1">Add New Medicine +</button></a>
                <ul style="padding-left: 0px; list-style-type: none; ">
                    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Medicine Details</h3></li>
                    <form><li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                            <a style="border-left: 0px solid !important" href="#"><img src="<?php echo URLROOT ?>/public/images/Search.png" alt="Search" style="opacity: 0.5; height: 25px; margin-top: 8px; position:relative; margin-right: 10px; "></a></li>
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" name="search_box"   style="height: 35px;" placeholder="Generic Name" id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:load_data(this.value)" >
                            <span id="search_result"></span>
                        </li></form>
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
                    <?php foreach($data['medicines'] as $allmedicines): ?>

                        <tr>
                            <td><?php echo $allmedicines->medid; ?></td>
                            <td><?php echo $allmedicines->medgenname; ?></td>
                            <td><?php echo $allmedicines->medbrand; ?></td>
                            <td><?php echo $allmedicines->medimporter; ?></td>
                            <td><?php echo $allmedicines->meddealer; ?></td>
                            <td><?php echo $allmedicines->medpurchprice; ?></td>
                            <td><?php echo $allmedicines->medsellprice; ?></td>
                            <td><?php echo $allmedicines->medprofit; ?></td>
                            <td><?php echo $allmedicines->medacslvl; ?></td>
                            
                            <td>
                               
                            
                                        
                            <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT . "/Admins/updatemed/" . $allmedicines->medid ?>">
                                Update 
                            </a> 
                            
                           
                            
                            </td>
                             

                            <td>
                           
                            <form action="<?php echo URLROOT . "/Admins/deletemed/" . $allmedicines->medid ?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                           
                        </tr>
                        
                    <?php endforeach; ?>

                  </table>

            </div>

<script>
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
</script>

            <script>
                function ConfirmDelete()
            {
                return confirm("Are you sure you want to delete the selected medicine ?");
            }
            </script> 