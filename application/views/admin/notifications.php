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
    <h1 class="page-title" >Notifications</h1>
    <h3 class="page-description" ></h3>
    <?php
          $query = $this->db->query("SELECT  view_of_bid_request, accept_bids_username, accept_bids_email, accept_bids_userId  FROM tbl_accepted_bids ");

          $html = '';
          $html .= '<ul>';
            foreach ($query->result() as $key => $row)
            {


                    $html .= '<li>';
                        $html .= '<a href="'.base_url()  .'index.php/dashboard/DashboardViewOfBidRequest/auction-'.$row->view_of_bid_request.'" > '.$key.'. User: '.$row->accept_bids_username.' have placed bid on your auction </a>';
                    $html .= '</li>';


            }
          $html .= '<ul>';
          print $html;

          $query->free_result();
    ?>
  </div>
</div>
