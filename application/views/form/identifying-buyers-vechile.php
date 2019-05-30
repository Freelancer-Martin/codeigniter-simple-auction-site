<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open('IdentifyingBuyerVehicle', $attributes); ?>

    <div class="col-xs-12 col-sm-12 col-lg-12" >
      <h4 class="buyer-vechile-title form-signin-heading text-center">Introductory text here: Please enter information about the machine you would like to purchase.
        RPA24 will start gathering best offers for you at once... </h4>
      <h2 class="buyer-vechile-title form-signin-heading text-center">Please identify machine you are looking use dropdown menu or type</h2>
       <div class="row"  >
       <div class="col-xs-8 col-sm-8 col-lg-8 buyer-vehicle-form" >
              <?php
                  echo $this->session->flashdata('register_info');
                  echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                  <?php
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
                    echo form_label('Mark', 'ind_buy_vec_year_to', $label_attributes);
                    echo form_dropdown('ind_buy_vec_mark', $mark_array, 'mark1', $attributes );

                    //=======================================
                    $query = $this->db->query("SELECT models   FROM tbl_models");

                    if ( empty( $row->models ) ) 
                      { 
                        $models_array[] = ''; 
                      }
                    foreach ($query->result() as $key => $row)
                    {
                      
                      if ( ! empty( $row->models ) )
                      {
                        $models_array[] = $row->models;
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
                    echo form_label('Model', 'ind_buy_vec_year_to', $label_attributes);
                    echo form_dropdown('ind_buy_vec_model', $models_array, 'model1', $attributes );
                    //=======================================
                    $options = array(
                            'construction_equipment'         => 'Construction equipment',
                            'trucks_trailers'           => 'Trucks trailers',
                            'agriculture'         => 'Agriculture',
                            'ground_care'       => 'Ground care',
                            'material_handling' => 'Material handling',
                            'transport'         => 'Transport',
                            'inspection'        => 'Inspection',
                    );
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-input',
                            'style' => 'width:25%;'
                    );
                    $label_attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            'style' => 'width:25%;'
                    );

                    $shirts_on_sale = array('small', 'large');
                    echo form_label('Category', 'ind_buy_vec_year_to', $label_attributes);
                    echo form_dropdown( 'ind_buy_vec_cat', $options, 'Construction_equipment', $attributes );
                    //=======================================
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            //'style' => 'width:25%;'
                    );

                    echo form_label('Year of Manufacture', 'ind_buy_vec_year_from', $attributes);
                    $data = array(
                          'name'          => 'ind_buy_vec_year_from',
                          'id'            => 'ind_buy_vec_year_from',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:25%',
                          'placeholder'   => 'From: e.g 2015',
                          'class'         => 'buyer-vehicle-form-input from-to'
                    );

                    echo form_input($data);
                    //=======================================
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            'style' => 'color: #000;'
                    );

                    echo form_label('', 'ind_buy_vec_year_to', $attributes);
                    $data = array(
                          'name'          => 'ind_buy_vec_year_to',
                          'id'            => 'ind_buy_vec_year_to',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:25%',
                          'placeholder'   => 'To: e.g 2019',
                          'class'         => 'buyer-vehicle-form-input from-to'
                    );
                    echo form_input($data);
                    //=======================================
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            'style' => 'color: #000;'
                    );

                    echo form_label('Working hours', 'ind_buy_vec_hour_min', $attributes);
                    $data = array(
                          'name'          => 'ind_buy_vec_hour_min',
                          'id'            => 'ind_buy_vec_hour_min',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:25%',
                          'placeholder'   => 'Min',
                          'class'         => 'buyer-vehicle-form-input from-to'
                    );
                    echo form_input($data);
                    //=======================================
                    $attributes = array(
                            'class' => 'buyer-vehicle-form-label',
                            'style' => 'color: #000;'
                    );

                    echo form_label('', 'ind_buy_vec_hour_max', $attributes);
                    $data = array(
                          'name'          => 'ind_buy_vec_hour_max',
                          'id'            => 'ind_buy_vec_hour_max',
                          'value'         => '',
                          'maxlength'     => '100',
                          'size'          => '50',
                          'style'         => 'width:25%',
                          'placeholder'   => 'Max',
                          'class'         => 'buyer-vehicle-form-input from-to'
                    );
                    echo form_input($data);
                    $data = array(
                            'class'      => 'btn btn-lg btn-primary btn-block next-buyer-vehicle',
                            //'href'       => base_url() . 'index.php/BuyerRequestForBids',
                            'value'      => 'Next'
                        );
                    echo form_submit($data);



                   ?>

      </div>
      <div class="col-xs-4 col-sm-4 col-lg-4" >

          <?php  $this->load->view('ajax_post_view');   ?>

      </div>
      </div>
    </div>


  <?php
    echo form_close();

  ?>
