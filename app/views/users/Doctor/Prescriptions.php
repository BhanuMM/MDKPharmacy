<?php
require APPROOT . '/views/includes/Doctorhead.php';
?>

<div style="margin-left: 300px; margin-top:50px; margin-right:0%; padding:1px 16px; width: 70%; ">

    <ul style="padding-left: 0px; list-style-type: none;  margin-top:25px;  ">
    <li Style="float: left; vertical-align: middle; display: inline;"><h3> Prescription Details</h3></li>
</ul>
                <form method="post" class="data" Style="float: left;" action="<?php echo URLROOT; ?>/doctors/allprescriptions">
                    <table>
                        <tr>
                            <th><li Style="float: right; vertical-align: middle; display: inline;">
                                    <input type="date" id="UISearchbar" name="UISearchbar" style="margin-left: 520px; height: 35px; width: 200px;" placeholder="Bill ID"></li>
                            </th>
                            <th><button style="margin-left: 10px;" class="form-submit" name="btndate">SEARCH</button></th>
                        </tr>
                    </table>
                </form>



    <table id="customers">
        <tr>
            <th>Prescription ID</th>
<!--            <th>Doctor ID</th>-->
            <th>Time</th>
            <th>Date</th>
            <th></th>
        </tr>
        <?php foreach($data['pat'] as $allpat): ?>
        <tr>
            <td><?php echo $allpat->presid ?></td>
<!--            <td>--><?php //echo $allpat->docid ?><!--</td>-->
            <td><?php echo $allpat->pretime ?></td>
            <td><?php echo $allpat->presdate ?></td>
            <td><button class="button button1"><a href="<?php echo URLROOT. "/doctors/pastsingleprescription/".$allpat->presid ?>"> View</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>


</div>

</body>
</html>