<?php
$img_array =
 array(
    'file_name' => $this->upload->data( 'file_name' ),
    'file_type' => $this->upload->data( 'file_type' ),
    'file_path' => $this->upload->data( 'file_path' ),
    'full_path' => $this->upload->data( 'full_path' ),
    'raw_name' => $this->upload->data( 'raw_name' ),
    'orig_name' => $this->upload->data( 'orig_name' ),
    'client_name' => $this->upload->data( 'client_name' ),
    'file_ext' => $this->upload->data( 'file_ext' ),
    'file_size' => $this->upload->data( 'file_size' ),
    'is_image' => $this->upload->data( 'is_image' ),
    'image_width' => $this->upload->data( 'image_width' ),
    'image_height' => $this->upload->data( 'image_height' ),
    'image_type' => $this->upload->data( 'image_type' )

  );

  $buy_req_textarea = $this->input->post('buy_req_textarea');
  $buy_req_keyword_1 =  $this->input->post('buy_req_keyword_1');
  $buy_req_keyword_2 = $this->input->post('buy_req_keyword_2');
  $buy_req_keyword_3 = $this->input->post('buy_req_keyword_3');
  $buy_req_upload =  $this->input->post('buy_req_upload');
  $buy_req_condition_1 = $this->input->post('buy_req_condition_1');
  $buy_req_condition_2 = $this->input->post('buy_req_condition_2');
  $buy_req_compulsory_photos = $this->input->post('buy_req_compulsory_photos');
  $buy_req_shipping = $this->input->post('buy_req_shipping');
  $buy_req_address =  $this->input->post('buy_req_address');
  $buy_req_km = $this->input->post('buy_req_km');
  $buy_req_postcode = $this->input->post('buy_req_postcode');
  $buy_req_working_hours =  $this->input->post('buy_req_working_hours');
  $buy_req_fast_days = $this->input->post('buy_req_fast_days');
  $buy_req_fast = $this->input->post('buy_req_fast');
  $buy_req_inspection = $this->input->post('buy_req_inspection');
  $upload_image_metadata = json_encode( $img_array );


  $this->auth->InsertBuyerRequestForBids(
    $buy_req_textarea, $buy_req_keyword_1, $buy_req_keyword_2,$buy_req_keyword_3,
    $buy_req_upload, $buy_req_condition_1, $buy_req_condition_2,$buy_req_compulsory_photos,$buy_req_shipping,
    $buy_req_address, $buy_req_km, $buy_req_postcode,$buy_req_working_hours,
    $buy_req_fast_days, $buy_req_fast, $buy_req_inspection, $upload_image_metadata
   );

  $this->session->set_flashdata( 'register_info', 'Request For Bids Inserted' );
  redirect( 'dashboard/DashboardBuyerRequestForBids' );
?>
