<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //função para verificar sessão
    public function verificar_sessao()
    {
        if($this->session->userdata('logado') == false){
            redirect('login');
        }//é necessario copiar essa função em todos metodos controles privados
    }
	
	public function index()
	{
		$this->load->view('login');
	}
        
        public function logar()
        {
            $usuario = $this->input->post('usuario');//pegndo osvalores do formulário pelo metodo post
            $senha = md5($this->input->post('senha'));
            
            //carrega a classe model login
            $this->load->model('login_model','login');
            
            //chama o metodo que faz a consulta no banco da classe model
            $query = $this->login->getUsuarioSennha($usuario, $senha);
            
            //verifica se foi encontrado registros
            if($query != NULL){
                $dados['usuario'] = $query;
                $dados['logado'] = true;
                $this->session->set_userdata($dados);
                
                redirect('paineladm');
            }else{
                redirect('login');
            }
        }
        
        //função para sair do usuario, deslogar
        public function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
}
