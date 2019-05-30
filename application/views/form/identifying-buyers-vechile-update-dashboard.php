<?php

  $ind_buy_vec_mark = $this->input->post('ind_buy_vec_mark');
  $ind_buy_vec_model =  $this->input->post('ind_buy_vec_model');
  $ind_buy_vec_cat = $this->input->post('ind_buy_vec_cat');
  $ind_buy_vec_year_from = $this->input->post('ind_buy_vec_year_from');
  $ind_buy_vec_year_to =  $this->input->post('ind_buy_vec_year_to');
  $ind_buy_vec_hour_min = $this->input->post('ind_buy_vec_hour_min');
  $ind_buy_vec_hour_max = $this->input->post('ind_buy_vec_hour_max');



  $this->auth->InsertIdentifyingBuyerVehicle(
    $ind_buy_vec_mark, $ind_buy_vec_model, $ind_buy_vec_cat,
    $ind_buy_vec_year_from, $ind_buy_vec_year_to, $ind_buy_vec_hour_min,$ind_buy_vec_hour_max
  );
  $this->session->set_flashdata( 'register_info', 'Vehicle Inserted Successfully' );
  //redirect( 'IdentifyingBuyerVehicle' );
  redirect( 'dashboard/DashboardBuyerRequestForBids' );
?>
