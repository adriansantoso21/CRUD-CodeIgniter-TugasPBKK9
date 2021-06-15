<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model
{
    private $_table = "mhs";

    public $nrp;
    public $nama;
    public $alamat;
    public $no_hp;
    public $jurusan;

    public function rules()
    {
        return [
            ['field' => 'nrp',
            'label' => 'Nrp',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'no_hp',
            'label' => 'No_hp',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($nrp)
    {
        return $this->db->get_where($this->_table, ["nrp" => $nrp])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        $this->jurusan = $post["jurusan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        $this->jurusan = $post["jurusan"];
        return $this->db->update($this->_table, $this, array('nrp' => $post['nrp']));
    }

    public function delete($nrp)
    {
        return $this->db->delete($this->_table, array("nrp" => $nrp));
    }
}