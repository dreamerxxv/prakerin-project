<?php

class Direktur extends CI_Controller{
    public function index()
    {
        $data['direktur'] = $this->m_direktur->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('direktur',$data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $id                    = $this->input->post('id');
        $ruang_udara           = $this->input->post('ruang_udara');
        $indikator_keselamatan = $this->input->post('indikator_keselamatan');
        $penyusunan_dokumen    = $this->input->post('penyusunan_dokumen');
        $realisasi_anggaran    = $this->input->post('realisasi_anggaran');
        $pencapaian_target     = $this->input->post('pencapaian_target');
        $nilai_aset            = $this->input->post('nilai_aset');
        $tingkat_maturitas     = $this->input->post('tingkat_maturitas');
        $tanggal               = $this->input->post('tanggal');

        $data = array(
            'ruang_udara'           => $ruang_udara,
            'indikator_keselamatan' => $indikator_keselamatan,
            'penyusunan_dokumen'    => $penyusunan_dokumen,
            'realisasi_anggaran'    => $realisasi_anggaran,
            'pencapaian_target'     => $pencapaian_target,
            'nilai_aset'            => $nilai_aset,
            'tingkat_maturitas'     => $tingkat_maturitas,
            'tanggal'               => $tanggal,
        );

        $this->m_direktur->input_data($data, 'proker');
        redirect('direktur/index');
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->m_direktur->hapus_data($where, 'proker');
        redirect('direktur/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['direktur'] = $this->m_direktur->edit_data($where, 'proker')->result();
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('edit',$data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $id                    = $this->input->post('id');
        $ruang_udara           = $this->input->post('ruang_udara');
        $indikator_keselamatan = $this->input->post('indikator_keselamatan');
        $penyusunan_dokumen    = $this->input->post('penyusunan_dokumen');
        $realisasi_anggaran    = $this->input->post('realisasi_anggaran');
        $pencapaian_target     = $this->input->post('pencapaian_target');
        $nilai_aset            = $this->input->post('nilai_aset');
        $tingkat_maturitas     = $this->input->post('tingkat_maturitas');
        $tanggal               = $this->input->post('tanggal');

        $data = array(
            'ruang_udara'           => $ruang_udara,
            'indikator_keselamatan' => $indikator_keselamatan,
            'penyusunan_dokumen'    => $penyusunan_dokumen,
            'realisasi_anggaran'    => $realisasi_anggaran,
            'pencapaian_target'     => $pencapaian_target,
            'nilai_aset'            => $nilai_aset,
            'tingkat_maturitas'     => $tingkat_maturitas,
            'tanggal'               => $tanggal,
        );

        $where = array(
            'id' => $id
        );

        $this->m_direktur->update_data($where, $data, 'proker');
        redirect('direktur/index');
    }

    public function detail($id){
        $this->load->model('m_direktur');
        $detail = $this->m_direktur->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('detail',$data);
        $this->load->view('templates/footer');
    }

    public function print_dt(){
        $data['print_dt'] = $this->m_direktur->printf();
        $this->load->view('templates/header');
        $this->load->view('print_data',$data);
        $this->load->view('templates/footer');
    }

    public function info()
    {
        $data['info'] = $this->m_direktur->tampil_info()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('info',$data);
        $this->load->view('templates/footer');
    }

    public function informasi(){
        $id                    = $this->input->post('id');
        $nama                  = $this->input->post('nama');
        $deskripsi             = $this->input->post('deskripsi');
        $tanggal               = $this->input->post('tanggal');

        $data = array(
            'nama'           => $nama,
            'deskripsi'      => $deskripsi,
            'tanggal'        => $tanggal,
        );

        $this->m_direktur->input_info($data, 'info');
        redirect('admin/admin');
    }
}
?>