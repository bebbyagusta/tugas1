<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "		Nama	:Bebby Pramudya Citra Agusta", 
				'ttl' => "		TTL		:Blitar, 11 September 1996", 
				'alamat' => "	Alamat	:Jalan Bromo Dalam No.52 Wlingi-Blitar", 
				'hoby' => "		Hobby	:Tamasya", 
				'kuliah' => "	Kuliah	:Politeknik Negeri Malang",
				'jurusan' => "	Julusan	:Teknologi Informatika",
				'kelas' => "	Kelas	:TI 2A",
				'nim' => "		nim		:1541180034",
			);
		$this->load->view('about',$data);
	}
}