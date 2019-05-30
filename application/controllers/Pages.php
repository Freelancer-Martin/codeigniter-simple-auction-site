<?php
class Pages extends CI_Controller {


  public function home_page_view($page = 'home')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }



  public function about_page_view($page = 'about')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }


  public function language_page_view($page = 'language')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }


  public function contacts_page_view($page = 'contacts')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }



  public function privacy_policy_page_view($page = 'privacy-policy')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }


  public function how_it_works_page_view($page = 'how-it-works')
  {
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);

          $this->load->view('templates/footer', $data);
  }



}
