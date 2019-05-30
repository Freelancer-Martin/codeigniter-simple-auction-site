<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open_multipart('sellerbid', $attributes); ?>

    <div class="col-xs-12 col-sm-12 col-lg-12" >
      <div class="row" >
        <h2 class="form-signin-heading">Introductory text here: Please enter information about the part You would like to sell... </h2>
        <div class="col-xs-6 col-sm-6 col-lg-6" >
                <?php
                    echo $this->session->flashdata('register_info');
                    echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <?php
                      //=======================================
                      $data = array(
                          'name'          => 'seller_bid_free_text',
                          'id'            => 'seller_bid_free_text',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '100',
                          'style'         => 'width:75%',
                          'placeholder'   => 'Free Text',
                          'class'         => 'seller-bid-input'
                      );

                      echo form_textarea($data);
                      //=======================================
                      $data = array(
                            'name'          => 'seller_bid_condition_input',
                            'id'            => 'seller_bid_condition_input',
                            'value'         => '',
                            'maxlength'     => '100',
                            'size'          => '50',
                            'style'         => 'width:75%',
                            'placeholder'   => 'Insert Condition',
                            'class'         => 'seller-bid-input-first-col'
                      );
                      echo form_input($data);
                      //=======================================
                      $data_checkbox_excluded = array(
                              'name'          => 'seller_bid_condition_checkbox',
                              'id'            => 'seller_bid_condition_checkbox',
                              'value'         => 'excluded',
                              'checked'       => FALSE,
                              'style'         => 'margin:10px',
                              'class'         => 'seller-bid-checkbox-first-col'
                      );
                      echo form_checkbox( $data_checkbox_excluded );
                      //=======================================
                      $data = array(
                            'name'          => 'seller_bid_condition_input2',
                            'id'            => 'seller_bid_condition_input2',
                            'value'         => '',
                            'maxlength'     => '100',
                            'size'          => '50',
                            'style'         => 'width:75%',
                            'placeholder'   => 'Insert Condition',
                            'class'         => 'seller-bid-input-first-col'
                      );
                      echo form_input($data);
                      //=======================================
                      $data_checkbox_included = array(
                              'name'          => 'seller_bid_condition_checkbox2',
                              'id'            => 'seller_bid_condition_checkbox2',
                              'value'         => 'included',
                              'checked'       => FALSE,
                              'style'         => 'margin:10px',
                              'class'         => 'seller-bid-checkbox-first-col'
                      );

                      echo form_checkbox( $data_checkbox_included );
                      //=======================================
                      $data = array(
                          'name'          => 'seller_bid_img_upload',
                          'id'            => 'seller_bid_img_upload',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '150',
                          'style'         => 'width:75%',
                          'placeholder'   => 'Upload Images',
                          'class'         => 'seller-bid-input',
                          'type'          => 'file'
                      );

                      echo form_upload($data);

                     ?>

        </div>
        <div class="col-xs-3 col-sm-3 col-lg-3" >
              <?php
                //=======================================
                $data = array(
                    'name'          => 'seller_bid_location',
                    'id'            => 'seller_bid_location',
                    'value'         => '',
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Location',
                    'class'         => 'seller-bid-input'
                );

                echo form_textarea($data);
                //=======================================
               ?>
        </div>
        <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
          <?php
              $data = array(
                    'name'          => 'seller_bid_working_hours',
                    'id'            => 'seller_bid_working_hours',
                    'value'         => '',
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Work Hours',
                    'class'         => 'seller-bid-input'


              );

              echo form_input($data);
              //=======================================
              $data = array(
                    'name'          => 'seller_bid_manufacturing_year',
                    'id'            => 'seller_bid_manufacturing_year',
                    'value'         => '',
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Manufacturing Year',
                    'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_make',
                  'id'            => 'seller_bid_make',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'Make',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_model',
                  'id'            => 'seller_bid_model',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'Model',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_part_no',
                  'id'            => 'seller_bid_part_no',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'Part Nr',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_part',
                  'id'            => 'seller_bid_part',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'Part',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'working_hours',
                  'id'            => 'working_hours',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'Not needed',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data_checkbox_included = array(
                      'name'          => 'included',
                      'id'            => 'included',
                      'value'         => 'included',
                      'checked'       => FALSE,
                      'style'         => 'margin:10px',
                      'class'         => 'seller-bid-checkbox'
              );
              $label_attributes = array(
                      'class' => '',
                      'style' => 'width:25%;'
              );
              echo form_label( 'Included', 'seller-bid-checkbox', $label_attributes );
              echo form_checkbox( $data_checkbox_included );

              //=======================================
              $data_checkbox_excluded = array(
                      'name'          => 'excluded',
                      'id'            => 'excluded',
                      'value'         => 'excluded',
                      'checked'       => FALSE,
                      'style'         => 'margin:10px',
                      'class'         => 'seller-bid-checkbox'
              );
              $label_attributes = array(
                      'class' => '',
                      'style' => 'width:25%;'
              );
              echo form_label( 'Excluded', 'seller-bid-checkbox', $label_attributes );
              echo form_checkbox( $data_checkbox_excluded );
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_my_offer',
                  'id'            => 'seller_bid_my_offer',
                  'value'         => '',
                  'maxlength'     => '100',
                  'size'          => '50',
                  'style'         => 'width:75%',
                  'placeholder'   => 'My Offer $',
                  'class'         => 'seller-bid-input'
              );

              echo form_input($data);
              //=======================================
              $data = array(
                  'name'          => 'seller_bid_accept_terms',
                  'id'            => 'seller_bid_accept_terms',
                  'value'         => 'accept',
                  'checked'       => TRUE,
                  'style'         => 'margin:10px',
                  'placeholder'   => 'Accepting terms and conditions',
                  'class'         => 'seller-bid-checkbox'
              );
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
              echo form_input( $data );
              $data = array(
                      'class'      => 'btn btn-lg btn-primary btn-block',
                      'value'      => 'Confirm Bid'
                  );
              echo form_submit($data);

           ?>


        </div>
      </div>
    </div>
  <?php echo form_close(); ?>
