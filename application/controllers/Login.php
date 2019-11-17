<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function siswa()
	{
		$this->load->view('login_siswa');
	}

	public function guru()
	{
		$this->load->view('login_guru');
	}
	public function register()
	{
		$this->load->view('register');
	}
	function actionguru()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$where = array(
			'nip' => $nip,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("pengguna_guru", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nip' => $nip,
				'status' => "guru",
			);

			$this->session->set_userdata($data_session);

			redirect(base_url('home'));
		} else {
			echo '<script>';
			echo 'alert("NIP / password salah atau tidak terdaftar")';
			echo '</script>';
		}
	}

	function actionsiswa()
	{
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');
		$where = array(
			'nis' => $nis,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("pengguna_siswa", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nis' => $nis,
				'status' => "siswa",
			);

			$this->session->set_userdata($data_session);

			redirect(base_url('siswa'));
		} else {
			echo '<script>';
			echo 'alert("NIS / password salah atau tidak terdaftar")';
			echo '</script>';
		}
	}
	function regisProcess()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$no_absen = $this->input->post('no_absen');
		$password = $this->input->post('password');
		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'no_absen' => $no_absen,
			'status_pengerjaan' => 1,
			'password' => $password
		);

		$datacek = array(
			'nis' => $nis,
		);

		$cek = $this->db->get_where('pengguna_siswa', $datacek)->num_rows();
		if ($cek > 0) {
			echo '<script>';
			echo 'alert("NIS sudah terdaftar")';
			echo '</script>';
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$insert = $this->db->insert('pengguna_siswa', $data);
			if ($insert == 1) {
				redirect(base_url('login/siswa'));
			} else {
				echo '<script>';
				echo 'alert("Gagal")';
				echo '</script>';
			}
		}
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
