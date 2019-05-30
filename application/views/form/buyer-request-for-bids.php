<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open_multipart('BuyerRequestForBids', $attributes); ?>
    <div class="col-xs-12 col-sm-12 col-lg-12" >
      <h2 class="form-signin-heading text-center">Buyer’s Request For Bids </h2>
      <div class="row" >

      <div class="col-xs-9 col-sm-9 col-lg-9" >
              <?php
                  echo $this->session->flashdata('register_info');
                  echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                  <?php
                    //=======================================
                    $data = array(
                        'name'          => 'buy_req_textarea',
                        'id'            => 'buy_req_textarea',
                        'value'         => '',
                        'maxlength'     => '100',
                        'size'          => '150',
                        'style'         => 'width:75%',
                        'placeholder'   => 'Free Text',
                        'class'         => 'seller-bid-input'
                    );

                    echo form_textarea($data);
                    //=======================================
                    $data = array(
                          'name'          => 'buy_req_keyword_1',
                          'id'            => 'buy_req_keyword_1',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:75%',
                          'placeholder'   => 'Insert Condition',
                          'class'         => 'seller-bid-input-first-col'
                    );
                    echo form_input($data);
                    //=======================================
                    $data = array(
                          'name'          => 'buy_req_keyword_2',
                          'id'            => 'buy_req_keyword_2',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:75%',
                          'placeholder'   => 'Insert Condition',
                          'class'         => 'seller-bid-input-first-col'
                    );
                    echo form_input($data);
                    //=======================================
                    $data = array(
                          'name'          => 'buy_req_keyword_3',
                          'id'            => 'buy_req_keyword_3',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:75%',
                          'placeholder'   => 'Insert Condition',
                          'class'         => 'seller-bid-input-first-col'
                    );
                    echo form_input($data);
                    //=======================================
                    $data = array(
                        'name'          => 'buy_req_upload',
                        'id'            => 'buy_req_upload',
                        'value'         => '',
                        'maxlength'     => '100',
                        'size'          => '150',
                        'style'         => 'width:75%',
                        'placeholder'   => 'Upload Images',
                        'class'         => 'seller-bid-input'
                    );

                    echo form_upload($data);
                    //=======================================
                    $data_checkbox_excluded = array(
                            'name'          => 'buy_req_condition_1',
                            'id'            => 'buy_req_condition_1',
                            'value'         => 'checked',
                            'checked'       => FALSE,
                            'style'         => 'width:25%',
                            'class'         => 'buyers-request-checkbox-input'
                    );
                    $label_attributes = array(
                            'class' => 'buyers-request-checkbox-label',
                            'style' => ''
                    );


                    echo form_checkbox( $data_checkbox_excluded );
                    echo form_label('Important must be contition. free text inserted by buyer', 'buy_req_condition_1', $label_attributes);
                    //=======================================
                    $data_checkbox_excluded = array(
                            'name'          => 'buy_req_condition_2',
                            'id'            => 'buy_req_condition_2',
                            'value'         => 'checked',
                            'checked'       => FALSE,
                            'style'         => 'width:25%',
                            'class'         => 'buyers-request-checkbox-input'
                    );
                    $label_attributes = array(
                            'class' => 'buyers-request-checkbox-label',
                            'style' => ''
                    );


                    echo form_checkbox( $data_checkbox_excluded );
                    echo form_label('Important must be contition. free text inserted by buyer', 'buy_req_condition_2', $label_attributes);

                   ?>

      </div>
      <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
        <?php

            //=======================================
            $data_checkbox = array(
                    'name'          => 'buy_req_compulsory_photos',
                    'id'            => 'buy_req_compulsory_photos',
                    'value'         => 'checked',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-field'
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Compulsory photos if submit bid', 'buy_req_compulsory_photos', $label_attributes);
            //=======================================
            $data_checkbox = array(
                    'name'          => 'buy_req_shipping',
                    'id'            => 'buy_req_shipping',
                    'value'         => 'checked',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-field'
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Shipping included in bid', 'buy_req_shipping', $label_attributes);

            //=======================================
            $data_checkbox = array(
                    'name'          => 'buy_req_address',
                    'id'            => 'buy_req_address',
                    'value'         => 'checked',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-field'
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Insert address if different location from registration', 'buy_req_address', $label_attributes);

            //=======================================
            $data_checkbox_included = array(
                    'name'          => 'buy_req_postcode',
                    'id'            => 'buy_req_postcode',
                    'value'         => 'checked',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-field'
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Enter passcode for max distance', 'buy_req_postcode', $label_attributes);
            //=======================================
            $data = array(
                'name'          => 'buy_req_km',
                'id'            => 'buy_req_km',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => 'width:10%; width: 10%;',
                'placeholder'   => 'KM/M',
                'class'         => ''
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_input($data);
            echo form_label('', 'buy_req_km', $label_attributes);
            //=======================================
            $data_checkbox = array(
                    'name'          => 'buy_req_working_hours',
                    'id'            => 'buy_req_working_hours',
                    'value'         => 'checked',
                    'checked'       => FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-input'
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Requesting working hours in bid', 'buy_req_working_hours', $label_attributes);

            //=======================================
            $data_checkbox = array(
                    'name'          => 'buy_req_fast',
                    'id'            => 'buy_req_fast',
                    'value'         => 'checked',
                    'checked'       =>  FALSE,
                    'style'         => 'margin:10px',
                    'class'         => 'buyers-request-checkbox-input'
            );

            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data_checkbox );
            echo form_label('Need it fast', 'buy_req_fast', $label_attributes);

            //=======================================
            $data = array(
                'name'          => 'buy_req_fast_days',
                'id'            => 'buy_req_fast_days',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => 'width:10%; width: 10%;',
                'placeholder'   => 'days...',
                'class'         => ''
            );
            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_input($data);
            echo form_label('', 'buy_req_fast_days', $label_attributes);

            //=======================================
            $data = array(
                'name'          => 'buy_req_inspection',
                'id'            => 'buy_req_inspection',
                'value'         => 'checked',
                'checked'       => FALSE,
                'style'         => 'margin:10px',
                'placeholder'   => 'Accepting terms and conditions',
                'class'         => 'buyers-request-checkbox-input'
            );

            $label_attributes = array(
                    'class' => 'buyers-request-checkbox-label',
                    'style' => ''
            );

            echo form_checkbox( $data );
            echo form_label('Require inspection auction for won item', 'buy_req_inspection', $label_attributes);
            //=======================================
            $data = array(
                'name'          => 'upload_image_metadata',
                'id'            => 'upload_image_metadata',
                'value'         => 'accept',
                'checked'       => TRUE,
                'style'         => 'margin:10px',
                'placeholder'   => 'Accepting terms and conditions',
                'class'         => 'seller-bid-checkbox',
                'type'          => 'hidden'
            );

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
