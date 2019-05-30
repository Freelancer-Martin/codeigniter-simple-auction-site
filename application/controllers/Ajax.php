<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

// Show view Page
public function index(){
  $this->load->view("ajax_post_view");
  $this->load->model('ajax_model', 'auth');
  //$this->load->view('ajax_post_view');
}

// This function call from AJAX
public function mark_data_submit()
{
/*
  if( $this->session->login == 'true' )
  {
    redirect('/');
  }
*/

  $this->load->model('ajax_model', 'auth');
  $this->load->library('form_validation');
  $this->load->view('templates/header');


  //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');



  $mark = $this->input->post( 'mark' );
  $models = $this->input->post( 'models' );


  $this->auth->InsertAjaxMark( $mark );
  $this->auth->InsertAjaxModel( $models  );

  //print_r( $models );
  $this->load->view('templates/footer');
  //redirect( 'IdentifyingBuyerVehicle' );

  }
}
