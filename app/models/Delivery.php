<?php
class Delivery {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


public function viewdelivery()
{
    $this->db->query('SELECT * FROM delivery 
                        INNER JOIN onlineprescription ON onlineprescription.onlinepresid=delivery.presid 
                        INNER JOIN onlineorder ON onlineorder.onlineoid = onlineprescription.onlineorderid 
                        WHERE delivery.delstatus="pending" ');

    $results = $this->db->resultSet();
    return $results;
}

public function viewpastdelivery()
{
    $this->db->query('SELECT * FROM delivery 
                        INNER JOIN onlineprescription ON onlineprescription.onlinepresid=delivery.presid 
                        INNER JOIN onlineorder ON onlineorder.onlineoid = onlineprescription.onlineorderid 
                        WHERE delivery.delstatus="completed"');

    $results = $this->db->resultSet();
    return $results;
}

public function searchdelbill($telno) {
    $this->db->query('SELECT * FROM delivery 
    INNER JOIN onlineprescription ON onlineprescription.onlinepresid=delivery.presid 
    INNER JOIN onlineorder ON onlineorder.onlineoid = onlineprescription.onlineorderid 
    WHERE delivery.delstatus="pending" and onlineorder.onlinetelno = :telno' );

    $this->db->bind(':telno', $telno);
    $results = $this->db->resultSet();
    return $results;
}

public function searchpastdelbill($telno) {
    $this->db->query('SELECT * FROM delivery 
                        INNER JOIN onlineprescription ON onlineprescription.onlinepresid=delivery.presid 
                        INNER JOIN onlineorder ON onlineorder.onlineoid = onlineprescription.onlineorderid 
                        WHERE delivery.delstatus="completed" and onlineorder.onlinetelno = :telno ' );

    $this->db->bind(':telno', $telno);
    $results = $this->db->resultSet();
    return $results;
}


public function getdelcustdata($delpresid) {
    $this->db->query('SELECT * FROM onlineorder 
                        INNER JOIN onlineprescription ON onlineorder.onlineoid = onlineprescription.onlineorderid 
                        INNER JOIN bill ON onlineprescription.onlinepresid = bill.presid 
                        WHERE bill.presid = :delpresid');

    $this->db->bind(':delpresid',$delpresid);

    $row = $this->db->single();
    return $row;
   
}


public function getdelpresdata($delpresid) {
    $this->db->query('SELECT * FROM onlinepresmed 
                        INNER JOIN medicine ON medicine.medid= onlinepresmed.medid  
                        WHERE onlinepresid = :presid');
    $this->db->bind(':presid',$delpresid);
    $results = $this->db->resultSet();
    return $results;

}

public function getbilldata($delpresid) {
    $this->db->query('SELECT * FROM bill WHERE presid = :presid');

    $this->db->bind(':presid',$delpresid);
   ;

    $row = $this->db->single();
    return $row;

    // $this->db->query('SELECT * FROM bill WHERE presid = :presid, subtotal = :subtot, discount = :disc, grosstotal = :grosstot');

    // $this->db->bind(':presid',$delpresid);
    // $this->db->bind(':subtot', $data['subtot']);
    // $this->db->bind(':disc', $data['disc']);
    // $this->db->bind(':grosstot', $data['grosstot']);

    // $row = $this->db->single();
    // return $row;

}

public function getdeldata($delpresid) {
    $this->db->query('SELECT * FROM delivery
                        INNER JOIN onlineprescription ON delivery.presid= onlineprescription.onlinepresid
                        INNER JOIN onlineorder ON onlineorder.onlineoid= onlineprescription.onlineorderid  
                        WHERE presid = :delpresid');
    $this->db->bind(':delpresid',$delpresid);
    $row = $this->db->single();
    return $row;

}

public function confirmdel($data){
    $this->db->query('UPDATE delivery 
                        SET delstatus = :delstat, delivereddate = :deldate, deltime = :deltime 
                        WHERE presid = :presid');

    $this->db->bind(':presid', $data['presid']);
    $this->db->bind(':deldate', $data['deldate']);
    $this->db->bind(':deltime', $data['deltime']);
    $this->db->bind(':delstat', $data['delstatus']);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }


}

// public function viewpastdelivery()
// {
//     $this->db->query('SELECT * FROM onlineorder INNER JOIN onlineprescription ON onlineorder.onlineoid = onlineprescription.onlineorderid INNER JOIN bill ON onlineprescription.onlinepresid = bill.presid ');

//     $results = $this->db->resultSet();
//     return $results;
// }

//Find the profile by staff ID
    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }

}

