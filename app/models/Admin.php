<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewusers() {

        $this->db->query('SELECT * FROM staff  ');

        $results = $this->db->resultSet();

        return $results;

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

    public function registerstock($data) {
        $this->db->query('INSERT INTO stock (itemcode,quantity,purchprice,sellprice,purchdate,expdate) VALUES(:item,:quantity,:purchprice,:sellprice,:purchdate,:expdate)');


        //Bind values
        $this->db->bind(':item', $data['itemcode']);
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

        $this->db->query('SELECT * FROM stock');

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
