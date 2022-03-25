<?php
    require APPROOT . '/views/includes/Adminhead.php';
?>

<!--Back button-->
    <div style="margin-left:23%; margin-top: 10px; padding:1px 16px; width: 71%;">
        <button class="prebtn" style="margin-right:30%;">
            <span>
                <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/admindashboard"> << </a>
            </span>
        </button>
    </div>



    <div style="margin-left: 350px; margin-top:5px; padding:1px 16px; width: 70%; ">
        <span class="successadded">
            <?php if(isset($_GET['msg'])){
                     echo $_GET['msg']; // print_r($_GET);
                 }
            ?>
        </span>
        <br>

<!--        Link to Report generation Page-->
        <a href="<?php echo URLROOT ?>/Admins/addreport/">
            <button class="button button1">Create New Report +</button>
        </a>
<!--Page heading-->
        <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
            <li Style="float: left; vertical-align: middle; display: inline;">
                <h3 style="margin: 0px;"> Generated Reports</h3>
            </li>
<!--Search for previous reports-->
            <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/admins/">
                <table>
                    <tr>
                      <th style="padding: 0px;">
                          <li Style="float: right; vertical-align: middle; display: inline;">
                              <input type="text" id="UISearchbar" name="UISearchbar" style="margin-left: 705px; height: 35px; width: 200px;" placeholder="Report ID">
                          </li>
                      </th>
                      <th>
                          <button style="margin-left: 10px;" class="form-submit">SEARCH</button>
                      </th>
                    </tr>
                </table>
            </form>
        </ul>

<!--        Previous report details-->
        <table id="customers">
            <tr>
                <th>Report ID</th>
                <th>Date</th>
                <th>Type</th>
                <th>View</th>
            </tr>
            <tr>
                <td>R001</td>
                <td>2021-09-25</td>
                <td>Daily Summary</td>
                <td><button class="button button1">View</button></td>
            </tr>
            <tr>
                <td>R003</td>
                <td>2021-08-25</td>
                <td>Monthly Summary</td>
                <td><button class="button button1">View</button></td>
            </tr>
            <tr>
                <td>R005</td>
                <td>2021-07-25</td>
                <td>Daily Summary</td>
                <td><button class="button button1">View</button></td>
            </tr>
        </table>
    </div>