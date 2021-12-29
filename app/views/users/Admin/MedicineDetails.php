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
                    <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/viewmed">
                    <li Style="float: right; padding-left: 1%; vertical-align: middle; display: inline;">
                        <li Style="float: right; vertical-align: middle; display: inline;">
                            <input type="text" id="UISearchbar" name="UISearchbar" style="height: 35px;" placeholder="Medicine Name"></li>
                        <button style="margin-left: 1080px" class="form-submit">SEARCH</button>
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

                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['brand'] ?></td>
                            <td><?php echo $data['importer'] ?></td>
                            <td><?php echo $data['dealer'] ?></td>
                            <td><?php echo $data['purchprice'] ?></td>
                            <td><?php echo $data['sellprice'] ?></td>
                            <td><?php echo $data['profit'] ?></td>
                            <td><?php echo $data['access'] ?></td>
                            
                            <td>
                               
                            
                                        
                            <a class="button button1" style="background-color: #97ff9c;" href="<?php echo URLROOT . "/Admins/updatemed/" .$data['id'] ?>">
                                Update 
                            </a> 
                            
                           
                            
                            </td>
                             

                            <td>
                           
                            <form action="<?php echo URLROOT . "/Admins/deletemed/" .$data['id'] ?>" method="POST">
                                <input class="button button1" style="background-color: #fc92a1;" Onclick="return ConfirmDelete();" type="submit" name="delete" value="Delete">
                            </form>
                            </td>
                           
                        </tr>
                        


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