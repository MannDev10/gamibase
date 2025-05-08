<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['games'] = [
            ['title' => 'The Legend of Zelda: Tears of The Kingdom', 'genre'=> 'Adventure', 'cover' => 'totk.jpg', 'platform' => 'nintendo'],
            ['title' => 'Shadow of The Collosus', 'genre'=> 'Action', 'cover' => 'sotc.jpg', 'platform' => 'playstation'],
            ['title' => 'Forza Horizon 5', 'genre'=> 'Racing', 'cover' => 'fh5.jpg', 'platform' => 'xbox'],
            ['title' => 'Resident Evil 4', 'genre'=> 'Fantasy', 'cover' => 're4.png', 'platform' => 'steam'],
            ['title' => 'The Legend of Zelda: Tears of The Kingdom', 'genre'=> 'Adventure', 'cover' => 'totk.jpg', 'platform' => 'nintendo'],
            ['title' => 'Shadow of The Collosus', 'genre'=> 'Action', 'cover' => 'sotc.jpg', 'platform' => 'playstation'],
            ['title' => 'Forza Horizon 5', 'genre'=> 'Racing', 'cover' => 'fh5.jpg', 'platform' => 'xbox'],
            ['title' => 'Resident Evil 4', 'genre'=> 'Fantasy', 'cover' => 're4.png', 'platform' => 'steam'],
            ['title' => 'The Legend of Zelda: Tears of The Kingdom', 'genre'=> 'Adventure', 'cover' => 'totk.jpg', 'platform' => 'nintendo'],
            ['title' => 'Shadow of The Collosus', 'genre'=> 'Action', 'cover' => 'sotc.jpg', 'platform' => 'playstation'],
            ['title' => 'Forza Horizon 5', 'genre'=> 'Racing', 'cover' => 'fh5.jpg', 'platform' => 'xbox'],
            ['title' => 'Resident Evil 4', 'genre'=> 'Fantasy', 'cover' => 're4.png', 'platform' => 'steam'],
            ['title' => 'The Legend of Zelda: Tears of The Kingdom', 'genre'=> 'Adventure', 'cover' => 'totk.jpg', 'platform' => 'nintendo'],
            ['title' => 'Shadow of The Collosus', 'genre'=> 'Action', 'cover' => 'sotc.jpg', 'platform' => 'playstation'],
            ['title' => 'Forza Horizon 5', 'genre'=> 'Racing', 'cover' => 'fh5.jpg', 'platform' => 'xbox'],
            ['title' => 'Resident Evil 4', 'genre'=> 'Fantasy', 'cover' => 're4.png', 'platform' => 'steam'],
        ];

		$this->load->view('home', $data);
	}

	public function create()
	{
		$this->load->view('create');
	}
}
