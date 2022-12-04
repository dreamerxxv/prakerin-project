<?php

class M_data extends CI_Model{
    public function tampil_data()
    {
        $result = $this->db->get('proker');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
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
}
?>