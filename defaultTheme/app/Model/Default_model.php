<?php 

class Default_model extends E_Model{
    
    public function __contruct(){

        parent::__construct();

    }

    public function getStoreName(){
        $query = 'SELECT store_name FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

    public function getStoreCNPJ(){
        $query = 'SELECT store_cnpj FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

    public function getStoreEmail(){
        $query = 'SELECT store_email FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

    public function getStoreTel(){
        $query = 'SELECT store_tel FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

    public function getStoreCorporateName(){
        $query = 'SELECT store_corporatename FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

    public function getStoreStatus(){
        $query = 'SELECT store_status FROM erise.tab_store WHERE store_id = ' . DBCOMMERCE;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->row();
    }

}