<?php


  $view_of_bid_request = $this->input->post('view_of_bid_request');
  $accept_bids_username = $this->input->post('accept_bids_username');
  $accept_bids_role = $this->input->post('accept_bids_role');
  $accept_bids_userId = $this->input->post('accept_bids_userId');
  $accept_bids_email = $this->input->post('accept_bids_email');



  $this->auth->InsertDashboardViewOfBidRequest(
    $view_of_bid_request,$accept_bids_username,$accept_bids_role, $accept_bids_userId, $accept_bids_email
  );
  $this->session->set_flashdata( 'register_info', 'Bid Accepted Successfully' );
  //redirect( 'IdentifyingBuyerVehicle' );
  $this->load->model('email_model' );

//  $this->email_model->;


  $r = new Email_Model( '' );
  $r->send( $accept_bids_email, $view_of_bid_request, $accept_bids_username );


  redirect( 'dashboard/DashboardViewOfBidRequest/auction-'.$view_of_bid_request.'' );
  $this->session->set_flashdata( 'register_info', 'Email Sent' );



?>
