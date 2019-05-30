<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open_multipart('dashboard/transport', $attributes); ?>
    <div style="color: white;" class="dashboard-form-container col-xs-12 col-sm-12 col-lg-12" >
      <h2 class="form-signin-heading text-center">Buyer’s Request For Bids </h2>
      <div class="row" style="color: black;">

      <div class="col-xs-6 col-sm-6 col-lg-6" >
              <?php
                    echo $this->session->flashdata('register_info');
                    echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <?php
                    //=======================================
                    $options = array(
                            'Part'         => 'part',
                            'machine'      => 'machine',
                            'equipment'    => 'equipment',

                    );
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-input',
                            'style' => 'width:25%;'
                    );
                    $label_attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            'style' => 'width:100%;'
                    );

                    $shirts_on_sale = array('small', 'large');
                    echo form_label('Type Of shipment', 'ind_buy_vec_year_to', $label_attributes);
                    echo form_dropdown( 'shipment_type', $options, 'Construction_equipment', $attributes );



                   ?>
                   <div class="col-xs-3 col-sm-3 col-lg-3" >
                           <?php
                                 echo $this->session->flashdata('register_info');
                                 echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                             <?php

                                 //=======================================
                                 $data = array(
                                     'name'          => 'make',
                                     'id'            => 'make',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'If machine then Make',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);


                                 //=======================================
                                 $data = array(
                                     'name'          => 'model',
                                     'id'            => 'model',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Model',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);


                                 //=======================================
                                 $data = array(
                                     'name'          => 'froms',
                                     'id'            => 'froms',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'from',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);


                                 //=======================================
                                 $data = array(
                                     'name'          => 'tos',
                                     'id'            => 'tos',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'to',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);

                                ?>

                   </div>
                   <div class="col-xs-3 col-sm-3 col-lg-3" >
                           <?php
                                 echo $this->session->flashdata('register_info');
                                 echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                             <?php

                                 //=======================================
                                 $data = array(
                                     'name'          => 'weight',
                                     'id'            => 'weight',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Weight',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);

                                 //=======================================
                                 $data = array(
                                     'name'          => 'quantity',
                                     'id'            => 'quantity',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Quantity',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);


                                 //=======================================
                                 $data = array(
                                     'name'          => 'total_weight',
                                     'id'            => 'total_weight',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Total weight',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);


                                 //=======================================
                                 $data = array(
                                     'name'          => 'collection_date',
                                     'id'            => 'collection_date',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Available for collection date',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);

                                 //=======================================
                                 $data = array(
                                     'name'          => 'delivery_time',
                                     'id'            => 'delivery_time',
                                     'value'         => '',
                                     'maxlength'     => '100',
                                     'size'          => '50',
                                     'style'         => 'width:100%;',
                                     'placeholder'   => 'Delivery time ',
                                     'class'         => ''
                                 );
                                 $label_attributes = array(
                                         'class' => 'buyers-request-checkbox-label',
                                         'style' => ''
                                 );

                                 echo form_input($data);
                                 echo form_label('', 'buy_req_km', $label_attributes);



                                ?>

                   </div>
                  </div>

                  <div class="seller-bid-third-col col-xs-6 col-sm-6 col-lg-6" >
                    <?php

                        $data = array(
                            'name'          => 'transport_des',
                            'id'            => 'transport_des',
                            'value'         => '',
                            'maxlength'     => '100',
                            'size'          => '150',
                            'style'         => 'width:75%',
                            'placeholder'   => 'Free Text',
                            'class'         => 'seller-bid-input'
                        );

                        echo form_textarea($data);

                        $data = array(
                                'class'      => 'btn btn-lg btn-primary btn-block',
                                'value'      => 'Submit'
                            );
                        echo form_submit($data);

                  ?>


      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
