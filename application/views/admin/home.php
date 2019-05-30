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
    height: 100vh;
  }
</style>
<div class="row" >
  <div class="page-box col-xs-10 col-sm-10 col-lg-10" >
    <?php
        $query = $this->db->from('tbl_last_login');

        $query = $this->db->order_by('id','desc')->limit(1)->get();

        $user_info = $query->row(  );
        if (! empty( $user_info->sessionData )) {
          $decode = json_decode( $user_info->sessionData );
        }
    ?>
    <h1 class="page-title" >Home</h1>
    <h3 class="page-description" ></h3>
    <!-- <h3 class="page-description" ><?php //print_r( json_decode( $user_info->sessionData ) );  ?></h3> -->
    <?php

    if (! empty( $decode->role )) {
      if ( 'seller' == $decode->role )
      {
        $this->load->view( 'seller-all-auctions-dashboard' );
      } elseif ( 'buyer' == $decode->role )
      {
        $this->load->view( 'buyer-all-auctions-dashboard' );
      }
    }

    ?>
  </div>
</div>
