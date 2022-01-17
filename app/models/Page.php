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

}
