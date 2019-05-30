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
    margin-left: 15%;
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
              $attributes = array('class' => 'form-signin');  ?>



                    <?php   echo form_open('register', $attributes); ?>

                        <h2 style="padding-left: 25px; padding-left: 25px;"  class="form-signin-heading col-lg-offset-5">Please Register</h2>
                        <?php
                            echo $this->session->flashdata('register_info');
                            echo validation_errors('<div class="alert alert-danger">', '</div>');
                            //======================================================================
                            $data = array(
                                    'name'          => 'register_first_name',
                                    'id'            => 'register_first_name',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'First Name',
                                    //'required'      => 'required'
                                    'style' => 'width:41%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:25%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:45%;'
                            );


                            echo form_label('First Name', 'register_first_name', $label_attributes);
                            echo form_input($data );


                            //======================================================================
                            $data = array(
                                    'name'          => 'register_last_name',
                                    'id'            => 'register_last_name',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Last Name',
                                    //'required'      => 'required'
                                    'style' => 'width:41%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:25%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label('Last Name', 'register_last_name', $label_attributes);
                            echo form_input($data );


                            //======================================================================
                            $data = array(
                                    'name'          => 'register_company',
                                    'id'            => 'register_company',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Company',
                                    //'required'      => 'required'
                                    'style' => 'width:100%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label('Company', 'register_company', $label_attributes);
                            echo form_input($data );



                            //======================================================================
                            $data = array(
                                    'name'          => 'register_reg_nr',
                                    'id'            => 'register_reg_nr',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Reg No',
                                    //'required'      => 'required'
                                    'style' => 'width:100%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label('Reg Nr', 'register_reg_nr', $label_attributes);
                            echo form_input($data );



                            //================================================================
                            $data_checkbox_excluded = array(
                                    'name'          => 'register_yes',
                                    'id'            => 'register_yes',
                                    'value'         => 'checked',
                                    'checked'       => FALSE,
                                    'style'         => 'width:40%',
                                    'class'         => 'register-form-input register-checkox'
                            );
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:40%;'
                            );


                            echo form_label('VAT exists', 'register_yes', $label_attributes);
                            echo form_checkbox( $data_checkbox_excluded );
                            //===================================================================
                            $data_checkbox_excluded = array(
                                    'name'          => 'register_no',
                                    'id'            => 'register_no',
                                    'value'         => 'checked',
                                    'checked'       => FALSE,
                                    'style'         => 'width:40%',
                                    'class'         => 'register-form-input register-checkox'
                            );
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:40%;'
                            );


                            echo form_label('VAT doesnt Exists', 'register_no', $label_attributes);
                            echo form_checkbox( $data_checkbox_excluded );


                            //======================================================================
                            $data = array(
                                    'name'          => 'register_VAT_no',
                                    'id'            => 'register_VAT_no',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Company',
                                    //'required'      => 'required'
                                    'style' => 'width:100%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label('VAT No', 'register_VAT_no', $label_attributes);
                            echo form_input($data );



                            //======================================================================
                            $data = array(
                                    'name'          => 'register_contact_no',
                                    'id'            => 'register_contact_no',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Reg No',
                                    //'required'      => 'required'
                                    'style' => 'width:100%;'
                            );
              /*
                            $attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );
              */
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label('Contact', 'register_contact_no', $label_attributes);
                            echo form_input($data );

                            //=========================================================================
                            $data = array(
                                      'name'          => 'username',
                                      'id'            => 'username',
                                      'class'         => 'register-form-input form-control',
                                      'placeholder'   => 'Username'
                                      //'required'      => 'required'
                                  );
                            $label_attributes = array(
                                    'class' => 'register-form-input',
                                    'style' => 'width:100%;'
                            );


                            echo form_label( 'Username', 'username', $label_attributes );
                            echo form_input( $data );

                          //===========================================================================
                          $data = array(
                                    'type'          => 'email',
                                    'name'          => 'email',
                                    'id'            => 'inputEmail',
                                    'class'         => 'register-form-input form-control',
                                    'style' => 'width:100%;',
                                    'placeholder'   => 'Email address'
                                    //'required'      => 'required'
                                );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label( 'Email', 'email', $label_attributes );
                          echo form_input( $data );


                          //===========================================================================
                          $data = array(
                                  'type'          => 'password',
                                  'name'          => 'password',
                                  'id'            => 'inputPassword',
                                  'class'         => 'register-form-input form-control',
                                  'placeholder'   => 'Password'
                                  //'required'      => 'required'
                              );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label( 'Password', 'password', $label_attributes );
                          echo form_input( $data );



                          //===========================================================================
                          $data = array(
                                    'type'          => 'password',
                                    'name'          => 'passwordagain',
                                    'id'            => 'inputPassword',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Password Again',
                                    'style' => 'width:100%;'
                                    //'required'      => 'required'
                                );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label('Password Again', 'passwordagain', $label_attributes);
                          echo form_input( $data );


                          //===========================================================================
                          $data = array(
                                    'type'          => 'register_country',
                                    'name'          => 'register_country',
                                    'id'            => 'inputPassword',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Country',
                                    'style' => 'width:100%;'
                                    //'required'      => 'required'
                                );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label('Country', 'register_country', $label_attributes);
                          echo form_input( $data );



                          //===========================================================================
                          $data = array(
                                    'type'          => 'register_address',
                                    'name'          => 'register_address',
                                    'id'            => 'inputPassword',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Address',
                                    'style' => 'width:100%;'
                                    //'required'      => 'required'
                                );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label('Address', 'register_address', $label_attributes);
                          echo form_input( $data );



                          //===========================================================================
                          $data = array(
                                    'type'          => 'register_post_code',
                                    'name'          => 'register_post_code',
                                    'id'            => 'inputPassword',
                                    'class'         => 'register-form-input form-control',
                                    'placeholder'   => 'Post Code',
                                    'style'         => 'width:100%;'
                                    //'required'      => 'required'
                                );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label('Post Code', 'register_post_code', $label_attributes);
                          echo form_input( $data );


                          //===========================================================================
                          $data = array(
                                    'type'          => 'hidden',
                                    'name'          => 'createdDtm',
                                    'id'            => 'createdDtm',
                                    'class'         => 'register-form-input form-control',
                                    'style' => 'width:100%;',
                                    //'placeholder'   => 'Password Again'
                                    //'required'      => 'required'
                                );
              /*
                          $label_attributes = array(
                                  'class' => '',
                                  'style' => ''
                          );


                          echo form_label('VAT doesnt Exists', 'register_no', $label_attributes);
              */
                          echo form_input( $data );



                          //===================================================================
                          $options = array(
                                  'seller'         => 'Seller',
                                  'buyer'         => 'Buyer',
                          );
                          $attributes = array(
                                  'class' => 'register-form-input form-control',
                                  'style' => 'width:100%;'
                          );
                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => 'width:100%;'
                          );


                          echo form_label('Select User Role e.g Seller/Buyer', 'register_select_role', $label_attributes);
                          echo form_dropdown('register_select_role', $options, 'mark1', $attributes );


                          //==================================================================
                          $data = array(
                              'name'          => 'register_terms',
                              'id'            => 'register_terms',
                              'value'         => 'checked',
                              'checked'       => FALSE,
                              'style'         => 'width: 50%',
                              'placeholder'   => 'Accepting terms and conditions',
                              'class'         => 'register-form-input form-control'
                          );

                          $label_attributes = array(
                                  'class' => 'register-form-input',
                                  'style' => ''
                          );


                          form_label('Require inspection auction for won item', 'buy_req_inspection', $label_attributes);
                          echo form_checkbox( $data );


                          $data = array(
                                  'class'      => 'btn btn-lg btn-primary btn-block',
                                  'style'      => 'width: 100%; margin: 15px;',
                                  'value'      => 'I am buyer only. Submit Here'
                              );
                          echo form_submit( $data );
                        ?>
                        <a style="width: 100%; margin: 15px;" class="btn btn-lg btn-primary btn-block" href="<?php echo base_url(); ?>index.php/register-seller">I am Seller. press here</a>

                      <?php echo form_close(); ?>

              </div>
          <!-- Section: Contact v.1 -->
            </div>
