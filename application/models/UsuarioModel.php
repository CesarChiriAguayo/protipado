<?php
class UsuarioModel extends CI_model{
    
    public function ValidarInicio($loggin,$password)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('usuario',$loggin);
        $this->db->where('password',$password);
        return $this->db->get();
    }

    public function RegistrarUsuario($login,$fullname,$email,$phone,$birthday,$gender,$password){
        $this->usuario = $login;
        $this->nombre = $fullname;
        $this->correo = $email;
        $this->telefono = $phone;
        $this->password = $password;
        $this->tipo = "Usuario";
        $this->genero = $gender;
        $this->cumple = $birthday;
        $this->imagen = '';
        $this->db->trans_start();
        $this->db->insert("usuarios", $this);

        $idUser = $this->db->insert_id();
        $historial = array(
            "fecha" => date('Y-m-d H:i:s'),
            "mensaje" => "Nuevo usuario registrado ID: ".$idUser." Nombre: ".$this->nombre
        );
        $this->db->insert("usuarios_historial", $historial);
        $this->db->trans_complete();
        return true;
    }

    public function CargarEditar(){
        $dip = $this->session->userdata('idusuario');
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id',$dip);
        return $this->db->get();
    }
}
?>