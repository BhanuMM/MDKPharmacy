<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

<!--previous button-->
<div style="margin-left:20%;  padding:20px 26px;">
    <button class="prebtn" style="margin-right:30%;">
        <span>
            <a style="text-decoration: none;" href="<?php echo URLROOT ?>/admins/viewsurgicals"> << </a>
        </span>
    </button>
</div>

<div style="margin-left:20%; padding:1px 16px; width: 40%">

    <form class="data" action="<?php echo URLROOT; ?>/admins/updatesurg/<?php echo $data['surgid'] ?>" method="POST">
        <div class="form-left">

            <h2 style="margin-top: 3%;">
                Surgical Details
            </h2>
            <h5>
                Surgical Id
            </h5>
            <input class="input1" type="text" id="surgid" name="surgid"  value="<?php echo $data['surgid']?>" readonly >
            <h5>
                Surgical Name
            </h5>
            <input class="input1" type="text" id="surgname" name="surgname"  value="<?php echo $data['surgname'] ?>">
            <h5>
                Brand Name
            </h5>
            <input class="input1" type="text" id="brandname" name="brandname"  value="<?php echo $data['brandname'] ?>">
            <h5>
                Importer Name
            </h5>

            <input class="input1" id="imname" name="imname" type="text" value="<?php echo $data['importername'] ?>">

            <h5>
                Dealer
            </h5>
            <input class="input1" type="text" id="dealer" name="dealer" value="<?php echo $data['dealer'] ?>">
            <h5>
                Least Quantity
            </h5>
            <input class="input1" type="number" id="lowqty" name="lowqty" placeholder="50">

        </div>
        <div class="form-right">

            <h5>

                Purchase Price (Rs.)
            </h5>

            <input class="input1" type="number" id="purchprice" name="purchprice" value="<?php echo $data['purchaseprice'] ?>">

            <h5>
                Selling Price (Rs.)
            </h5>

            <input class="input1" id="sellprice" name="sellprice" type="number" value="<?php echo $data['sellingprice'] ?>">

            <h5>
                Profit Margin (Rs.)
            </h5>

            <input class="input1" id="profit" name="profit" type="number"  value="<?php echo $data['profitmargin'] ?>">
<!--            <h5>-->
<!--                Medicine Access Level-->
<!--            </h5>-->
<!--            <select class="input1" name="acslvl" value="--><?php //echo $data['acslvl'] ?><!--">-->
<!--                <option value="" disabled selected>Choose option</option>-->
<!--                <option --><?php //if ($data['acslvl'] == '1') echo ' selected="selected"'; ?><!-- value="1">Level One</option>-->
<!--                <option --><?php //if ($data['acslvl'] == '2') echo ' selected="selected"'; ?><!-- value="2">Level Two</option>-->
<!--                <option --><?php //if ($data['acslvl'] == '3') echo ' selected="selected"'; ?><!-- value="3">Level Three</option>-->
<!---->
<!--            </select>-->

            <br><br><br><br>
            <div style="margin-left:220px;">
                <input class="button button1" type="reset" value="Refresh">
                <button class="form-submit">Submit
                </button>
            </div>
    </form>
</div>