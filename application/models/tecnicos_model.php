<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//impedi o acesso a essa pagina fora do servidor


class tecnicos_model extends CI_Model {

    public function getTecnicos() {
        $query = $this->db->get('tecnico');
        return $query->result();
    }

    public function addTecnico($dados = NULL) {
        if ($dados != NULL):
            $this->db->insert('tecnico', $dados);
        endif;
    }
    
    public function getTecnicoByID($id=NULL)
    {
        if($id != NULL):
            $this->db->where('id_tecni',$id);
            $this->db->limit(1);
            $query = $this->db->get('tecnico');
            return $query->row();
        endif;
    }

    public function editarTecnico($dados = NULL, $id = NULL) {
        if ($dados != NULL && $id != NULL):
            $this->db->update('tecnico', $dados, array('id_tecni' => $id));
        endif;
    }

    public function deletatTecnico($id) {
        $this->db->where('id_tecni',$id, FALSE);
        return $this->db->delete('tecnico');
    }

}
