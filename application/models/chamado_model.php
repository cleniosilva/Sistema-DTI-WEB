<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chamado_model extends CI_Model{
    public function getChamados($sort = 'id',$order = 'asc', $limit = null, $offset = null){
        $this->db->order_by($sort, $order);
        if($limit){
            $this->db->limit($limit,$offset);
        }
        
        $this->db->where('status',1, FALSE);
        $query = $this->db->get('chamados');
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    //retorna os chamados atendidos
    public function getChamadosAtendidos($sort = 'id',$order = 'asc', $limit = null, $offset = null){
        $this->db->order_by($sort, $order);
        if($limit){
            $this->db->limit($limit,$offset);
        }
        
        $this->db->where('status',0, FALSE);
        $query = $this->db->get('chamados');
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    function countAll(){
        return $this->db->count_all('chamados');
    }
    
    public function addChamado($dados = NULL){
        if($dados != NULL):
            $this->db->insert('chamados',$dados);
        endif;
    }
    
    public function getChamadoByID($id=NULL){
        if($id != NULL):
            $this->db->where('id_cha',$id);
            $this->db->limit(1);
            $query = $this->db->get('chamados');
            return $query->row();
        endif;
    }
    
    public function editarChamado($dados = NULL, $id=NULL){
        if($dados != NULL && $id != NULL):
            $this->db->update('chamados',$dados, array('id_cha'=>$id));
        endif;
    }
    
    public function deletarChamado($id){
        $this->db->where('id_cha',$id, FALSE);
        return $this->db->delete('chamados');
    }
}