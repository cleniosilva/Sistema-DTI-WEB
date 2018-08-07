<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    //função para verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    public function index() {
        $this->verificar_sessao();
        $this->load->view('cabecalho');
        $this->load->view('novoUsuario');
        $this->load->view('rodape');
    }
    
    public function salvar(){
        $this->verificar_sessao();
        
        $this->load->model('usuario_model','usuario');
        
        $dados['usuario'] = $this->input->post('usuario');
        $dados['senha'] = md5($this->input->post('senha'));
        $dados['email'] = $this->input->post('email');
        
        $this->usuario->addUsuario($dados);
        
        $this->load->view('msg_sucess');
        $this->load->view('cabecalho');
        $this->load->view('novoUsuario');
        $this->load->view('rodape');
        
    }
    

}
