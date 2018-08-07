<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unidade_model extends CI_Model{
    
    public function getAll(){
         $query = $this->db->get('unidade_local');
          if($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    public  function getUnidades($sort = 'id', $order = 'asc', $limit = null, $offset = null){
        $this->db->order_by($sort, $order);
        
        if($limit){
            $this->db->limit($limit,$offset);
        }
        
        $query = $this->db->get('unidade_local');
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    function countAll(){
        return $this->db->count_all('unidade_local');
    }
    
    public function addUnidade($dados = NULL){
        if($dados != NULL):
            $this->db->insert('unidade_local',$dados);
        endif;
    }
    
    public function getUnidadeByID($id=NULL){
        if($id != NULL):
            $this->db->where('id_unid',$id);
            $this->db->limit(1);
            $query = $this->db->get('unidade_local');
            return $query->row();
        endif;
    }
    
    public function editarUnidade($dados = NULL, $id=NULL){
        if($dados != NULL && $id != NULL):
            $this->db->update('unidade_local',$dados,array('id_unid'=>$id));
        endif;
    }
    
    public function deletarUnidade($id){
        $this->db->where('id_unid',$id, FALSE);
        return $this->db->delete('unidade_local');
    }
}
