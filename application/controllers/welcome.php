<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
	public function header()
	{
		$this->load->view('header');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	
	public function slider()
	{
		$this->load->view('slider');
	}
	
	public function contact()
	{
		$this->load->view('contact');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */