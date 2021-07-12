<?php
class Login extends CI_Controller{
    public function index(){
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('idusuario'))
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

    public function editarUsuario(){
        if($this->session->userdata('idusuario'))
        {
            $idp = $this->session->userdata('idusuario');
            $datos['consulta']=$this->UsuarioModel->CargarEditar($idp);
            $this->load->helper('form');
            $this->load->view("encabezado");
            $this->load->view("usuario/edit",$datos);
            $this->load->view("pie");
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
        $this->form_validation->set_rules('username', 'Usuario', 'required'); 
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_message('required', 'Debe llenar el campo %s');
        $password=md5($password);

        if ($this->form_validation->run()== FALSE)
        {
            //redirect('login/index/4','refresh');
            //$data['msg']=$this->uri->segment(3);
            //$this->load->view('usuario/login',$data);
            $this->index();
        }
        else
        {
            $consulta=$this->UsuarioModel->ValidarInicio($login,$password);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $row)
                {
                    $this->session->set_userdata('idusuario',$row->id);
                    $this->session->set_userdata('tipo',$row->tipo);
                    if ($this->session->userdata('tipo'=='Administrador'))
                    {
                        redirect('login/inicio','refresh');
                    }
                    else
                    {
                        redirect('vender','refresh');
                    }
                }
            }
            else
            {
                redirect('login/index/1','refresh');
            }
        }
    }

    public function inicio(){
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('idusuario'))
        {
            //if ($this->session->userdata('tipo'=='Administrador'))
            //{
                //ir al menu del admin
            //}
            //else
            //{
                //menu del normal
            //}
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

    public function registrar(){
        $this->load->helper('form');
        $this->load->view("encabezado");
        $this->load->view("usuario/register");
        $this->load->view("pie");
    }

    public function registrarUsuario(){
        $this->load->library('form_validation');
        $login=$_POST['username'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $birthday=$_POST['birthday'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $this->form_validation->set_rules('username','Nombre de Usuario','trim|required|min_length[3]');
        $this->form_validation->set_rules('fullname','Nombre completo','trim|required|min_length[3]');
        $this->form_validation->set_rules('email','Correo Electronico','trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_rules('phone','Telefono/Celular','required');
        $this->form_validation->set_rules('birthday','Fecha de Nacimiento','required');
        $this->form_validation->set_rules('gender','Genero','required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_message('required', 'Debe llenar el campo %s');
        $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener un minimo de 3 letras');
        $this->form_validation->set_message('valid_email', 'El campo %s no es valido');
        $this->form_validation->set_message('matches[password]', 'La contrasña no coincide');
        $password=md5($password);

        if ($this->form_validation->run()== FALSE)
        {
            $this->Registrar();
        }
        else
        {
            $consulta=$this->UsuarioModel->RegistrarUsuario($login,$fullname,$email,$phone,$birthday,$gender,$password);
            redirect('login/index','refresh');
        }
    }

    public function GuardarEditarUsuario(){
        $this->load->library('form_validation');
        $idp=$_POST['ids'];
        $login=$_POST['username'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $birthday=$_POST['birthday'];
        $gender=$_POST['gender'];
        $tipo=$_POST['tipo'];
        $this->form_validation->set_rules('username','Nombre de Usuario','trim|required|min_length[3]');
        $this->form_validation->set_rules('fullname','Nombre completo','trim|required|min_length[3]');
        $this->form_validation->set_rules('email','Correo Electronico','trim|required|valid_email');
        $this->form_validation->set_rules('phone','Telefono/Celular','required');
        $this->form_validation->set_rules('birthday','Fecha de Nacimiento','required');
        $this->form_validation->set_rules('gender','Genero','required');
        $this->form_validation->set_message('required', 'Debe llenar el campo %s');
        $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener un minimo de 3 letras');
        $this->form_validation->set_message('valid_email', 'El campo %s no es valido');

        if ($this->form_validation->run()== FALSE)
        {
            $this->editarUsuario();
        }
        else
        {
            $consulta=$this->UsuarioModel->GuardarEditarUsuario($idp,$login,$fullname,$email,$phone,$birthday,$gender,$tipo);
            redirect('login/editarUsuario','refresh');
        }
    }

    public function cambioPassword(){
        $this->load->library('form_validation');
        $ids=$_POST['ids'];
        $password=$_POST['password'];
        $new_password=$_POST['new_password'];
        $this->form_validation->set_rules('password','Contraseña','required');
        $this->form_validation->set_rules('new_password','Nueva Contraseña','required');
        $this->form_validation->set_message('required', 'Debe llenar el campo %s');
        $password=md5($password);
        $new_password=md5($new_password);
        if ($this->form_validation->run()== FALSE)
        {
            $this->editarUsuario();
        }
        else
        {
            $consulta=$this->UsuarioModel->CambiarPassword($ids,$password,$new_password);
            redirect('login/editarUsuario','refresh');
        }
    }

    public function cambiarImagen(){
        $ids = $_POST['ids'];
        $archivo = $ids.".jpg";
        //ruta de guardado
        $config['upload_path'] = './upload/usuarios/';
        //nombre del archivo
        $config['file_name'] = $archivo;
        //borrado previo
        $direccion = './upload/usuarios/'.$archivo;
        if (is_file($direccion)) {
            unlink($direccion);
        }
        $config['allowed_types'] = 'jpg';
        $this->load->library('upload',$config);
        //subida
        if($this->upload->do_upload('imgInp'))
        {
            $consulta=$this->UsuarioModel->ActualizarImagen($ids,$archivo);
            redirect('login/editarUsuario','refresh');
        }
        else
        {
            $data['error'] = $this->upload->display_errors();
        }
    }

}
?>