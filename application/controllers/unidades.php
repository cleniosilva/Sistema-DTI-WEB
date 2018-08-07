
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unidades extends CI_Controller{
    //função para verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    
    public function index(){
        $this->verificar_sessao();
        $this->load->model('unidade_model','unidades');
        
        $config = array(
            "base_url" => base_url('unidades/p'),
            "per_page" => 6,
            "num_links" => 3,
            "uri_segment" => 3,
            "total_rows" => $this->unidades->countAll(),
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
        $dados['unidades'] = $this->unidades->getUnidades('nome_unid','asc',$config['per_page'], $offset);
        
        $this->load->view('cabecalho');
        $this->load->view('listarUnidades',$dados);
        $this->load->view('rodape');
    }
    
    public function novo(){
        $this->verificar_sessao();
         $this->load->model('secretaria_model','secretaria');
        
        $dados['secretaria'] = $this->secretaria->getSecretarias();
        $this->load->view('cabecalho');
        $this->load->view('novaUnidade',$dados);
        $this->load->view('rodape');      
            
    }
    
    public function salvar(){
        $this->verificar_sessao();
        
        $this->load->model('unidade_model','unidade');
        
        $dados['nome_unid'] = $this->input->post('nome_unid');
        $dados['telefone_unid'] = $this->input->post('telefone_unid');
        $dados['rua_unid'] = $this->input->post('rua_unid');
        $dados['numero_unid'] = $this->input->post('numero_unid');
        $dados['bairro_unid'] = $this->input->post('bairro_unid');
        $dados['cidade_unid'] = $this->input->post('cidade_unid');
        $dados['id_secret'] = $this->input->post('id_secret');
        
        if($this->input->post('codigo') != NULL){
            $this->unidade->editarUnidade($dados, $this->input->post('codigo'));
        }else{
            $this->unidade->addUnidade($dados);
        }
        redirect('unidades');
        $this->load->view('msg_sucess');
    }
    
    public function editar($id = NULL){
        $this->verificar_sessao();
        
        if($id == NULL){
            redirect('unidades');
        }
        $this->load->model('unidade_model','unidade');
        $this->load->model('secretaria_model','secretaria');
        
        $dados['secretaria'] = $this->secretaria->getSecretarias();
        
        $query = $this->unidade->getUnidadeByID($id);
        
        if($query == NULL){
            redirect('unidades');
        }
        
        $dados['unidade'] = $query;
        
        $this->load->view('cabecalho');
        $this->load->view('editarUnidade',$dados);
        $this->load->view('rodape');
    }
    
    public function deletar($id){
         $this->verificar_sessao();
        
        $this->load->model('unidade_model','unidade');
        
        if($this->unidade->deletarUnidade($id)){
            redirect('unidades');
        }else{
            $this->load->view('msg_erro');
            $this->load->view('cabecalho');
            $this->load->view('listarUnidades');
            $this->load->view('rodape');
            
        }
    }
}