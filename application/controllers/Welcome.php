<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Main_model', 'model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index() {
		$data['games'] = $this->model->read();
		$this->load->view('home', $data);
	}

	public function detail($id = FALSE) {	
		$data['game'] = $this->model->read($id);
		$this->load->view('detail', $data);
	}

	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('platform', 'Platform', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['platforms'] = [
				['label' => 'Nintendo Switch', 'value' => 'nintendo'],
				['label' => 'Playstation 5', 'value' => 'playstation'],
				['label' => 'Steam', 'value' => 'steam'],
				['label' => 'XBOX Series X/S', 'value' => 'xbox'],
			];
			$this->load->view('create', $data);
		} else {
			$id = uniqid('item', true);

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size'] = '1000000';
			$config['file_ext_tolower'] = TRUE;
			$config['filename'] = str_replace('.', '_', $id);

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('cover')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('welcome/create');
			} else {
				$filename = $this->upload->data('file_name');
				$this->model->create($id, $filename);
				redirect('');
			}
		}
	}

	public function update($id) {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('platform', 'Platform', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['platforms'] = [
				['label' => 'Nintendo Switch', 'value' => 'nintendo'],
				['label' => 'Playstation 5', 'value' => 'playstation'],
				['label' => 'Steam', 'value' => 'steam'],
				['label' => 'XBOX Series X/S', 'value' => 'xbox'],
			];
			$data['game'] = $this->model->read($id);
			$this->load->view('update', $data);
		} else {
				$post = $this->model->read($id);

				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '1000000';
				$config['file_ext_tolower'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = $post->cover;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('cover')) {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('welcome/update/'.$id);
				} else {
					$filename = $this->upload->data('file_name');
					$this->model->update($id, $filename);
					redirect('');
				}
		}
	}
	
	public function delete($id = FALSE){
		$post = $this->model->read($id);
		$this->model->delete($id);

		unlink('./upload/'.$post->cover);
		redirect('');
	}
}
