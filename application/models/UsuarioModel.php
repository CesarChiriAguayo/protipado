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
}
?>