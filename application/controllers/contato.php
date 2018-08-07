<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function index() {
        $this->load->view('contato');
    }

    public function enviar() {

        $this->load->library('email');
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');

        $this->email->from($email); //email do remtente
        $this->email->subject("Mensagem contato TI-Web"); //assunto do em-mail
        // $this->email->to('juniorcf17@yahoo.com.br');
        $this->email->to('clenioeduardo@yahoo.com.br');
        $this->email->message($nome . $mensagem);


        if ($this->email->send()) {
            $this->load->view('msg_sucess_1');
            $this->load->view('contato');
        } else {
            $this->load->view('msg_erro');
            $this->load->view('contato');
        }
    }

}
