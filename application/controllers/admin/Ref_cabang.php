<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ref_cabang extends MY_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/table_cabang', 'table');
    }

    public function index()
    {
        $data = [
            'index' => 'admin/ref_cabang/index',
            'index_js' => 'admin/ref_cabang/index_js',
            'title' => 'Referensi Cabang',
        ];

        $this->templates->load($data);
    }

    public function table()
    {
        echo $this->table->generate_table();
    }

    public function tambah()
    {
        $data = [];
        $html = $this->load->view('admin/ref_cabang/form', $data, true);

        echo json_encode([
            'status' => 'success',
            'html' => $html,
        ]);
    }

    public function ubah()
    {
        $id = decode_id($this->input->post('id'));
        $data['id'] = $id;
        $data['data'] = $this->db->query("SELECT * from ref_cabang where id='$id' and deleted is null ")->row();
        $html = $this->load->view('admin/ref_cabang/form', $data, true);

        echo json_encode([
            'status' => 'success',
            'html' => $html,
        ]);
    }

    public function do_submit()
    {
        cek_post();
        $id = decode_id($this->input->post('id'));
        $hapus = $this->input->post('hapus');

        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $kontak = $this->input->post('kontak');

        if (!empty($hapus)) {
            $this->db->where('id', $id);
            $this->db->update('ref_cabang', [
                'deleted' => date('Y-m-d H:i:s'),
            ]);
        } else {
            if (empty($id)) {
                $this->db->insert('ref_cabang', [
                    'nama' => $nama,
                    'lokasi' => $lokasi,
                    'kontak' => $kontak,
                    'created' => date('Y-m-d H:i:s'),
                ]);
            } else {
                $this->db->where('id', $id);
                $this->db->update('ref_cabang', [
                    'nama' => $nama,
                    'lokasi' => $lokasi,
                    'kontak' => $kontak,
                    'updated' => date('Y-m-d H:i:s'),
                ]);
            }
        }

        echo json_encode([
            'status' => 'success'
        ]);
    }
}
