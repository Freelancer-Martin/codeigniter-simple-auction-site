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
    width: 100%;
  }
</style>
<div class="row" >
  <div class="col-xs-12 col-sm-12 col-lg-12" >
    <h1 class="page-title" >How it works</h1>
    <h3 class="page-description" ></h3>

    <div class="container">
      <p class="display-4 mt-5">Welcome to Reverse Parts Auction! </p>
      <p>(1) Describe What parts / equipment / machine You need. Posting your enquiry is free!</p>
      <p>(2) Professionals will send best offers to You in hours. </p>
      <p>(3) Choose the best offer and order! </p>
      <p>Here you can list your Machine, part or equipment  you need or wish to have. It is simple to ad your request and instead of numerous hours spent searching you will receive the offers and you can choose the best offer. Offers are in reverse auction format and bids can be seen by other bidders. After your listing is completed it will be sent to most relevant registered sellers and published also in search engines to be found by new sellers. <br>
      This platform is convenient for buyers and sellers because sellers know exactly what buyer needs and saves also time and cost. Listing your item is free.</p>
      <div class="col-lg-12">

          <p class="lead">Latest Equipment Wanted:</p>
          <?php $this->load->view( 'seller-all-auctions' );   ?>






      </div>
    </div>
  </div>
</div>
