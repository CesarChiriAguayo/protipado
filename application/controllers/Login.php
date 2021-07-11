<?php
class Login extends CI_Controller{
    public function index(){
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('login'))
        {
            redirect('usuario/config','refresh');
        }
        else
        {
            $this->load->helper('form');
            $this->load->view("encabezado");
            $this->load->view("usuario/login",$data);
            $this->load->view("pie");
        }
    }

    public function ValidarUser()
    {
        $this->load->library('form_validation');
        $login=$_POST['username'];
        $password=$_POST['password'];
        $this->form_validation->set_rules('username', 'username', 'required'); 
        $this->form_validation->set_rules('password', 'password', 'required');
        $password=md5($password);

        if ($this->form_validation== FALSE)
        {
            redirect('login/index/4','refresh');
        }
        else
            $consulta=$this->UsuarioModel->ValidarInicio($login,$password);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $row)
                {
                    $this->session->set_userdata('idusuario',$row->id);
                    $this->session->set_userdata('tipo',$row->tipo);
                }
                redirect('login/inicio','refresh');
            }
            else
            {
                redirect('login/index/1','refresh');
            }
    }

    public function inicio(){
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('idusuario'))
        {
            if ($this->session->userdata('tipo'=='Administrador'))
            {
                //ir al menu del admin
            }
            else
            {
                //menu del normal
            }
            $this->load->view("encabezado");
            $this->load->view("inicio");
            $this->load->view("pie");
        }
        else
        {
            redirect('login/index/2','refresh');
        }
    }

    public function cerrarSesion(){
        $this->session->sess_destroy();
        redirect('login/index/3','refresh');
    }

    public function registrarUsuario(){
        
    }

}
?>