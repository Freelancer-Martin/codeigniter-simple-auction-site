<?php

  $register_first_name = $this->input->post('register_first_name');
  $register_last_name =  $this->input->post('register_last_name');
  $register_company = $this->input->post('register_company');
  $register_reg_nr = $this->input->post('register_reg_nr');
  $register_yes = $this->input->post('register_yes');
  $register_no = $this->input->post('register_no');
  $register_VAT_no =  $this->input->post('register_VAT_no');
  $register_contact_no = $this->input->post('register_contact_no');
  $username = $this->input->post('username');
  $email =  $this->input->post('email');
  $password = $this->input->post('password');
  $passwordagain = $this->input->post('passwordagain');
  $register_country =  $this->input->post('register_country');
  $register_address = $this->input->post('register_address');
  $register_post_code =  $this->input->post('register_post_code');
  $createdDtm = $this->input->post('createdDtm');
  $register_select_role = $this->input->post('register_select_role');
  $register_terms =  $this->input->post('register_terms');


  $stringdatetime = new DateTime;
  $valuedatetime = $stringdatetime->format( 'Y-m-d' );

  $this->auth->register_insert_user(
    $register_first_name,
    $register_last_name,
    $register_company,
    $register_reg_nr,
    $register_yes,
    $register_no,
    $register_VAT_no,
    $register_contact_no,
    $username,
    $email,
    $password,
    $passwordagain,
    $register_country,
    $register_address,
    $register_post_code,
    $createdDtm,
    $register_select_role,
    $register_terms

  );
  $this->session->set_flashdata('register_info', 'Seller Registered Successfully');
  redirect( 'register' );
?>
