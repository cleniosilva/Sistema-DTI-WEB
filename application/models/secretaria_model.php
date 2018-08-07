<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Secretaria_model extends CI_Model {

    public function getSecretarias() {
        $query = $this->db->get('secretaria');
        return $query->result();
    }

    public function addSecretaria($dados = NULL) {
        if ($dados != NULL):
            $this->db->insert('secretaria', $dados);
        endif;
    }
    
    public function getSecretariaByID($id=NULL){
        if($id != NULL):
            $this->db->where('id_secret',$id);
            $this->db->limit(1);
            $query = $this->db->get('secretaria');
            return $query->row();
        endif;
    }
    
    public function editarSecretaria($dados = NULL, $id=NULL){
        if($dados != NULL && $id != NULL):
            $this->db->update('secretaria',$dados, array('id_secret'=>$id));
        endif;
    }
    
    public function deletarSecretaria($id){
        $this->db->where('id_secret',$id, FALSE);
        return $this->db->delete('secretaria');
    }

}
