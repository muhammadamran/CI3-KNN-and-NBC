<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errorpage extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //LOAD MODELS
    $this->load->model('M_errorpage');
  }

  public function error_404_custom()
  {
    if ($this->session->userdata('username') == NULL) {

      $this->session->set_flashdata('f_role', "Anda belum memulai <b>session</b>!, Silahkan mulai <b>session</b> anda!");
      redirect('login');
    } else if ($this->session->userdata('username') != NULL) {

      $value['PageTitle'] = 'Error 404 Page Not Found!';

      $this->load->view('errorpage', $value);
    }
  }
}
