<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
    //impedi o acesso a essa pagina fora do servidor

 
 class usuario_model extends CI_Model{
     
     public function addUsuario($dados=NULL)
     {
         if($dados != NULL):
             $this->db->insert('usuário',$dados);
         endif;
     }
 }