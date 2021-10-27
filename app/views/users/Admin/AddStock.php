<?php
require APPROOT . '/views/includes/Adminhead.php';
?>

    <div style="margin-left:20%;  padding:1px 16px; width: 40%">
        <form method="post" class="data" action="<?php echo URLROOT; ?>/admins/addstock">
            <h2 style="margin-top: 3%;">
                Stock Details
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
                <option value="amoxicillin"> Amoxicillin capsule 250mg </option>
                <option value="amoxicillin"> Amoxycillin capsule 500mg</option>
                <option value="flucloxacillin"> Flucloxacillin capsule 250mg </option>
                <option value="mebendazole"> Mebendazole tablet 500mg</option>
                <option value="oseltamivir">Oseltamivir capsule 45mg</option>
            </select>
            <h5>
                Package Size
            </h5>
            <input class="input1" type="number" id="pack" name="pack" placeholder="100" required>
            <h5>
                Quantity
            </h5>
            <input class="input1" type="number" id="quantity" name="quantity" placeholder="18" required>
            <h5>
                Purchasing unit price (Rs.)
            </h5>
            <input class="input1" type="number" id="purchprice" name="purchprice" placeholder="10.00" required>
            <h5>
                Selling unit price (Rs.)
            </h5>
            <input class="input1" type="number" id="sellprice" name="sellprice" placeholder="13.00" required>
            <h5>
                Purchase Date
            </h5>
            <input class="input1" type="date" id="purchdate" name="purchdate" placeholder="2021-01-02"required>
            <h5>
                Expiry Date
            </h5>
            <input class="input1" type="date" id="expdate" name="expdate" placeholder="2023-01-02" required>
                
            <br><br><br>
            <input class="button button1" type="reset" value="Refresh">
            <button class="form-submit">Submit</button>
        </form>
    </div>
    <br><br><br><br><br><br>

           


    </body>
</html>