<?php
$this->load->helper('form');
$this->load->helper('url');

$this->load->library('session');
$attributes = array('class' => 'form-signin');

$this->load->helper('url');
$query = $this->db->from('tbl_seller_bid_input');

$site_url = current_url();
$auction_number = preg_replace( '/\D/', '', $site_url );
$fixed_nr = $auction_number;

$query = $this->db->get();
$auction_info = $query->row( $auction_number );

$user_query = $this->db->from('tbl_last_login');
$user_query = $this->db->order_by('id','desc')->limit(1)->get();
$user_info = $user_query->row(  );
$user_decode = json_decode( $user_info->sessionData );
//print_r( $user_decode  );


echo form_open('dashboard/DashboardViewOfBidRequest/auction-'.$auction_number.'', $attributes); ?>

    <div style="margin-left: 11%;" class="dashboard-form-container col-xs-12 col-sm-12 col-lg-12" >
      <h2  class="form-signin-heading text-center">Buyer View  </h2>
      <div class="row" >
        <?php
             $this->load->helper('url');

             $query = $this->db->from('tbl_seller_bid_input');


             $site_url = current_url();
             $auction_number = preg_replace( '/\D/', '', $site_url );
             $fixed_nr = $auction_number;


             $query = $this->db->get();

             $auction_info = $query->row( $auction_number );
             $decode = json_decode( $auction_info->upload_image_metadata );
            ?>
        <div class="col-xs-4 col-sm-4 col-lg-4" >
              <ul style="font-size: 18px; background-color: blue;  padding: 25px; margin: 20px;" class="list-group card">
                  <li class="">-Mark: <?php  if( !empty( $auction_info->seller_bid_make )  ) { echo $auction_info->seller_bid_make; } ?></li>
                  <li class="">-Model:  <?php  if( !empty( $auction_info->seller_bid_model )  ) { echo $auction_info->seller_bid_model; } ?></li>
                  <li class="">-Year of Manufacture: <?php  if( !empty( $auction_info->seller_bid_manufacturing_year )  ) { echo $auction_info->seller_bid_manufacturing_year; } ?></li>
                  <li class="">-Factory Code: <?php if( !empty( $auction_info->seller_bid_part_no )  ) { echo $auction_info->seller_bid_part_no; } ?></li>
              </ul>
              <ul style="font-size: 14px; background-color: blue;  padding: 15px; margin: 10px;" class="list-group card">
                  <li class="">Bid 1</li>
                  <li class="">Bid 2</li>
                  <li class="">Bid 3</li>
                  <li class="">Bid 4</li>
              </ul>
              <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                <p><?php if( !empty( $auction_info->seller_bid_condition_input )  ) { echo $auction_info->seller_bid_condition_input; } ?></p>
              </div>
              <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                <p><?php if( !empty( $auction_info->seller_bid_condition_input2 )  ) { echo $auction_info->seller_bid_condition_input2; } ?></p>
              </div>
              <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                <p><?php if( !empty( $auction_info->seller_bid_condition_input2 )  ) { echo $auction_info->seller_bid_condition_input2; } ?></p>
              </div>
              <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-12 col-sm-12 col-lg-12" >
                <p><?php if( !empty( $auction_info->seller_bid_condition_checkbox )  ) { echo $auction_info->seller_bid_condition_checkbox; } ?></p>
                <p><?php if( !empty( $auction_info->seller_bid_condition_checkbox2 )  ) { echo $auction_info->seller_bid_condition_checkbox2; } ?></p>
              </div>
        </div>


        <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
            <div class="col-lg-12"  >
              <a href="#" ><img height="340" width="340" src="<?php echo base_url().'assets/uploads/'.$decode->file_name ?>" ></a>
            </div>
            <div style="padding-top: 10px; padding-bottom: 10px; display: inline;" class="col-lg-6"  >
              <a href="#" ><img style="padding-top: 5px; padding-bottom: 5px;" height="160" width="160" src="<?php echo base_url().'assets/uploads/'.$decode->file_name ?>" ></a>
              <a href="#" ><img style="padding-top: 5px; padding-bottom: 5px;" height="160" width="160" src="<?php echo base_url().'assets/uploads/'.$decode->file_name ?>" ></a>
            </div>
            <div style="padding-top: 10px; padding-bottom: 10px; display: inline;" class="col-lg-6"  >
              <a href="#" ><img style="padding-top: 5px; padding-bottom: 5px;" height="160" width="160" src="<?php echo base_url().'assets/uploads/'.$decode->file_name ?>" ></a>
              <a href="#" ><img style="padding-top: 5px; padding-bottom: 5px;" height="160" width="160" src="<?php echo base_url().'assets/uploads/'.$decode->file_name ?>" ></a>
            </div>
            <ul style="font-size: 14px; background-color: blue;  padding: 15px; margin: 10px;" class="list-group card">
                <a href="#" ><li class="list-group-item">Bid 1</li></a>
                <a href="#" ><li class="list-group-item">Bid 2</li></a>
                <a href="#" ><li class="list-group-item">Bid 3</li></a>
                <a href="#" ><li class="list-group-item">Bid 4</li></a>
            </ul>

        </div>


        <div class="seller-bid-third-col col-xs-4 col-sm-4 col-lg-4" >
            <div class="row" >
              <div class="seller-bid-third-col col-xs-4 col-sm-4 col-lg-4" >
                <div style="font-size: 22px; background-color: blue; width: 12rem; padding: 25px; margin: 20px;" class="card" >
                    <p><a href="<?php echo base_url(); ?>index.php/dashboard/askquestion" >Ask Question</a></p>
                </div>
                <div style="font-size: 18px; background-color: blue; width: 12rem; padding: 25px; margin: 20px;" class="card" >
                  <p><?php if( !empty( $auction_info->seller_bid_make )  ) { echo $auction_info->seller_bid_make; } ?></p>
                </div>
              </div>
              <div class="seller-bid-third-col col-xs-6 col-sm-6 col-lg-6" >
                <ul style="font-size: 18px; background-color: blue;  padding: 25px; margin: 20px;" class="list-group card">
                    <li class="">-Mark: <?php if( !empty( $auction_info->seller_bid_make )  ) { echo $auction_info->seller_bid_make; } ?></li>
                    <li class="">-Model:  <?php if( !empty( $auction_info->seller_bid_model )  ) { echo $auction_info->seller_bid_model; } ?></li>
                    <li class="">-Year of Manufacture: <?php if( !empty( $auction_info->seller_bid_manufacturing_year )  ) { echo $auction_info->seller_bid_manufacturing_year; } ?></li>
                    <li class="">-Factory Code: <?php if( !empty( $auction_info->seller_bid_part_no )  ) { echo $auction_info->seller_bid_part_no; } ?></li>
                </ul>
              </div>
              <div class="seller-bid-third-col col-xs-12 col-sm-12 col-lg-12" >
                <div style="width: 30rem; height: 25rem; font-size: 18px; background-color: blue;  padding: 25px; margin: 20px;" class="list-group card">
                  <p>Free text</p>
                </div>
              </div>
          </div>
          <?php
          if ( ! empty( $user_decode->username ) ) {

              $data = array(
                    'type'          => 'hidden',
                    'name'          => 'view_of_bid_request',
                    'id'            => 'view_of_bid_request',
                    'value'         => $auction_number,
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Insert Condition',
                    'class'         => 'seller-bid-input-first-col'
              );
              echo form_input($data);

              $data = array(
                    'type'          => 'hidden',
                    'name'          => 'accept_bids_username',
                    'id'            => 'accept_bids_username',
                    'value'         => $user_decode->username,
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Insert Condition',
                    'class'         => 'seller-bid-input-first-col'
              );
              echo form_input($data);


              $data = array(
                    'type'          => 'hidden',
                    'name'          => 'accept_bids_role',
                    'id'            => 'accept_bids_role',
                    'value'         => $user_decode->role,
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Insert Condition',
                    'class'         => 'seller-bid-input-first-col'
              );
              echo form_input($data);


              $data = array(
                    'type'          => 'hidden',
                    'name'          => 'accept_bids_userId',
                    'id'            => 'accept_bids_userId',
                    'value'         => $user_decode->userId,
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Insert Condition',
                    'class'         => 'seller-bid-input-first-col'
              );
              echo form_input($data);

              $data = array(
                    'type'          => 'hidden',
                    'name'          => 'accept_bids_email',
                    'id'            => 'accept_bids_email',
                    'value'         => $user_decode->email,
                    'maxlength'     => '100',
                    'size'          => '50',
                    'style'         => 'width:75%',
                    'placeholder'   => 'Insert Condition',
                    'class'         => 'seller-bid-input-first-col'
              );
              echo form_input($data);
          }
          //print_r( $auction_info );
          $datas = array(
                  'class'      => 'btn btn-lg btn-primary btn-block',
                  'value'      => 'Accept Bid'
              );
          echo form_submit($datas);

          ?>

      </div>


    </div>
  </div>
  <?php echo form_close(); ?>
