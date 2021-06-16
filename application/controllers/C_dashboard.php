<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();

		//cek login
		if ($this->session->userdata('auth') == false) {
			redirect(base_url('auth/login'));
		}
	}
	public function index()
	{
		$view['_title'] = "Dashboard &mdash; E-izin Kejari Kota Kediri";
		$this->template->display_theme('pages/V_body', $view);
	}
	public function redirect()
	{
		redirect(base_url('admin/dashboard'));
	}
}
