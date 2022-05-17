<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_controller{

    public function pageAdmin() {
        $this->load->helper('assets');
        $this->load->view('Back/Login');
    }

     public function pageAcceuil() {
        $this->load->model('Actualite');
        $this->load->helper('assets');
        $data['liste'] = $this->Actualite->getListeActu(); 
        $this->load->view('Back/tables',$data);
    }

      public function pageAjout() {
        $this->load->helper('assets');
        $this->load->view('Back/Ajout');
    }

    public function login(){
		$this->load->helper('assets');
		$data = array();	
        $this->load->model('ModelBack');	
			$login = $this->input->post("login");
			$mdp = $this->input->post("mdp");
			$check = $this->ModelBack->login($login,$mdp);
            if($check){
                $this->session->set_userdata('user',$login);
                 $this->load->model('Actualite');
                  $data['liste'] = $this->Actualite->getListeActu(); 
    			$this->load->view('Back/tables',$data);
            }else{
    			$this->pageAdmin();
                  $this->load->model('ModelBack');
                  	$login = $this->input->post("login");
            }
	}

    


    public function insertActu(){
        $this->load->helper('assets');
        $this->load->model('ModelBack');
        $data = array();	
        $filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"];  
		move_uploaded_file($tempname,'./assets/img/'.$filename);
         $this->ModelBack->insertActu(
         $this->input->post("titre"),
         $filename,
         $this->input->post("information"),
         $this->input->post("sources"),
         $this->input->post("pays")
        );
      
    $this->pageAjout();

    }
  
}

?>