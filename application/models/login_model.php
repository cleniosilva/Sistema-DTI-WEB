<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    //impedi o acesso a essa pagina fora do servidor
    
    
    class Login_model extends CI_Model
    {
        public function getUsuarioSennha($usuario=NULL, $senha=NULL)
        {
            if($usuario != NULL && $senha != NULL):
                //verifica se a ID no banco de dados
                $this->db->where('usuario',$usuario);
                $this->db->where('senha',$senha);
                //limita para apenas um registro
                $this->db->limit(1);
                //pega o usuariio
                $query = $this->db->get('usuário');//passando o nome da tabela
                
                //retornamos o usuario
                return $query->row();
            endif;
        }
    }