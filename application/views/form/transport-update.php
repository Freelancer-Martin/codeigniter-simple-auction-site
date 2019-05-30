<?php

  $shipment_type = $this->input->post('shipment_type');
  $make = $this->input->post('make');
  $model =  $this->input->post('model');
  $froms = $this->input->post('froms');
  $tos = $this->input->post('tos');
  $weight =  $this->input->post('weight');
  $quantity = $this->input->post('quantity');
  $total_weight = $this->input->post('total_weight');
  $collection_date = $this->input->post('collection_date');
  $delivery_time = $this->input->post('delivery_time');
  $transport_des =  $this->input->post('transport_des');




  $this->auth->InsertTransportRequestForBids(
    $shipment_type, $make, $model, $froms,$tos,
    $weight, $quantity, $total_weight , $collection_date , $delivery_time,
    $transport_des
   );

  $this->session->set_flashdata( 'register_info', 'Request For Transport Inserted' );
  redirect( 'dashboard/transport' );
?>
