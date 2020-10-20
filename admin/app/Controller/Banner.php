<?php

class Banner extends E_Controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $data['title'] = 'Banner';
        $data['mainpage'] = 'Home';
        $data['activepage'] = 'Banner';

        $this->template->load('banners', 'output', $data);
        
    }

    public function novo(){
        
        $data['title'] = 'Banner - New';
        $data['mainpage'] = 'Home';
        $data['activepage'] = 'Banner - New';

        $this->template->load('banners', 'input', $data);
        
    }

}