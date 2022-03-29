<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewusers() {

        $this->db->query('SELECT * FROM staff');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchusernic($snic) {
        $this->db->query('SELECT * FROM staff WHERE snic = :usernic');

        //Bind value
        $this->db->bind(':usernic', $snic);
        $results = $this->db->resultSet();

        return $results;
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

    // public function deleteuser($staffid) {
    //     $this->db->query('DELETE FROM staff WHERE staffid = :staffid');

    //     $this->db->bind(':staffid', $staffid);

    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


    public function viewsupplier() {

        $this->db->query('SELECT * FROM supplier');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchsupplier($agencyname) {
        $where = "WHERE `agencyname` like :agency ";

        $param1 = '%'.$agencyname.'%'  ;
       

        $this->db->query("SELECT * FROM supplier ".$where."");
        $this->db->bind(':agency', $param1);

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
        $this->db->query('INSERT INTO medicine (medgenname,medbrand,medimporter,meddealer,medpurchprice,medsellprice,medprofit,medacslvl,lowstockqty) 
        VALUES(:medname,:medbrand,:importer,:dealer,:purchprice,:sellprice,:profit,:acslvl,:lowqty)');


        //Bind values
        $this->db->bind(':medname', $data['genericname']);
        $this->db->bind(':medbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
        $this->db->bind(':acslvl', $data['acslvl']);
        $this->db->bind(':lowqty', $data['lowqty']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function viewmed() {

        $this->db->query('SELECT * FROM medicine ');

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewsurg() {

        $this->db->query('SELECT * FROM surgicals ');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchsurg($surgname) {
        $where = "WHERE `surgname` like :surgname ";

        $param1 = '%'.$surgname.'%'  ;


        $this->db->query("SELECT * FROM surgicals ".$where."");
        $this->db->bind(':surgname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }


//    public function registersurgical($data) {
//        $this->db->query('INSERT INTO surgicals (surgname,surgbrand,surgimporter,surgdealer,surgpurchprice,surgsellprice,surgprofit,lowstockqty)
//        VALUES(:surgname,:surgbrand,:importer,:dealer,:purchprice,:sellprice,:profit,:lowqty)');
//
//
//        //Bind values
//        $this->db->bind(':surgname', $data['surgicalname']);
//        $this->db->bind(':surgbrand', $data['brandname']);
//        $this->db->bind(':importer', $data['importername']);
//        $this->db->bind(':dealer', $data['dealer']);
//        $this->db->bind(':purchprice', $data['purchaseprice']);
//        $this->db->bind(':sellprice', $data['sellingprice']);
//        $this->db->bind(':profit', $data['profitmargin']);
////        $this->db->bind(':acslvl', $data['acslvl']);
//        $this->db->bind(':lowqty', $data['lowqty']);
//
//
//        //Execute function
//        if ($this->db->execute()) {
//            return true;
//        } else {
//            return false;
//        }
//    }



    public function findSurgbById($surgid) {
        $this->db->query('SELECT * FROM surgicals WHERE surgid = :surgid');

        $this->db->bind(':surgid', $surgid);

        $row = $this->db->single();

        return $row;
    }


    public function updateSurgicals($data) {
        $this->db->query('UPDATE surgicals SET surgname = :surgname, surgbrand = :surgbrand, surgimporter = :importer, surgdealer = :dealer, surgpurchprice = :purchprice, surgsellprice = :sellprice, surgprofit = :profit, lowstockqty = :lowqty WHERE surgid = :surgid');


    public function findSurgbById($surgid) {
        $this->db->query('SELECT * FROM surgicals WHERE surgid = :surgid');

        $this->db->bind(':surgid', $surgid);

        $row = $this->db->single();

        return $row;
    }


    public function updateSurgicals($data) {
        $this->db->query('UPDATE surgicals SET surgname = :surgname, surgbrand = :surgbrand, surgimporter = :importer, surgdealer = :dealer, surgpurchprice = :purchprice, surgsellprice = :sellprice, surgprofit = :profit, lowstockqty = :lowqty WHERE surgid = :surgid');

        $this->db->bind(':surgid', $data['surgid']);
        $this->db->bind(':surgname', $data['surgname']);
        $this->db->bind(':surgbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
//        $this->db->bind(':acslvl', $data['acslvl']);
        $this->db->bind(':lowqty', $data['lowqty']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function registersurgicals($data) {
        $this->db->query('INSERT INTO surgicals (medgenname,medbrand,medimporter,meddealer,medpurchprice,medsellprice,medprofit,medacslvl,lowstockqty) 
        VALUES(:medname,:medbrand,:importer,:dealer,:purchprice,:sellprice,:profit,:acslvl,:lowqty)');


        //Bind values
        $this->db->bind(':surgid', $data['surgid']);
        $this->db->bind(':surgname', $data['genericname']);
        $this->db->bind(':surgbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
//        $this->db->bind(':acslvl', $data['acslvl']);
        $this->db->bind(':lowqty', $data['lowqty']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletesurgical($surgid) {
        $this->db->query('DELETE FROM surgicals WHERE surgid = :surgid');

        $this->db->bind(':surgid', $surgid);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /*--------------------------------------------------------------------------------------------------------------------------------------------------*/
    public function returnstock($data){
        $this->db->query('INSERT INTO returnstock(medid,purchdate,rquantity,reason,rdate) VALUES(:medid,:purchdate,:rquantity,:reason,:retdate)');


        //Bind values
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':purchdate', $data['purchdate']);
        $this->db->bind(':rquantity', $data['returnqty']);
        $this->db->bind(':reason', $data['reason']);
        $this->db->bind(':retdate', $data['returndate']);

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

    public function searchreturn($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine INNER JOIN returnstock ON returnstock.medid = medicine.medid ".$where."");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }


    public function automedview($condition) {

        $this->db->query('SELECT * FROM medicine WHERE medgenname LIKE %. $condition.%  ORDER BY id DESC LIMIT 10');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine ".$where."");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchpurchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM purchstock INNER JOIN medicine ON purchstock.medid=medicine.medid ".$where."");
        $this->db->bind(':medname', $param1);

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
        $this->db->query('UPDATE medicine SET medgenname = :medname, medbrand = :medbrand, medimporter = :importer, meddealer = :dealer, medpurchprice = :purchprice, medsellprice = :sellprice, medprofit = :profit, medacslvl = :acslvl, lowstockqty = :lowqty WHERE medid = :medid');

        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':medname', $data['genericname']); 
        $this->db->bind(':medbrand', $data['brandname']);
        $this->db->bind(':importer', $data['importername']);
        $this->db->bind(':dealer', $data['dealer']);
        $this->db->bind(':purchprice', $data['purchaseprice']);
        $this->db->bind(':sellprice', $data['sellingprice']);
        $this->db->bind(':profit', $data['profitmargin']);
        $this->db->bind(':acslvl', $data['acslvl']);
        $this->db->bind(':lowqty', $data['lowqty']);

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
        $this->db->query('UPDATE staff SET snic = :psnic, sname = :psname, semail = :psemail, uname = :psuname ,upswrd= :pswrd WHERE staffid = :psid');

        $this->db->bind(':psid', $data['psid']);
        $this->db->bind(':psnic', $data['psnic']);
        $this->db->bind(':psname', $data['psname']);
        $this->db->bind(':psemail', $data['psemail']);
        $this->db->bind(':psuname', $data['psusername']);
        $this->db->bind(':pswrd', $data['pspswrd']);

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
//  Check for the medicines that are already have been expired
    public function checkexpiry() {

        $this->db->query('SELECT * FROM purchstock INNER JOIN medicine on purchstock.medid = medicine.medid WHERE expdate <= CURRENT_TIMESTAMP');

        $results = $this->db->resultSet();

        return $results;
    }

//  Check for the medicines which expires within one month time
    public function expireinmonth() {

        $this->db->query('SELECT * FROM purchstock INNER JOIN medicine on purchstock.medid = medicine.medid WHERE (expdate BETWEEN CURDATE() AND DATE_ADD(NOW(), INTERVAL 1 MONTH))');


        $results = $this->db->resultSet();

        return $results;
    }
    //  Check for medicines which expires within three months
    public function expireinthree() {

        $this->db->query('SELECT * FROM purchstock INNER JOIN medicine on purchstock.medid = medicine.medid WHERE (expdate BETWEEN CURDATE() AND DATE_ADD(NOW(), INTERVAL 3 MONTH))');


        $results = $this->db->resultSet();

        return $results;
    }

//  Check for the out-of-stock medicines
    public function outofstock(){
        $this->db->query('SELECT * FROM fullstock INNER JOIN medicine on fullstock.medid = medicine.medid WHERE quantity = 0');

        $results = $this->db->resultSet();

        return $results;
    }
//  Check for the low stocks
    public function lowstock(){
        $this->db->query('SELECT * FROM fullstock INNER JOIN medicine on fullstock.medid = medicine.medid WHERE quantity < lowstockqty && quantity > 0');

        $results = $this->db->resultSet();

        return $results;
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
