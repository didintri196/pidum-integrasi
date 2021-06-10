<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_rp8 extends CI_Controller
{

	/**
	 * Developer : Didin Tri Anggoro
	 * Github	 : https://github.com/didintri198
	 * Email	 : didintri198@gmail.com
	 * Create At : 04-04-2021
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('App');
	}

	public function index()
	{
		$view['_title'] = "Data RP8 &mdash; E-Register Kejari Kota Kediri";
		// $view['listdata'] = $this->App->get_all_orderby('jabatan', "id", "DESC");
		$this->template->display_theme('pages/V_rp8', $view);
	}
}
