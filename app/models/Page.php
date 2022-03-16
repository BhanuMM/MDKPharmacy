<?php
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function fileupload($data) {

        $this->db->query('INSERT INTO onlineorder (onlinefname, onlinetelno, onlineadrs,filename,orderstatus) VALUES(:fname,:telno,:adrs,:img, :stat )');


        //Bind values
        $this->db->bind(':fname', $data['fullname']);
        $this->db->bind(':telno', $data['telnumber']);
        $this->db->bind(':adrs', $data['address']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':stat', $data['stat']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       
        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

}
