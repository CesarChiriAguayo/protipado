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
        $this->imagen = 'default.jpg';
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

    public function CargarEditar($idp){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id',$idp);
        return $this->db->get();
    }

    public function GuardarEditarUsuario($ids,$login,$fullname,$email,$phone,$birthday,$gender,$tipo){
        $this->db->where('id', $ids);
        $this->db->update('usuarios', array('usuario' => $login,'nombre' => $fullname,'correo' => $email,'telefono' => $phone,'tipo' => $tipo,'genero' => $gender,'cumple' => $birthday));
        return true;
    }

    public function CambiarPassword($idp,$password,$newPassword){
        $mensaje = "Password Actualizado";
        $this->db->select('id');
        $this->db->from('usuarios');
        $this->db->where('id',$idp);
        $this->db->where('password',$password);
        $consulta = $this->db->get();
        if($consulta->num_rows()>0)
        {
            $this->db->where('id', $idp);
            $this->db->update('usuarios', array('password' => $newPassword));
        }
        else
        {
            $mensaje = "Antiguo Password Incorrecto";
        }
        return $mensaje;
    }

    public function ActualizarImagen($idp,$imagen){
        $mensaje = "Imagen Actualizada";
        $this->db->where('id', $idp);
        $this->db->update('usuarios', array('imagen' => $imagen));
        return $mensaje;
    }
}
?>