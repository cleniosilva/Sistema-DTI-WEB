<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Secretarias extends CI_Controller{
    //função para verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    
    public function index(){
        $this->verificar_sessao();
        $this->load->model('secretaria_model','secretaria');
        
        $dados['secretaria'] = $this->secretaria->getSecretarias();
        $this->load->view('cabecalho');
        $this->load->view('listarSecretarias',$dados);
        $this->load->view('rodape');
    }
    
    public function novo(){
        $this->verificar_sessao();
        $this->load->view('cabecalho');
        $this->load->view('novoSecretaria');
        $this->load->view('rodape');
    }
    
    public function salvar(){
        $this->verificar_sessao();
        
        $this->load->model('secretaria_model','secretaria');
        
        $dados['nome_secret'] = $this->input->post('nome_secret');
        
        if($this->input->post('codigo') != NULL){
            $this->secretaria->editarSecretaria($dados, $this->input->post('codigo'));
        }else{
            $this->secretaria->addSecretaria($dados);
        }
        redirect('secretarias');
        $this->load->view('msg_sucess');
    }
    
    public function editar($id = NULL){
        $this->verificar_sessao();
        
        if($id == NULL){
            redirect('secretarias');
        }
        $this->load->model('secretaria_model','secretaria');
        
        $query = $this->secretaria->getSecretariaByID($id);
        
        if($query == NULL){
            redirect('secretarias');
        }
        
        $dados['secretaria'] = $query;
        
        $this->load->view('cabecalho');
        $this->load->view('editarSecretaria',$dados);
        $this->load->view('rodape');
        
    }
    
    public function deletar($id){
        
        $this->load->model('secretaria_model','secretaria');
        
        if($this->secretaria->deletarSecretaria($id)){
            redirect('secretarias');
        }else{
            $this->load->view('msg_erro');
            $this->load->view('cabecalho');
            $this->load->view('listarSecretarias');
            $this->load->view('rodape');
        }
    }
    
}