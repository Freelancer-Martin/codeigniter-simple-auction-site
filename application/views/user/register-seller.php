<!DOCTYPE html>
<html>
<style>
  .page-description,
  .page-title
  {
    color: white;
  }

  .page-box
  {
    margin-left: 5%;
    height: 125vh;
  }
</style>

  <div class="page-box col-xs-8 col-sm-8 col-lg-8" >
    <h1 class="page-title" >Contacts</h1>
    <h3 class="page-description" ></h3>
    <div class="row" >
      <?php
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->library('session');
      $attributes = array('class' => 'form-signin');
      echo form_open_multipart('register-seller', $attributes); ?>
          <div style="color: white;" class="dashboard-form-container col-xs-12 col-sm-12 col-lg-12" >
            <h2 class="form-signin-heading text-center">Buyer’s Request For Bids </h2>
            <div class="row" style="color: black;">

            <div class="seller-bid-third-col col-xs-6 col-sm-6 col-lg-6" >
              <?php

                  //=======================================
                  //======================================================================
                  $data = array(
                          'name'          => 'upload_info',
                          'id'            => 'upload_info',
                          'class'         => 'register-form-input form-control',
                          'placeholder'   => 'Company',
                          'type'          => 'hidden',
                          'style'         => 'width:100%;'
                  );
                  echo form_input($data );


                  $label_attributes = array(
                          'class' => 'buyers-request-checkbox-label',
                          'style' => 'text-align: center;'
                  );
                  echo form_label('Are the seller details same as previously inserted ?', 'buy_req_condition_1', $label_attributes);
                  $data_checkbox = array(
                          'name'          => 'seller_yes',
                          'id'            => 'seller_yes',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );

                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 25%;'
                  );
                  echo form_label('YES', 'buy_req_condition_1', $label_attributes);



                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'seller_no',
                          'id'            => 'seller_no',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );

                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 25%'
                  );
                  echo form_label('NO', 'buy_req_condition_1', $label_attributes);





                  //echo form_checkbox( $data_checkbox );

                  $label_attributes = array(
                          'class' => 'buyers-request-checkbox-label',
                          'style' => 'background: grey; text-align: center; margin: 15px; padding: 20px; font-size: 21px;'
                  );
                  echo form_label('Please check most relevant for you', 'buy_req_condition_1', $label_attributes);

                  $label_attributes = array(
                          'class' => 'buyers-request-checkbox-label',
                          'style' => 'text-align: center; width: 100%;'
                  );
                  echo form_label(' Are you offering ', 'buy_req_condition_1', $label_attributes);



                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 5%'
                  );
                  echo form_label('Machines', 'buy_req_condition_1', $label_attributes);
                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'machines',
                          'id'            => 'machines',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );



                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 5%'
                  );
                  echo form_label('Parts', 'buy_req_condition_1', $label_attributes);

                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'parts',
                          'id'            => 'parts',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );


                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 5%'
                  );
                  echo form_label('Inspection', 'buy_req_condition_1', $label_attributes);

                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'inspection',
                          'id'            => 'inspection',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );


                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 5%'
                  );
                  echo form_label('Equipment', 'buy_req_condition_1', $label_attributes);

                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'equipment',
                          'id'            => 'equipment',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );


                  $label_attributes = array(
                          'class' => '',
                          'style' => 'margin-left: 5%'
                  );
                  echo form_label('Transport', 'buy_req_condition_1', $label_attributes);

                  echo form_checkbox( $data_checkbox );
                  $data_checkbox = array(
                          'name'          => 'transport',
                          'id'            => 'transport',
                          'value'         => 'checked',
                          'checked'       => FALSE,
                          'style'         => 'margin:10px',
                          'class'         => 'buyers-request-checkbox-field'
                  );




