<?php

class Form extends CI_Controller {

  public function SellerBid()
  {

        if($this->session->login == 'true')
        {
          redirect('/');
        }


        $this->load->model('forms_model', 'auth');
        $this->load->view('templates/header');
        $this->load->library('form_validation');

        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $config['max_size'] = 10000;
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload');
        $this->upload->initialize($config);

        $this->form_validation->set_rules( 'seller_bid_free_text', 'Free Text', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_condition_input', 'Condition', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_condition_checkbox', 'Condition', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_condition_input2', 'Condition', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_condition_checkbox2', 'Condition', 'max_length[100]' );
        $this->form_validation->set_rules( 'seller_bid_img_upload', 'Upload', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_location', 'Location', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_working_hours', 'Working Hours', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_manufacturing_year', 'Manufacturing Year', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_make', 'Make', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_model', 'Model', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_part_no', 'Part No', 'max_length[120]' );
        $this->form_validation->set_rules( 'working_hours', 'Working Hours', 'max_length[120]' );
        $this->form_validation->set_rules( 'included', 'Included', 'max_length[120]' );
        $this->form_validation->set_rules( 'excluded', 'Excluded', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_my_offer', 'My Offer', 'max_length[120]' );
        $this->form_validation->set_rules( 'seller_bid_accept_terms', 'Accept Terms', 'max_length[120]' );
        $this->form_validation->set_rules( 'upload_image_metadata', 'upload image', 'max_length[2000]' );


                    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

                    if ( ! $this->upload->do_upload('seller_bid_img_upload'))
                    {

                        $error = array('error' => $this->upload->display_errors());

                    }
                    if ($this->form_validation->run() == FALSE)
                    {
                            $this->load->view( 'form/sellerbid' );
                    }
                    else
                    {
                            $data = array( 'upload_data' => $this->upload->data());
                            $this->load->view( 'form/seller-bid-update', $data );
                    }





        $this->load->view('templates/footer');
    }


    public function IdentifyingBuyerVehicle()
    {

          if($this->session->login == 'true')
          {
            redirect('/');
          }



          //echo "register";
          $this->load->model('forms_model', 'auth');
          $this->load->view('templates/header');
          $this->load->library('form_validation');
          $this->form_validation->set_rules( 'ind_buy_vec_mark', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_model', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_cat', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_year_from', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_year_to', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_hour_min', 'Upload', 'max_length[120]' );
          $this->form_validation->set_rules( 'ind_buy_vec_hour_max', 'Location', 'max_length[120]' );


          $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

                  if ($this->form_validation->run() == FALSE)
                  {
                      $this->load->view('form/identifying-buyers-vechile');
                  }
                  else
                  {

                      $this->load->view('form/identifying-buyers-vechile-update');
                  }

          $this->load->view('templates/footer');
      }


      public function BuyerRequestForBids ()
      {

            if($this->session->login == 'true')
            {
              redirect('/');
            }

            $this->load->model('forms_model', 'auth');

            $this->load->library('form_validation');

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;
            $config['max_size'] = 10000;
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload');
            $this->upload->initialize($config);
            //echo "register";

            $this->load->view('templates/header');

            $this->form_validation->set_rules( 'buy_req_textarea', 'Free Text', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_1', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_2', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_3', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_upload', 'Upload Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_1', 'Condition 1', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_2', 'Condition 2', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_compulsory_photos', 'Condition Photos', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_shipping', 'Condtion Shipping', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_address', 'Condition Address', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_km', 'Condition KM', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_postcode', 'Condition Postcode', '' );
            $this->form_validation->set_rules( 'buy_req_working_hours', 'Condition Hours', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast_days', 'Condition Days ', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast', 'Condition Fast', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_inspection', 'Condition Inspection', 'max_length[120]' );
            $this->form_validation->set_rules( 'upload_image_metadata', 'Location', 'max_length[2000]' );


            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ( ! $this->upload->do_upload('buy_req_upload'))
            {

                $error = array('error' => $this->upload->display_errors());

            }
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('form/buyer-request-for-bids');

            }
            else
            {
                $data = array( 'upload_data' => $this->upload->data());
                $this->load->view( 'form/buyer-request-for-bids-update', $data );

            }

            $this->load->view('templates/footer');
        }



        public function ViewOfBidRequest()
        {

          $this->load->view('templates/header');
          $this->load->view('form/view-of-bid-request');
          $this->load->view('templates/footer');

        }


        public function ViewOfBidRequestDashboard()
        {

          $this->load->view('admin/header');
          $this->load->view('form/view-of-bid-request-dashboard');
          $this->load->view('admin/footer');


        }

        public function SellerDisplayAllAuctions()
        {

          $this->load->view('templates/header');
          $this->load->view('buyer-all-auctions');
          $this->load->view('templates/footer');

        }


        public function BuyerDisplayAllAuctions()
        {

          $this->load->view('templates/header');
          $this->load->view('seller-all-auctions');
          $this->load->view('templates/footer');

        }



        public function DashboardIdentifyingBuyerVehicle()
        {

            if($this->session->login == 'true')
            {
              redirect('/');
            }


            //echo "register";
            $this->load->model('forms_model', 'auth');
            $this->load->view('admin/header');
            $this->load->library('form_validation');
            $this->form_validation->set_rules( 'ind_buy_vec_mark', 'Free Text', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_model', 'Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_cat', 'Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_year_from', 'Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_year_to', 'Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_hour_min', 'Upload', 'max_length[120]' );
            $this->form_validation->set_rules( 'ind_buy_vec_hour_max', 'Location', 'max_length[120]' );




            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


                    if ($this->form_validation->run() == FALSE)
                    {
                            $this->load->view('form/identifying-buyers-vechile-dashboard');
                    }
                    else
                    {

                            $this->load->view('form/identifying-buyers-vechile-update-dashboard');
                    }

            $this->load->view('admin/footer');
        }


        public function DashboardBuyerRequestForBids ()
        {

            if($this->session->login == 'true')
            {
              redirect('/');
            }

            $this->load->model('forms_model', 'auth');
            $this->load->library('form_validation');

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;
            $config['max_size'] = 10000;
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload');
            $this->upload->initialize($config);
            //echo "register";

            $this->load->view('admin/header');

            $this->form_validation->set_rules( 'buy_req_textarea', 'Free Text', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_1', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_2', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_3', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_upload', 'Upload Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_1', 'Condition 1', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_2', 'Condition 2', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_compulsory_photos', 'Condition Photos', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_shipping', 'Condtion Shipping', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_address', 'Condition Address', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_km', 'Condition KM', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_postcode', 'Condition Postcode', '' );
            $this->form_validation->set_rules( 'buy_req_working_hours', 'Condition Hours', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast_days', 'Condition Days ', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast', 'Condition Fast', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_inspection', 'Condition Inspection', 'max_length[120]' );
            $this->form_validation->set_rules( 'upload_image_metadata', 'Location', 'max_length[2000]' );


            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

                if ( ! $this->upload->do_upload('buy_req_upload'))
                {

                    $error = array('error' => $this->upload->display_errors());

                }
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form/buyer-request-for-bids-dashboard');

                }
                else
                {
                        $data = array( 'upload_data' => $this->upload->data());
                        $this->load->view( 'form/buyer-request-for-bids-update-dashboard', $data );

                }

            $this->load->view('admin/footer');
        }


        public function DashboardTransport ()
        {

            if($this->session->login == 'true')
            {
              redirect('/');
            }

            //echo "register";

            $this->load->model('forms_model', 'auth');
            $this->load->view('admin/header');
            $this->load->library('form_validation');

            $this->form_validation->set_rules( 'make', 'Free Text', 'max_length[120]' );
            $this->form_validation->set_rules( 'model', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'froms', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'to', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'weight', 'Upload Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'quantity', 'Condition 1', 'max_length[120]' );
            $this->form_validation->set_rules( 'total_weight', 'Condition 2', 'max_length[120]' );
            $this->form_validation->set_rules( 'collection_date', 'Condition Photos', 'max_length[120]' );
            $this->form_validation->set_rules( 'delivery_time', 'Condtion Shipping', 'max_length[120]' );
            $this->form_validation->set_rules( 'transport_des', 'Condition Address', 'max_length[120]' );



            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form/transport-view');

                }
                else
                {

                        $this->load->view( 'form/transport-update' );

                }

            $this->load->view('admin/footer');
        }



        public function DashboardQuestions ()
        {

            if($this->session->login == 'true')
            {
              redirect('/');
            }

            //echo "register";

            $this->load->model('forms_model', 'auth');
            $this->load->view('admin/header');
            $this->load->library('form_validation');

            $this->form_validation->set_rules( 'buy_req_textarea', 'Free Text', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_1', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_2', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_keyword_3', 'Keyword Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_upload', 'Upload Condition', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_1', 'Condition 1', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_condition_2', 'Condition 2', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_compulsory_photos', 'Condition Photos', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_shipping', 'Condtion Shipping', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_address', 'Condition Address', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_km', 'Condition KM', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_postcode', 'Condition Postcode', '' );
            $this->form_validation->set_rules( 'buy_req_working_hours', 'Condition Hours', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast_days', 'Condition Days ', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_fast', 'Condition Fast', 'max_length[120]' );
            $this->form_validation->set_rules( 'buy_req_inspection', 'Condition Inspection', 'max_length[120]' );



            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form/question-view');

                }
                else
                {

                        $this->load->view( 'form/question-update' );

                }

            $this->load->view('admin/footer');
        }



        public function DashboardSellerBid()
        {

          if($this->session->login == 'true')
          {
            redirect('/');
          }


          $this->load->model('forms_model', 'auth');
          $this->load->view('templates/header');
          $this->load->library('form_validation');

          $config['upload_path'] = './assets/uploads/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_width'] = 10000;
          $config['max_height'] = 10000;
          $config['max_size'] = 10000;
          $config['encrypt_name'] = TRUE;


          $this->load->library('upload');
          $this->upload->initialize($config);

          $this->form_validation->set_rules( 'seller_bid_free_text', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_condition_input', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_condition_checkbox', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_condition_input2', 'Condition', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_condition_checkbox2', 'Condition', 'max_length[100]' );
          $this->form_validation->set_rules( 'seller_bid_img_upload', 'Upload', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_location', 'Location', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_working_hours', 'Working Hours', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_manufacturing_year', 'Manufacturing Year', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_make', 'Make', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_model', 'Model', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_part_no', 'Part No', 'max_length[120]' );
          $this->form_validation->set_rules( 'working_hours', 'Working Hours', 'max_length[120]' );
          $this->form_validation->set_rules( 'included', 'Included', 'max_length[120]' );
          $this->form_validation->set_rules( 'excluded', 'Excluded', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_my_offer', 'My Offer', 'max_length[120]' );
          $this->form_validation->set_rules( 'seller_bid_accept_terms', 'Accept Terms', 'max_length[120]' );
          $this->form_validation->set_rules( 'upload_image_metadata', 'upload image', 'max_length[2000]' );


                      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

                      if ( ! $this->upload->do_upload('seller_bid_img_upload'))
                      {

                          $error = array('error' => $this->upload->display_errors());

                      }
                      if ($this->form_validation->run() == FALSE)
                      {
                              $this->load->view( 'form/sellerbid' );
                      }
                      else
                      {
                              $data = array( 'upload_data' => $this->upload->data());
                              $this->load->view( 'form/seller-bid-update', $data );
                      }





          $this->load->view('templates/footer');
        }


        public function DashboardViewOfBidRequest()
        {
          $this->load->model('forms_model', 'auth');
          $this->load->view('admin/header');
          $this->load->library('form_validation');
          $this->form_validation->set_rules( 'view_of_bid_request', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'accept_bids_username', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'accept_bids_role', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'accept_bids_userId', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_rules( 'accept_bids_email', 'Free Text', 'max_length[120]' );
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('form/view-of-bid-request-dashboard');
            }
            else
            {
                    $this->load->view('form/view-of-bid-request-update-dashboard');
            }

          //$this->load->view('form/view-of-bid-request-dashboard');
          $this->load->view('admin/footer');

        }

        public function DashboardSellerDisplayAllAuctions()
        {

          $this->load->view('admin/header');
          $this->load->view('buyer-all-auctions-dashboard');
          $this->load->view('admin/footer');

        }


        public function DashboardBuyerDisplayAllAuctions()
        {

          $this->load->view('admin/header');
          $this->load->view('seller-all-auctions-dashboard');
          $this->load->view('admin/footer');

        }








}
