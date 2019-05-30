<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email_Model extends CI_Model
{



      public $accept_bids_email;
      public $view_of_bid_request;
      public $accept_bids_username;

      // Declarte construct method which accepts three parameters
      public function __construct(  )
      {


       parent::__construct(  );
      }

    function send( $accept_bids_email, $view_of_bid_request, $accept_bids_username ){

      $query = $this->db->from('tbl_accepted_bids');

/*
      $site_url = current_url();
      $auction_number = preg_replace( '/\D/', '', $site_url );
      $fixed_nr = $auction_number;


      $query = $this->db->get();

      $auction_info = $query->row( $auction_number );
      //print_r(  $auction_number );
*/


                // Load PHPMailer library
                $this->load->library('phpmailer_lib');

                // PHPMailer object
                $mail = $this->phpmailer_lib->load();

                // SMTP configuration
                $mail->isSMTP();
                $mail->Host     = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'websitdesign1@gmail.com';
                $mail->Password = 'Linux.1991';
                $mail->SMTPSecure = 'tls';
                $mail->Port     = 587;

                $mail->setFrom('info@example.com', 'RPA 24');
                $mail->addReplyTo('info@example.com', 'RPA 24');

                // Add a recipient
                $mail->addAddress( $accept_bids_email );


                // Email subject
                $mail->Subject = 'User '.$accept_bids_username.' Made Bid For Your Acution';

                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $mailContent = "
                    <h1>User '.$accept_bids_username.' Made Bid </h1>
                    <a href='".base_url()  ."index.php/dashboard/DashboardViewOfBidRequest/auction-".$view_of_bid_request."' >View Auction</a>
                    <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
                $mail->Body = $mailContent;

                // Send email
                if(!$mail->send()){
                    echo '<h1>Message could not be sent.</h1>';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }else{
                    echo 'Message has been sent';

                }





    }

}