//==================================================================================================================

                $label_attributes = array(
                        'class' => 'buyers-request-checkbox-label',
                        'style' => 'text-align: center; width: 100%;'
                );
                echo form_label('Please Select', 'buy_req_condition_1', $label_attributes);



                $label_attributes = array(
                        'class' => '',
                        'style' => 'margin-left: 0%'
                );
                echo form_label('Construction Equipment', 'buy_req_condition_1', $label_attributes);
                echo form_checkbox( $data_checkbox );
                $data_checkbox = array(
                        'name'          => 'construction_equipment',
                        'id'            => 'construction_equipment',
                        'value'         => 'checked',
                        'checked'       => FALSE,
                        'style'         => 'margin:10px',
                        'class'         => 'buyers-request-checkbox-field'
                );



                $label_attributes = array(
                        'class' => '',
                        'style' => 'margin-left: 0%'
                );
                echo form_label('Truck Trailers', 'buy_req_condition_1', $label_attributes);

                echo form_checkbox( $data_checkbox );
                $data_checkbox = array(
                        'name'          => 'truck_trailers',
                        'id'            => 'truck_trailers',
                        'value'         => 'checked',
                        'checked'       => FALSE,
                        'style'         => 'margin:10px',
                        'class'         => 'buyers-request-checkbox-field'
                );


                $label_attributes = array(
                        'class' => '',
                        'style' => 'margin-left: 0%'
                );
                echo form_label('Agriculture', 'buy_req_condition_1', $label_attributes);

                echo form_checkbox( $data_checkbox );
                $data_checkbox = array(
                        'name'          => 'agriculture',
                        'id'            => 'agriculture',
                        'value'         => 'checked',
                        'checked'       => FALSE,
                        'style'         => 'margin:10px',
                        'class'         => 'buyers-request-checkbox-field'
                );


                $label_attributes = array(
                        'class' => '',
                        'style' => 'margin-left: 0%'
                );
                echo form_label('Ground Care', 'buy_req_condition_1', $label_attributes);

                echo form_checkbox( $data_checkbox );
                $data_checkbox = array(
                        'name'          => 'ground_care',
                        'id'            => 'ground_care',
                        'value'         => 'checked',
                        'checked'       => FALSE,
                        'style'         => 'margin:10px',
                        'class'         => 'buyers-request-checkbox-field'
                );


                $label_attributes = array(
                        'class' => '',
                        'style' => 'margin-left: 0%'
                );
                echo form_label('Material Handling', 'buy_req_condition_1', $label_attributes);

                echo form_checkbox( $data_checkbox );
                $data_checkbox = array(
                        'name'          => 'material_handling',
                        'id'            => 'material_handling',
                        'value'         => 'checked',
                        'checked'       => FALSE,
                        'style'         => 'margin:10px',
                        'class'         => 'buyers-request-checkbox-field'
                );




//========================================================================================================

                $label_attributes = array(
                        'class' => 'buyers-request-checkbox-label',
                        'style' => 'text-align: center; width: 100%;'
                );
                echo form_label( 'Please insert certificates you have', 'buy_req_condition_1', $label_attributes);

                //=======================================
                $data = array(
                    'name'          => 'certif_upload',
                    'id'            => 'certif_upload',
                    'value'         => '',
                    'maxlength'     => '100',
                    'size'          => '150',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Upload Images',
                    'class'         => 'seller-bid-input'
                );

                echo form_upload($data);


                  $data = array(
                          'class'      => 'btn btn-lg btn-primary btn-block',
                          'value'      => 'Apply'
                      );
                  echo form_submit($data);

               ?>


            </div>
            <div class="col-xs-6 col-sm-6 col-lg-6" >
                    <?php
                        $label_attributes = array(
                                'class' => 'buyers-request-checkbox-label',
                                'style' => 'text-align: center; width: 80%;'
                        );
                        echo form_label( 'Please select Makes you deal with', 'buy_req_condition_1', $label_attributes);

                        //=======================================
                        $query = $this->db->query("SELECT mark   FROM tbl_mark");

                        if ( empty( $row->mark ) )
                          {
                            $mark_array[] = '';
                          }
                        foreach ($query->result() as $key => $row)
                        {
                          if ( ! empty( $row->mark ) )
                          {
                            $mark_array[] = $row->mark;
                          }
                        }

                        $query->free_result();

                        $attributes = array(
                                'class' => 'buyer-vehicle-form-input',
                                'style' => 'width:25%;'
                        );
                        $label_attributes = array(
                                'class' => 'buyer-vehicle-form-label',
                                'style' => 'width:25%;'
                        );

                        $shirts_on_sale = array('mark1', 'mark2');
                        echo form_label('Make', 'ind_buy_vec_year_to', $label_attributes);
                        //$this->load->view('ajax_post_view');
                        echo form_dropdown( 'make', $mark_array, 'mark1', $attributes );
