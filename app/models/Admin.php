<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


    public function searchusernic($snic) {
        $this->db->query('SELECT * FROM staff WHERE snic = :usernic');

        //Bind value
        $this->db->bind(':usernic', $snic);
        $row = $this->db->single();
        return $row;
    }


    public function findUserById($staffid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :staffid');

        $this->db->bind(':staffid', $staffid);

        $row = $this->db->single();

        return $row;
    }

    public function updateuser($data) {
        $this->db->query('UPDATE staff SET snic = :snic, sname = :sname, semail = :semail, stelno = :stelno, uname = :uname  WHERE staffid = :staffid');

        $this->db->bind(':staffid', $data['staffid']);
        $this->db->bind(':snic', $data['snic']); 
        $this->db->bind(':sname', $data['sname']);
        $this->db->bind(':semail', $data['semail']);
        $this->db->bind(':stelno', $data['stelno']);
        $this->db->bind(':uname', $data['uname']);
        // $this->db->bind(':upswrd', $data['upswrd']);
        // $this->db->bind(':urepswrd', $data['urepswrd']);
        // $this->db->bind(':urole', $data['urole']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteuser($staffid) {
        $this->db->query('DELETE FROM staff WHERE staffid = :staffid');

        $this->db->bind(':staffid', $staffid);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function viewsupplier() {

        $this->db->query('SELECT * FROM supplier');

        $results = $this->db->resultSet();

        return $results;

    }

    public function registersupplier($data) {
        $this->db->query('INSERT INTO supplier (agencyname,agencyadrs,agencytel,agencyemail) VALUES(:agname,:agadrs,:agtel,:agemail)');


        //Bind values
        $this->db->bind(':agname', $data['suppliername']);
        $this->db->bind(':agadrs', $data['supplieraddress']);
        $this->db->bind(':agtel', $data['suppliertelno']);
        $this->db->bind(':agemail', $data['suppliermail']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    /*--------------------------------------------------------------------------------------------------*/
    public function findSupplierById($supplierid) {
        $this->db->query('SELECT * from supplier WHERE supplierid =:supplierid');

        $this->db->bind(':supplierid',$supplierid);

        $row = $this->db->single();
        return $row;
    }

    public function updatesupplier($data) {

        $this->db->query('UPDATE supplier SET agencyname = :supname, agencyadrs = :supadrs, agencytel = :suptel, agencyemail = :supemail WHERE supplierid = :supid' );

        $this->db->bind(':supname', $data['suppliername']);
        $this->db->bind(':supemail', $data['suppliermail']);
        $this->db->bind(':suptel', $data['suppliertelno']);
        $this->db->bind(':supadrs', $data['supplieraddress']);
        $this->db->bind(':supid', $data['supplierid']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletesupplier($supplierid) {
        $this->db->query('DELETE FROM supplier WHERE supplierid = :supid');

        $this->db->bind(':supid', $supplierid);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }





    /*--------------------------------------------------------------------------------------------------*/

    public function registermedicine($data) {
        $this->db->query('INSERT INTO medicine (medgenname,medbrand,medimporter,meddealer,medpurchprice,medsellprice,medprofit,medacslvl) 
        VALUES(:medname,:medbrand,:importer,:dealer,:purchprice,:sellprice,:profit,:acslvl)');


        //Bind values
        $this->db->bind(':medname', $data['genericname']);
        $this->db->bind(':medbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
        $this->db->bind(':acslvl', $data['acslvl']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function viewmed() {

        $this->db->query('SELECT * FROM medicine');

        $results = $this->db->resultSet();

        return $results;

    }

    public function returnstock($data){
        $this->db->query('INSERT INTO returnstock(medid,purchdate,rquantity,reason) VALUES(:medid,:purchdate,:rquantity,:reason)');


        //Bind values
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':purchdate', $data['purchdate']);
        $this->db->bind(':rquantity', $data['returnqty']);
        $this->db->bind(':reason', $data['reason']);
        

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function viewreturnstock(){
        $this->db->query('SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid = medicine.medid');

        $results = $this->db->resultSet();

        return $results;
    }

    public function automedview($condition) {

        $this->db->query('SELECT * FROM medicine WHERE medgenname LIKE %. $condition.%  ORDER BY id DESC LIMIT 10');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchmed() {

        $this->db->query('SELECT * FROM medicine WHERE medgenname LIKE %. $medgenname.% ');

        $results = $this->db->resultSet();

        return $results;

    }


    public function findMedbById($medid) {
        $this->db->query('SELECT * FROM medicine WHERE medid = :medid');

        $this->db->bind(':medid', $medid);

        $row = $this->db->single();

        return $row;
    }

    public function updateMedicine($data) {
        $this->db->query('UPDATE medicine SET medgenname = :medname, medbrand = :medbrand, medimporter = :importer, meddealer = :dealer, medpurchprice = :purchprice, medsellprice = :sellprice, medprofit = :profit, medacslvl = :acslvl WHERE medid = :medid');

        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':medname', $data['genericname']); 
        $this->db->bind(':medbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
        $this->db->bind(':acslvl', $data['acslvl']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //temp location

    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }

    public function updateprofilesettings($data){
        $this->db->query('UPDATE staff SET snic = :psnic, sname = :psname, semail = :psemail, uname = :psuname  WHERE staffid = :psid');

        $this->db->bind(':psid', $data['psid']);
        $this->db->bind(':psnic', $data['psnic']);
        $this->db->bind(':psname', $data['psname']);
        $this->db->bind(':psemail', $data['psemail']);
        $this->db->bind(':psuname', $data['psusername']);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
     
    }

    public function deleteMedicine($medid) {
        $this->db->query('DELETE FROM medicine WHERE medid = :medid');

        $this->db->bind(':medid', $medid);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function registerstock($data) {
        $this->db->query('INSERT INTO purchstock (medid,quantity,purchprice,sellprice,purchdate,expdate) VALUES(:item,:quantity,:purchprice,:sellprice,:purchdate,:expdate)');


        //Bind values
        $this->db->bind(':item', $data['medid']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':purchdate', $data['purchasedate']);
        $this->db->bind(':expdate', $data['expirydate']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function viewstock() {

        $this->db->query('SELECT * FROM fullstock INNER JOIN medicine ON fullstock.medid = medicine.medid');

        $results = $this->db->resultSet();

        return $results;

    }

    public function purchstock() {

        $this->db->query('SELECT * FROM purchstock INNER JOIN medicine ON purchstock.medid = medicine.medid');

        $results = $this->db->resultSet();

        return $results;
    }

    public function updatequantity($data){
        $this->db->query('UPDATE fullstock SET quantity = :qty  WHERE medid = :medid');

        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':qty', $data['newquantity']);
        
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
     
    }

    public function viewstockquantity($medid){
        
        $this->db->query('SELECT quantity FROM fullstock WHERE medid= :medid' );

        $this->db->bind(':medid', $medid);

        $row = $this->db->single();

        return $row;
    }

   
    

    //Find user by email. Email is passed in by the Controller.
//    public function findUserByEmail($email) {
//        //Prepared statement
//        $this->db->query('SELECT * FROM users WHERE email = :email');
//
//        //Email param will be binded with the email variable
//        $this->db->bind(':email', $email);
//
//        //Check if email is already registered
//        if($this->db->rowCount() > 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}
