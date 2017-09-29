<?php

 class Ctrl_sncf extends CI_Controller{
     public function index(){
            $this->load->helper('url');
            $this->load->model("Model_Act");
            $data['lesActivites']=$this->Model_Act->getAllActivites();
         $this->load->view('v_ac',$data);
     }
     
     public function afficherFormation(){
          //$numero= $this->uri->segment(3);
        $numero =$_GET['numero'];
           $model=$this->load->model("Model_Form"); 
           $data["lesFormation"] = $this->Model_Form->getAllFormations($numero);
           $this->load->view('v_form',$data);
     }
     
     public function afficherAgents(){
         $numeroFormation=$_GET['numeroFormation'];
         $model=$this->load->model("Model_Agents");
          $data['lesAgents'] = $this->Model_Agents->getAllAgents($numeroFormation);
          $this->load->view('v_agents',$data);
     }
 }
