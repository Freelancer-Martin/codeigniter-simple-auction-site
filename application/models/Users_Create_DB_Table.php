<?php
class Users_Create_DB_Table extends CI_Model {

      public function __construct()
      {

        $this->create_user_table();
        $this->create_roles_table();
        $this->create_reset_password_table();
        $this->create_last_login_table();
        $this->create_ci_sessions_table();
        $this->create_seller_bid_input_table();
        $this->create_identifying_buyers_vechile_table();
        $this->create_buyer_request_for_bids_table();
        $this->create_accepted_bids_table();
        $this->create_models_table();
        $this->create_mark_table();
        $this->create_register_users_table();
        $this->create_transport_table();


      }


      //=============================================================            Auctions          ======================================================================
        public function create_register_users_table()
        {

          //$this->load->library('session');
          if ( ! $this->db->table_exists('tbl_register_seller'))
          {
              $return = '';
              $return = $this->load->database();
              $return = $this->load->dbforge();
              $return = $this->dbforge->add_field(array(
                  'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                  'seller_yes' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'seller_no' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'machines' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'parts' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'inspection' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'equipment' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'transport' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'construction_equipment' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'truck_trailers' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'agriculture' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'ground_care' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'material_handling' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'models' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'certif_upload' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'make' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'mainly_used' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'new' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'refrubished' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'business_des' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'terms' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),
                  'upload_info' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                  ),



              ));
              $return = $this->dbforge->add_key('id', TRUE);
              $return = $this->dbforge->create_table('tbl_register_seller');

              return $return;
           }

       }




      public function create_models_table()
      {

        //$this->load->library('session');
        if ( ! $this->db->table_exists('tbl_models'))
        {
            $return = '';
            $return = $this->load->database();
            $return = $this->load->dbforge();
            $return = $this->dbforge->add_field(array(
                'id' => array(
                      'type' => 'INT',
                      'constraint' => 5,
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
                  ),
                'models' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '100',
                        //'default' => 'King of Town',
                ),



            ));
            $return = $this->dbforge->add_key('id', TRUE);
            $return = $this->dbforge->create_table('tbl_models');

            return $return;
         }

     }



     public function create_transport_table()
     {

       //$this->load->library('session');
       if ( ! $this->db->table_exists('tbl_transport'))
       {
           $return = '';
           $return = $this->load->database();
           $return = $this->load->dbforge();
           $return = $this->dbforge->add_field(array(
               'id' => array(
                     'type' => 'INT',
                     'constraint' => 5,
                     'unsigned' => TRUE,
                     'auto_increment' => TRUE
                 ),
                 'shipment_type' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'make' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'model' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'froms' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'tos' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'weight' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'quantity' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'total_weight' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'collection_date' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'delivery_time' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),
                 'transport_des' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                 ),




           ));
           $return = $this->dbforge->add_key('id', TRUE);
           $return = $this->dbforge->create_table('tbl_transport');

           return $return;
        }

    }




     public function create_mark_table()
     {

       //$this->load->library('session');
       if ( ! $this->db->table_exists('tbl_mark'))
       {
           $return = '';
           $return = $this->load->database();
           $return = $this->load->dbforge();
           $return = $this->dbforge->add_field(array(
               'id' => array(
                     'type' => 'INT',
                     'constraint' => 5,
                     'unsigned' => TRUE,
                     'auto_increment' => TRUE
                 ),
               'mark' => array(
                       'type' =>'VARCHAR',
                       'constraint' => '100',
                       //'default' => 'King of Town',
               ),



           ));
           $return = $this->dbforge->add_key('id', TRUE);
           $return = $this->dbforge->create_table('tbl_mark');

           return $return;
        }

    }


      public function create_accepted_bids_table()
      {

          //$this->load->library('session');
          if ( ! $this->db->table_exists('tbl_accepted_bids'))
          {
              $return = '';
              $return = $this->load->database();
              $return = $this->load->dbforge();
              $return = $this->dbforge->add_field(array(
                  'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                  'view_of_bid_request' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                          //'default' => 'King of Town',
                  ),
                  'accept_bids_username' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                          //'default' => 'King of Town',
                  ),
                  'accept_bids_role' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                          //'default' => 'King of Town',
                  ),
                  'accept_bids_userId' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                          //'default' => 'King of Town',
                  ),
                  'accept_bids_email' => array(
                          'type' =>'VARCHAR',
                          'constraint' => '100',
                          //'default' => 'King of Town',
                  ),


              ));
              $return = $this->dbforge->add_key('id', TRUE);
              $return = $this->dbforge->create_table('tbl_accepted_bids');

              return $return;
           }

       }


          public function create_buyer_request_for_bids_table()
          {

              //$this->load->library('session');
              if ( ! $this->db->table_exists('tbl_buyer_request_for_bids'))
              {
                  $return = '';
                  $return = $this->load->database();
                  $return = $this->load->dbforge();
                  $return = $this->dbforge->add_field(array(
                   'id' => array(
                          'type' => 'INT',
                          'constraint' => 5,
                          'unsigned' => TRUE,
                          'auto_increment' => TRUE
                    ),
                    'buy_req_textarea' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                     ),
                    'buy_req_keyword_1' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                           //'unique' => TRUE,
                    ),
                    'buy_req_keyword_2' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            //'unique' => TRUE,
                     ),
                   'buy_req_keyword_3' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                           //'unique' => TRUE,
                    ),
                    'buy_req_upload' => array(
                            'type' => 'VARBINARY',
                            'constraint' => '100',
                            //'unique' => TRUE,
                     ),
                    'buy_req_condition_1' => array(
                             'type' => 'VARCHAR',
                             'constraint' => '5000',
                             //'unique' => TRUE,
                     ),
                    'buy_req_condition_2' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '100',
                              //'unique' => TRUE,
                    ),
                    'buy_req_compulsory_photos' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                     ),
                    'buy_req_shipping' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                           //'unique' => TRUE,
                    ),
                    'buy_req_address' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            //'unique' => TRUE,
                     ),
                   'buy_req_km' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                           //'unique' => TRUE,
                    ),
                    'buy_req_postcode' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            //'unique' => TRUE,
                     ),
                    'buy_req_working_hours' => array(
                             'type' => 'VARCHAR',
                             'constraint' => '5000',
                             //'unique' => TRUE,
                     ),
                    'buy_req_fast_days' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '100',
                              //'unique' => TRUE,
                    ),
                    'buy_req_fast' => array(
                             'type' => 'VARCHAR',
                             'constraint' => '5000',
                             //'unique' => TRUE,
                     ),
                    'buy_req_inspection' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '100',
                              //'unique' => TRUE,
                    ),
                    'upload_image_metadata' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '2000',
                              //'unique' => TRUE,
                    ),

                  ));
                  $return = $this->dbforge->add_key('id', TRUE);
                  $return = $this->dbforge->create_table('tbl_buyer_request_for_bids');

                  return $return;
               }

        }

  //=============================================================            Auctions          ======================================================================
      public function create_identifying_buyers_vechile_table()
      {

          //$this->load->library('session');
          if ( ! $this->db->table_exists('tbl_identifying_buyers_vechile'))
          {
              $return = '';
              $return = $this->load->database();
              $return = $this->load->dbforge();
              $return = $this->dbforge->add_field(array(
               'id' => array(
                      'type' => 'INT',
                      'constraint' => 5,
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
                ),
                'ind_buy_vec_mark' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      //'unique' => TRUE,
                 ),
                'ind_buy_vec_model' => array(
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       //'unique' => TRUE,
                ),
                'ind_buy_vec_cat' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        //'unique' => TRUE,
                 ),
                 'ind_buy_vec_year_from' => array(
                         'type' => 'VARCHAR',
                         'constraint' => '100',
                         //'unique' => TRUE,
                  ),
                  'ind_buy_vec_year_to' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                   ),
                  'ind_buy_vec_hour_min' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '5000',
                           //'unique' => TRUE,
                   ),
                  'ind_buy_vec_hour_max' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            //'unique' => TRUE,
                  ),


              ));
              $return = $this->dbforge->add_key('id', TRUE);
              $return = $this->dbforge->create_table('tbl_identifying_buyers_vechile');

              return $return;
           }

    }
    //=============================================================            Auctions          ======================================================================
      public function create_seller_bid_input_table()
      {

          //$this->load->library('session');
          if ( ! $this->db->table_exists('tbl_seller_bid_input'))
          {
              $return = '';
              $return = $this->load->database();
              $return = $this->load->dbforge();
              $return = $this->dbforge->add_field(array(
               'id' => array(
                      'type' => 'INT',
                      'constraint' => 5,
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
                ),
                'seller_bid_free_text' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      //'unique' => TRUE,
                 ),
                'seller_bid_condition_input' => array(
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       //'unique' => TRUE,
                ),
                'seller_bid_condition_checkbox' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        //'unique' => TRUE,
                 ),
                 'seller_bid_condition_input2' => array(
                         'type' => 'VARCHAR',
                         'constraint' => '100',
                         //'unique' => TRUE,
                  ),
                  'seller_bid_condition_checkbox2' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                   ),
                  'seller_bid_img_upload' => array(
                           'type' => 'VARBINARY',
                           'constraint' => '5000',
                           //'unique' => TRUE,
                   ),
                  'seller_bid_location' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            //'unique' => TRUE,
                  ),
                  'seller_bid_working_hours' => array(
                             'type' => 'VARCHAR',
                             'constraint' => '100',
                             //'unique' => TRUE,
                   ),
                  'seller_bid_manufacturing_year' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                   ),
                  'seller_bid_make' => array(
                         'type' => 'VARCHAR',
                         'constraint' => '100',
                         //'unique' => TRUE,
                  ),
                  'seller_bid_model' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                   ),
                   'seller_bid_part_no' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                           //'unique' => TRUE,
                   ),
                   'working_hours' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          //'unique' => TRUE,
                   ),
                   'included' => array(
                             'type' => 'VARCHAR',
                             'constraint' => '100',
                             //'unique' => TRUE,
                   ),
                   'excluded' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '100',
                              //'unique' => TRUE,
                   ),
                   'seller_bid_my_offer' => array(
                               'type' => 'VARCHAR',
                               'constraint' => '100',
                               //'unique' => TRUE,
                   ),
                   'seller_bid_accept_terms' => array(
                              'type' => 'VARCHAR',
                              'constraint' => '100',
                              //'unique' => TRUE,
                    ),
                    'upload_image_metadata' => array(
                               'type' => 'VARCHAR',
                               'constraint' => '2000',
                               //'unique' => TRUE,
                     ),



              ));
              $return = $this->dbforge->add_key('id', TRUE);
              $return = $this->dbforge->create_table('tbl_seller_bid_input');

              return $return;
           }

    }



    public function create_user_table()
    {

        //$this->load->library('session');
        if ( ! $this->db->table_exists('tbl_users'))
        {
            $return = '';
            $return = $this->load->database();
            $return = $this->load->dbforge();
            $return = $this->dbforge->add_field(array(
              'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
/*
              'userId' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    //'auto_increment' => TRUE
                ),
*/
              'register_first_name' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_last_name' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_company' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_reg_nr' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_yes' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_no' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_VAT_no' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_contact_no' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'username' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'unique' => TRUE,
              ),
              'password' => array(
                      'type' => 'TEXT',
                      'null' => TRUE,
              ),
              'passwordagain' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'email' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_country' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_address' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_post_code' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'createdDtm' => array(
                      'type' =>'TEXT',
                      'constraint' => 25,
                      'unsigned' => TRUE,
                      //'default' => 'King of Town',
              ),
              'register_select_role' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'register_terms' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),



            ));
            $return = $this->dbforge->add_key('id', TRUE);
            $return = $this->dbforge->create_table('tbl_users');

            return $return;
         }

  }


  public function create_roles_table()
  {

      //$this->load->library('session');
      if ( ! $this->db->table_exists('tbl_roles'))
      {
          $return = '';
          $return = $this->load->database();
          $return = $this->load->dbforge();
          $return = $this->dbforge->add_field(array(
              'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
/*
              'username' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'unique' => TRUE,
              ),
              'email' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
                      'default' => 'King of Town',
              ),
              'password' => array(
                      'type' => 'TEXT',
                      'null' => TRUE,
              ),
*/
          ));
          $return = $this->dbforge->add_key('id', TRUE);
          $return = $this->dbforge->create_table('tbl_roles');

          return $return;
       }

   }



   public function create_reset_password_table()
   {

       //$this->load->library('session');
       if ( ! $this->db->table_exists( 'tbl_reset_password' ))
       {
           $return = '';
           $return = $this->load->database();
           $return = $this->load->dbforge();
           $return = $this->dbforge->add_field(array(
               'id' => array(
                     'type' => 'INT',
                     'constraint' => 5,
                     'unsigned' => TRUE,
                     'auto_increment' => TRUE
                 ),
/*
               'email' => array(
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'unique' => TRUE,
               ),
               'activation_id' => array(
                       'type' =>'VARCHAR',
                       'constraint' => '100',
                       'default' => 'King of Town',
               ),
               'agent' => array(
                       'type' => 'TEXT',
                       'null' => TRUE,
               ),
               'client_ip' => array(
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'unique' => TRUE,
               ),
               'isDeleted' => array(
                       'type' =>'VARCHAR',
                       'constraint' => '100',
                       'default' => 'King of Town',
               ),
               'createdBy' => array(
                       'type' => 'TEXT',
                       'null' => TRUE,
               ),
               'createdDtm' => array(
                       'type' => 'VARCHAR',
                       'constraint' => '100',
                       'unique' => TRUE,
               ),
               'updatedBy' => array(
                       'type' =>'VARCHAR',
                       'constraint' => '100',
                       'default' => 'King of Town',
               ),
               'updatedDtm' => array(
                       'type' => 'TEXT',
                       'null' => TRUE,
               ),
*/
           ));
           $return = $this->dbforge->add_key('id', TRUE);
           $return = $this->dbforge->create_table( 'tbl_reset_password' );

           return $return;
        }

    }



    public function create_last_login_table()
    {

        //$this->load->library('session');
        if ( ! $this->db->table_exists( 'tbl_last_login' ))
        {
            $return = '';
            $return = $this->load->database();
            $return = $this->load->dbforge();
            $return = $this->dbforge->add_field(array(
                'id' => array(
                      'type' => 'INT',
                      'constraint' => 5,
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
                  ),

                'userId' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        //'unsigned' => TRUE,
                        //'auto_increment' => TRUE
                ),
                'sessionData' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                        //'unique' => TRUE,
                ),
                'machinelp' => array(
                        'type' =>'TEXT',
                        'constraint' => '200',
                        //'default' => 'King of Town',
                ),
                'userAgent' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '200',

                ),
                'agentString' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',

                ),
                'platform' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '200',

                ),
                'createdDtm' => array(
                        'type' => 'datetime',
                        //'default' => 'CURRENT_TIMESTAMP',
                ),

            ));
            $return = $this->dbforge->add_key('id', TRUE);
            $return = $this->dbforge->create_table( 'tbl_last_login' );

            return $return;
         }

     }



     public function create_ci_sessions_table()
     {

         //$this->load->library('session');
         if ( ! $this->db->table_exists( 'tbl_ci_sessions' ))
         {
             $return = '';
             $return = $this->load->database();
             $return = $this->load->dbforge();
             $return = $this->dbforge->add_field(array(
                 'session_id' => array(
                       'type' => 'INT',
                       'constraint' => 5,
                       'unsigned' => TRUE,
                       //'auto_increment' => TRUE
                   ),
/*
                 'ip_aadress' => array(
                         'type' => 'TEXT',
                         'null' => TRUE,
                 ),
                 'user_agent' => array(
                         'type' => 'VARCHAR',
                         'constraint' => '100',
                         'unique' => TRUE,
                 ),
                 'last_activity' => array(
                         'type' =>'VARCHAR',
                         'constraint' => '100',
                         'default' => 'King of Town',
                 ),
                 'user_data' => array(
                         'type' => 'TEXT',
                         'null' => TRUE,
                 ),
*/

             ));
             $return = $this->dbforge->add_key('id', TRUE);
             $return = $this->dbforge->create_table( 'tbl_ci_sessions' );

             return $return;
          }

      }


}
