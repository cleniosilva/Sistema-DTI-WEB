<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnicos extends CI_Controller {

    //função para verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        $this->load->model('tecnicos_model','tecnicos');
        
        $dados['tecnicos'] = $this->tecnicos->getTecnicos();
        $this->load->view('cabecalho');
        $this->load->view('listarTecnicos',$dados);
        $this->load->view('rodape');
    }
    
    public function novo(){
        $this->verificar_sessao();
        $this->load->view('cabecalho');
        $this->load->view('novoTecnico');
        $this->load->view('rodape');
    }
    
    public function salvar(){
        $this->verificar_sessao();
        
        $this->load->model('tecnicos_model','tecnicos');
        
        $dados['nome_tecni'] = $this->input->post('nome');
        $dados['email_tecni'] = $this->input->post('email');
        $dados['telefone_tecni'] = $this->input->post('telefone');
        
        if($this->input->post('codigo') != NULL){
            $this->tecnicos->editarTecnico($dados, $this->input->post('codigo'));
        }else{
            $this->tecnicos->addTecnico($dados);
        }
        redirect('tecnicos');
        $this->load->view('msg_sucess');
       
    }
    
    public function editar($id = NULL){
        $this->verificar_sessao();
        
        if($id == NULL){
           redirect('tecnicos');
        }
        $this->load->model('tecnicos_model','tecnicos');
        
        $query = $this->tecnicos->getTecnicoByID($id);
        
        if($query == NULL){
            redirect('tecnicos');
        }
        //criamos um array onde vamos armazenar os dados do tecnico e passamos como parametro para view
        $dados['tecnico'] = $query;
        
        $this->load->view('cabecalho');
        $this->load->view('editarTecnico',$dados);
        $this->load->view('rodape');
    }
    
    public function deletar($id)
    { 
        $this->load->model('tecnicos_model','tecnicos');
        
        if($this->tecnicos->deletatTecnico($id)){
            redirect('tecnicos');
        }else{
            $this->load->view('msg_erro');
            $this->load->view('cabecalho');
            $this->load->view('listarTecnicos');
            $this->load->view('rodape');
            
        }
        
    }

}
