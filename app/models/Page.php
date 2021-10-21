<?php
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function fileupload($data) {

        $this->db->query('INSERT INTO onlineorder (onlinefname, onlinetelno, onlineadrs,filename) VALUES(:fname,:telno,:adrs,:img)');


        //Bind values
        $this->db->bind(':fname', $data['fullname']);
        $this->db->bind(':telno', $data['telno']);
        $this->db->bind(':adrs', $data['address']);
        $this->db->bind(':img', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
