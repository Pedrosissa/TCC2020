<?php

class Principal extends E_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->default = $this->load->model('Default_model');
    }

    public function index(){

            $data['title'] = $this->default->getStoreName()->store_name;
            $data['activepage'] = 'Home';

            if($this->default->getStoreStatus()->store_status == 'I'){
                die('Loja inativa');
            }

            $this->template->load('home', 'home', $data);
        
    }

}