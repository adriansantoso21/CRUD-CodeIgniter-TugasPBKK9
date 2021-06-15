<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mhs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mhs_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["mhs"] = $this->mhs_model->getAll();
        $this->load->view("admin/mhs/list", $data);
    }

    public function add()
    {
        $mhs = $this->mhs_model;
        $validation = $this->form_validation;
        $validation->set_rules($mhs->rules());

        if ($validation->run()) {
            $mhs->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/mhs/new_form");
    }

    public function edit($nrp = null)
    {
        if (!isset($nrp)) redirect('admin/mhs');
       
        $mhs = $this->mhs_model;
        $validation = $this->form_validation;
        $validation->set_rules($mhs->rules());

        if ($validation->run()) {
            $mhs->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["mhs"] = $mhs->getById($nrp);
        if (!$data["mhs"]) show_404();
        
        $this->load->view("admin/mhs/edit_form", $data);
    }

    public function delete($nrp=null)
    {
        if (!isset($nrp)) show_404();
        
        if ($this->mhs_model->delete($nrp)) {
            redirect(site_url('admin/mhs'));
        }
    }
}