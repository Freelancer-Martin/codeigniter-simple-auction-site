<?php

  $seller_yes = $this->input->post('seller_yes');
  $seller_no =  $this->input->post('seller_no');
  $machines = $this->input->post('machines');
  $parts = $this->input->post('parts');
  $inspection = $this->input->post('inspection');
  $equipment = $this->input->post('equipment');
  $transport =  $this->input->post('transport');
  $construction_equipment = $this->input->post('construction_equipment');
  $truck_trailers = $this->input->post('truck_trailers');
  $agriculture =  $this->input->post('agriculture');
  $ground_care = $this->input->post('ground_care');
  $material_handling = $this->input->post('material_handling');
  $certif_upload =  $this->input->post('certif_upload');
  $make = $this->input->post('make');
  $mainly_used =  $this->input->post('mainly_used');
  $new = $this->input->post('new');
  $refrubished = $this->input->post('refrubished');
  $business_des =  $this->input->post('business_des');
  $terms = $this->input->post('terms');
  $upload_info =  $this->input->post('upload_info');


  $stringdatetime = new DateTime;
  $valuedatetime = $stringdatetime->format( 'Y-m-d' );

  $this->auth->register_seller_insert(
    $seller_yes,
    $seller_no,
    $machines,
    $parts,
    $inspection,
    $equipment,
    $transport,
    $construction_equipment,
    $truck_trailers,
    $agriculture,
    $ground_care,
    $material_handling,
    //$material_handling,
    $certif_upload,
    $make,
    $mainly_used,
    $new,
    $refrubished,
    $business_des,
    $terms,
    $upload_info

  );
  $this->session->set_flashdata('register_info', 'User Registered Successfully');
  redirect( 'register' );
?>
