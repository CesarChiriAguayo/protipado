<?php
class Inicio extends CI_Controller{
    public function index(){
        
        $this->load->view("encabezado");
        $this->load->view("inicio");
        $this->load->view("pie");
    }
    public function login(){
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('login'))
        {
            redirect('usuario/config','refresh');
        }
        else
        {
            $this->load->view("encabezado");
            $this->load->view("usuario/login");
            $this->load->view("pie");
        }
    }
    public function register(){
        
        $this->load->view("encabezado");
        $this->load->view("usuario/register");
        $this->load->view("pie");
    }
}
?>