<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_perkara extends CI_Controller
{

	/**
	 * Developer : Didin Tri Anggoro
	 * Github	 : https://github.com/didintri196
	 * Email	 : didintri196@gmail.com
	 * Create At : 04-04-2021
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('App');

		//cek login
		if ($this->session->userdata('auth') == false) {
			redirect(base_url('auth/login'));
		}
	}

	public function index()
	{
		$view['_title'] = "Data Perkara &mdash; E-Register Kejari Kota Kediri";
		// $view['listdata'] = $this->App->get_all_orderby('jabatan', "id", "DESC");
		$this->template->display_theme('pages/V_perkara', $view);
	}
}
