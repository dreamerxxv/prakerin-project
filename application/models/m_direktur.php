<?php

class M_direktur extends CI_Model{
    public function tampil_data()
    {
    return $this->db->get('proker');
    }

    public function input_data($data)
    {
        $this->db->insert('proker', $data);
    }

    public function hapus_data($where)
    {
    $this->db->where($where);
    $this->db->delete('proker');
    }

    public function edit_data($where)
    {
       return $this->db->get_where('proker', $where);
    }

    public function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('proker', $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('proker', array('id' => $id))->row();
        return $query;
    }

    public function printf($id = NULL)
    {
        $query = $this->db->get_where('proker')->row();
        return $query;
    }

    public function tampil_info()
    {
    return $this->db->get('inform');
    }

    public function input_info($data)
    {
        $this->db->insert('inform', $data);
    }
}
?>