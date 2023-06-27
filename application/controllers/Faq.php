

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            $data = array(
                'faqs' => $this->core_model->get_all('faqs', array('faq_interno' => 2)),
            );
        } else {
            $data = array(
                'faqs' => $this->core_model->get_all('faqs'),
            );
        }

        $this->load->view('faq/index', $data);
    }

    public function add()
    {
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('error', 'Você não tem permissão para acessar essa página');
            redirect('/');
        }
        $this->form_validation->set_rules('faq_sistema', '', 'trim|required');
        if ($this->form_validation->run()) {
            $data = [

                'faq_sistema' => $this->input->post('faq_sistema'),
                'faq_tecnico' => $this->input->post('faq_tecnico'),
                'faq_problema' => $this->input->post('faq_problema'),
                'faq_solucao' => $this->input->post('faq_solucao'),
                'faq_tag' => $this->input->post('faq_tag'),
                'faq_interno' => $this->input->post('faq_interno'),
            ];

            $this->core_model->insert('faqs', $data);
            redirect('faq');
        } else {
            $this->load->view('faq/add');
        }
    }
    public function edit($id = NULL)
    {

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('error', 'Você não tem permissão para acessar essa página');
            redirect('/');
        }
        if (!$id || !$this->core_model->get_by_id('faqs', array('id' => $id))) {
            $this->session->set_flashdata('error', 'registro não encontrado');
            redirect('faq');
        } else {
            $this->form_validation->set_rules('faq_sistema', '', 'trim|required');
            if ($this->form_validation->run()) {
                $data = [

                    'faq_sistema' => $this->input->post('faq_sistema'),
                    'faq_tecnico' => $this->input->post('faq_tecnico'),
                    'faq_problema' => $this->input->post('faq_problema'),
                    'faq_solucao' => $this->input->post('faq_solucao'),
                    'faq_tag' => $this->input->post('faq_tag'),
                    'faq_interno' => $this->input->post('faq_interno'),
                ];
                $this->core_model->update('faqs', $data, array('id' => $id));
                redirect('faq');
            } else {
                $data = array(
                    'faq' => $this->core_model->get_by_id('faqs', array('id' => $id)),
                );
                $this->load->view('faq/edit', $data);
            }
        }
    }
    public function show($id = NULL)
    {

        if (!$id || !$this->core_model->get_by_id('faqs', array('id' => $id))) {
            $this->session->set_flashdata('error', 'registro não encontrado');
            redirect('faq');
        } else {

            if ($this->form_validation->run()) {
                $data = [

                    'faq_sistema' => $this->input->post('faq_sistema'),
                    'faq_tecnico' => $this->input->post('faq_tecnico'),
                    'faq_problema' => $this->input->post('faq_problema'),
                    'faq_solucao' => $this->input->post('faq_solucao'),
                    'faq_tag' => $this->input->post('faq_tag'),
                    'faq_interno' => $this->input->post('faq_interno'),
                ];
            } else {

                $data = array(
                    'faq' => $this->core_model->get_by_id('faqs', array('id' => $id)),
                );
                $this->load->view('faq/show', $data);
            }
        }
    }
}
