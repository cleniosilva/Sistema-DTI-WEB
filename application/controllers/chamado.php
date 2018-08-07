<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chamado extends CI_Controller {

//função para verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function index() {
        $this->load->model('unidade_model','unidades');
        $dados['unidades'] = $this->unidades->getAll();
        $this->load->view('chamado',$dados);
    }
    
    public function listarChamadosAberto(){
        $this->verificar_sessao();
        $this->load->model('chamado_model','chamados');
        
        $config = array(
            "base_url" => base_url('chamado/p'),
            "per_page" => 6,
            "num_links" => 3,
            "uri_segment" => 3,
            "total_rows" => $this->chamados->countAll(),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        
        $this->pagination->initialize($config);
        $dados['pagination'] = $this->pagination->create_links();
        
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $dados['chamados'] = $this->chamados->getChamados('id_cha','asc',$config['per_page'],$offset);
        
        $this->load->view('cabecalho');
        $this->load->view('listarChamadosAberto',$dados);
        $this->load->view('rodape');
    }
    
    public function listarChamadosAtendidos(){
        $this->verificar_sessao();
        $this->load->model('chamado_model','chamados');
        
        $config = array(
            "base_url" => base_url('chamado/d'),
            "per_page" => 6,
            "num_links" => 3,
            "uri_segment" => 3,
            "total_rows" => $this->chamados->countAll(),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        
        $this->pagination->initialize($config);
        $dados['pagination'] = $this->pagination->create_links();
        
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $dados['chamados'] = $this->chamados->getChamadosAtendidos('id_cha','asc',$config['per_page'],$offset);
        
        $this->load->view('cabecalho');
        $this->load->view('listarChamadosAtendidos',$dados);
        $this->load->view('rodape');
    }
    
    public function salvar(){
             
        $this->load->model('chamado_model','chamados');
        
        $dados['nome_requisitante'] = $this->input->post('nome_requisitante');
        $dados['email_cha'] = $this->input->post('email_cha');
        $dados['telefone_cha'] = $this->input->post('telefone_cha');
        $dados['id_unid'] = $this->input->post('id_unid');
        $dados['data_cha'] = $this->input->post('data_cha');
        $dados['horario_cha'] = $this->input->post('horario_cha');
        $dados['descricao_servico'] = $this->input->post('descricao_servico');
        if($this->input->post('codigo') != NULL){
            $dados['status'] = $this->input->post('status');
        }
        $dados['observacao_atend'] = $this->input->post('observacao_atend');
        $dados['id_tecni'] = $this->input->post('id_tecni');
        
        if($this->input->post('codigo') != NULL){
            $this->chamados->editarChamado($dados, $this->input->post('codigo'));
            redirect('chamado/listarChamadosAberto');
             $this->load->view('msg_sucess');
        }else{
            $this->chamados->addChamado($dados);            
            redirect('chamado');
        }
        
    }
    
    public function pesquisarChamadosEmAberto($id = NULL){
        $this->verificar_sessao();
        if($id == NULL){
             redirect('chamado/listarChamadosAberto');
        }
        $this->load->model('tecnicos_model','tecnicos');
        $this->load->model('unidade_model','unidades');
        $this->load->model('chamado_model','chamados');
        
        $dados['tecnicos'] = $this->tecnicos->getTecnicos();
         $dados['unidades'] = $this->unidades->getAll();
         
         $query = $this->chamados->getChamadoByID($id);
         
         if($query == NULL){
             redirect('chamado/listarChamadosAberto');
         }
         
         $dados['chamados'] = $query;
         
         $this->load->view('cabecalho');
         $this->load->view('pesquisarChamado',$dados);
         $this->load->view('rodape');
    }
    
    public function pesquisar($id = NULL){
        $this->verificar_sessao();
        if($id == NULL){
             redirect('chamado/listarChamadosAtendidos');
        }
        $this->load->model('tecnicos_model','tecnicos');
        $this->load->model('unidade_model','unidades');
        $this->load->model('chamado_model','chamados');
        
        $dados['tecnicos'] = $this->tecnicos->getTecnicos();
         $dados['unidades'] = $this->unidades->getAll();
         
         $query = $this->chamados->getChamadoByID($id);
         
         if($query == NULL){
             redirect('chamado/listarChamadosAtendidos');
         }
         
         $dados['chamados'] = $query;
         
         $this->load->view('cabecalho');
         $this->load->view('pesquisarChamado',$dados);
         $this->load->view('rodape');
    }
    
    public function  editar($id = NULL){
        $this->verificar_sessao();
        if($id == NULL){
            redirect('chamado/listarChamadosAberto');
        }
        $this->load->model('tecnicos_model','tecnicos');
        $this->load->model('unidade_model','unidades');
        $this->load->model('chamado_model','chamados');
        
        $dados['tecnicos'] = $this->tecnicos->getTecnicos();
         $dados['unidades'] = $this->unidades->getAll();
         
         $query = $this->chamados->getChamadoByID($id);
         
         if($query == NULL){
             redirect('chamado/listarChamadosAberto');
         }
         
         $dados['chamados'] = $query;
         
         $this->load->view('cabecalho');
         $this->load->view('editarChamado',$dados);
         $this->load->view('rodape');
    }
    
    public function deletar($id){
        $this->verificar_sessao();
        
        $this->load->model('chamado_model','chamados');
        
        if($this->chamados->deletarChamado($id)){
            redirect('chamado/listarChamadosAberto');
            
        }else{
            $this->load->view('msg_erro');
            $this->load->view('cabecalho');
            $this->load->view('chamado/listarChamadosAberto');
            $this->load->view('rodape');
        }
    }


}
