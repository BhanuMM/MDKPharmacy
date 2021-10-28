<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:20%;  padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/returnstocks">
            <h2 style="margin-top: 3%;">
                Return Stock Details
            </h2>
            <h5>
                Supplier Agency
            </h5>
            <select class="input1" name="supplier" id="supplier" required>
                <option value="heyleys">Hayleys Lifesciences(Pvt)Ltd</option>
                <option value="mervynsons">Mervynsons(Pvt)Ltd</option>
                <option value="technomedics">Technomedics International</option>
                <option value="IJ">IJ Medicals</option>
                <option value="Mediquipment">Mediquipment Limited</option>
            </select>
            <h5>
                Brand Name
            </h5>
            <select class="input1" name="brand" id="brand" required>
                <option value="">  </option>
                <option value=""></option>
                <option value=""> </option>
                <option value=""> </option>
                <option value=""></option>
            </select>
            <h5>
                Generic Name
            </h5>
            <select class="input1" name="generic" id="generic" required>
                <option value="amoxicillin"> Amoxicillin capsule 250mg </option>
                <option value="amoxicillin"> Amoxycillin capsule 500mg</option>
                <option value="flucloxacillin"> Flucloxacillin capsule 250mg </option>
                <option value="mebendazole"> Mebendazole tablet 500mg</option>
                <option value="oseltamivir">Oseltamivir capsule 45mg</option>
            </select>
            <h5>
                Return Quantity
            </h5>
            <input class="input1" type="number" id="quantity" name="quantity" placeholder="18" required>
            <h5>
                Reason to return the stock
            </h5>
            <select class="input1" name="return" id="return" required>
                <option value="expired"> Expired</option>
                <option value="damaged"> Damaged</option>
            </select>
                
            <br><br><br>
            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit</button>
        </form>
    </div>
    <br><br><br><br><br><br>

           


    </body>
</html>