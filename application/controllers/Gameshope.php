<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gameshope extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('gameshop_model');
    }
	public function index()
	{
		$data['shownews'] = $this->gameshop_model->shownews();
		$data['showgame'] = $this->gameshop_model->showdata();
		$data['showgroup'] = $this->gameshop_model->showgroup();
		$this->template->load('user/main_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
	}
	public function register()
	{
		$this->template->load('user/register_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order');
	}
	public function news()
	{
		$data['shownews'] = $this->gameshop_model->shownews();
		$this->template->load('user/news_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
	}
	public function news_viwe($id_news)
	{
		$data['news'] = $this->gameshop_model->readnews($id_news);
		$this->template->load('user/news_viwe_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
	}

	public function promotion()
	{
		$this->template->load('user/promotion_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order');
	}
	public function store()
	{

		$data['showgame'] = $this->gameshop_model->showdata();
		$data['showgroup'] = $this->gameshop_model->showgroup();
		$this->template->load('user/store_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
	}
	public function store_viwe($id_game)
	{
		$data['rsedit'] = $this->gameshop_model->read($id_game);

		$this->template->load('user/store_viwe_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
	}

	public function login()
	{
		$this->template->load('user/login_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order');
	}

	function auth()
	{
	$this->load->model('login_model');
    $iduser_user   = $this->input->post('iduser_user',TRUE);
	$pass_user = $this->input->post('pass_user',TRUE);
    $validate = $this->login_model->validate($iduser_user,$pass_user);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $iduser_user  = $data['iduser_user'];
		$pass_user = $data['pass_user'];
		$id_user = $data['id_user'];
        $sesdata = array(
			'id_user'  => $id_user,
            'iduser_user'  => $iduser_user,
			'pass_user'  => $pass_user,
			
        );
		$this->session->set_userdata($sesdata);
		// echo '<pre>'; print_r($this->session->userdata());exit;
            redirect('Gameshope/index');
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('Login1/index');
    }
  }
  
  function logout()
  {
    $this->session->sess_destroy();
    redirect('Gameshope/index');
  }

  public function adding()
	{
		$this->load->model('register_model');
		$this->register_model->addmember();
	}
}
