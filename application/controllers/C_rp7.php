<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_rp7 extends CI_Controller
{

	/**
	 * Developer : Didin Tri Anggoro
	 * Github	 : https://github.com/didintri197
	 * Email	 : didintri197@gmail.com
	 * Create At : 04-04-2021
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('App');
	}

	public function index()
	{
		$view['_title'] = "Data RP7 &mdash; E-Register Kejari Kota Kediri";
		// $view['listdata'] = $this->App->get_all_orderby('jabatan', "id", "DESC");
		$this->template->display_theme('pages/V_rp7', $view);
	}
}
