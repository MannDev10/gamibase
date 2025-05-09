<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
    public function create($id, $filename){
        $data = [
            // 'id' => $id,
            'title' => $this->input->post('title', TRUE),
            'desc' => $this->input->post('desc', TRUE),
            'genre' => $this->input->post('genre', TRUE),
            'platform' => $this->input->post('platform', TRUE),
            'cover' => $filename
        ];

        $this->db->insert('post', $data);
    }

    public function read($id = FALSE) {
        if($id == FALSE) {
            return $this->db->get('post')->result_array();
        } else {
            $query = $this->db->get_where('post', ['id' => $id]);
            return $query->row();
        }
    }

    public function update($id, $filename){
        $data = [
            'title' => $this->input->post('title', TRUE),
            'desc' => $this->input->post('desc', TRUE),
            'genre' => $this->input->post('genre', TRUE),
            'platform' => $this->input->post('platform', TRUE),
            'cover' => $filename
        ];
        $this->db->where('id', $id);
        $this->db->update('post', $data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('post');
    }
}