//=====================================================================================================================

                        $label_attributes = array(
                                'class' => 'buyers-request-checkbox-label',
                                'style' => 'text-align: center; width: 80%;'
                        );
                        echo form_label('If you sell parts or equipment please select  ', 'buy_req_condition_1', $label_attributes);



                        $label_attributes = array(
                                'class' => '',
                                'style' => 'margin-left: 10%'
                        );
                        echo form_label('Mainly Used', 'buy_req_condition_1', $label_attributes);
                        echo form_checkbox( $data_checkbox );
                        $data_checkbox = array(
                                'name'          => 'mainly_used',
                                'id'            => 'mainly_used',
                                'value'         => 'checked',
                                'checked'       => FALSE,
                                'style'         => 'margin:10px',
                                'class'         => 'buyers-request-checkbox-field'
                        );



                        $label_attributes = array(
                                'class' => '',
                                'style' => 'margin-left: 10%'
                        );
                        echo form_label('New', 'buy_req_condition_1', $label_attributes);

                        echo form_checkbox( $data_checkbox );
                        $data_checkbox = array(
                                'name'          => 'new',
                                'id'            => 'new',
                                'value'         => 'checked',
                                'checked'       => FALSE,
                                'style'         => 'margin:10px',
                                'class'         => 'buyers-request-checkbox-field'
                        );


                        $label_attributes = array(
                                'class' => '',
                                'style' => 'margin-left: 10%'
                        );
                        echo form_label('Refrubished', 'buy_req_condition_1', $label_attributes);

                        echo form_checkbox( $data_checkbox );
                        $data_checkbox = array(
                                'name'          => 'refrubished',
                                'id'            => 'refrubished',
                                'value'         => 'checked',
                                'checked'       => FALSE,
                                'style'         => 'margin:10px',
                                'class'         => 'buyers-request-checkbox-field'
                        );



//==================================================================================================================================

                        echo $this->session->flashdata('register_info');
                        echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <?php
                          //=======================================
                          $data = array(
                              'name'          => 'business_des',
                              'id'            => 'business_des',
                              'value'         => '',
                              'maxlength'     => '100',
                              'size'          => '150',
                              'style'         => 'width:75%',
                              'placeholder'   => 'Shortly describe your business.(we are  dismantling company. Our main revenue stream is from selling used parts for excavators and earth moving machinery)',
                              'class'         => 'seller-bid-input'
                          );

                          echo form_textarea($data);



                          //=======================================
                          $data_checkbox_excluded = array(
                                  'name'          => 'terms',
                                  'id'            => 'terms',
                                  'value'         => 'checked',
                                  'checked'       => FALSE,
                                  'style'         => 'width:50%',
                                  'class'         => ''
                          );
                          $label_attributes = array(
                                  'class' => '',
                                  'style' => 'width:50%'
                          );


                          echo form_checkbox( $data_checkbox_excluded );
                          echo form_label('Terms and conditions', 'buy_req_condition_1', $label_attributes);


                         ?>

            </div>
          </div>
        </div>
        <?php echo form_close(); ?>

              </div>
          <!-- Section: Contact v.1 -->
            </div>
