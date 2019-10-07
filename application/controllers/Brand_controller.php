<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Brand_controller extends Admin_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->data['title'] = "Brands";
        
        //$this->load->model('Brand_model');
        
    }

    

    public function index(){
        
        
        $data['title'] = 'Brands';
        $this->load->view('template/header');
        $this->load->view('index', $data);
        $this->load->view('template/footer');
        
    }
    
}
