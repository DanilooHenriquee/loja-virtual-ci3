<?php
defined('BASEPATH') or exit('Ação não permitida');

class Login extends CI_Controller {

    public function index() {
        $data = [
            'titulo' => 'Login na area restrita',
        ];

        $this->load->view('restrita/template/header', $data);
        $this->load->view('restrita/login/index');
        $this->load->view('restrita/template/footer');
    }

    public function auth() {

        $identity = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = ($this->input->post('remember')) ? TRUE : FALSE;
        
        if($this->ion_auth->login($identity, $password, $remember)) {
            $this->session->set_flashdata('sucesso', 'Seja muito bem vindo(a)!');
            redirect('restrita');
        } else {
            $this->session->set_flashdata('erro', 'Por favor verifique suas credencias de acesso!');
            redirect('restrita/login');
        }
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('restrita/login');
    }
}
