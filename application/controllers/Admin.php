<?php
class Admin extends CI_Controller {


  public function admin_home_page_view($page = 'home')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }



  public function admin_about_page_view($page = 'about')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }


  public function admin_language_page_view($page = 'language')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }


  public function admin_contacts_page_view($page = 'contacts')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }



  public function admin_privacy_policy_page_view($page = 'privacy-policy')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }


  public function admin_how_it_works_page_view($page = 'how-it-works')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }

  public function admin_notification_page_view($page = 'notifications')
  {
          if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('admin/header', $data);
          $this->load->view('admin/'.$page, $data);

          $this->load->view('admin/footer', $data);
  }



}
