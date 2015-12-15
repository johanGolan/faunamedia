<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Logincontroller extends CI_Controller {
   
   function __construct()
 {
   parent::__construct();
   $this->load->model('faunamodel','',TRUE);
 }

	 

 function index()
 {

  if($this->session->userdata('validated')){

    $this->load->view('input_berita');

  } 

  else
  {

        //Aksi untuk melakukan validasi
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

   if($this->form_validation->run() == FALSE)
   {
     //Jika validasi gagal user akan diarahkan kembali ke halaman login
     $this->load->view('loginuser');
   }
   else
   {
     //Jika berhasil user akan di arahkan ke private area 

    //inisialisasi awal 
      $username=$this->input->post('username'); 
      $password= $this->input->post('password');

      //model untuk membuat model web mengarahkan inputan ke database
      $this->load->model('faunamodel');
      $ceki = $this->faunamodel->validasiLogin();


        if($ceki)
            
        {

            $this->c_input_berita();
           
        }
        else{

           $this->load->view('loginuser');
        }

   }

  } 




   
 }


 function loginAdmin()
 {

    if($this->session->userdata('validamin'))
    {
         $this->halAdmin();

    }

    else
    {

         $this->load->library('form_validation');

         $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
  

   if($this->form_validation->run() == FALSE)
   {
     //Jika validasi gagal user akan diarahkan kembali ke halaman login
     $this->load->view('login');
   }
  
   else
   {
     //Jika berhasil user akan di arahkan ke private area 

    //inisialisasi awal 
      $username=$this->input->post('username'); 
      $password= $this->input->post('password');

      //model untuk membuat model web mengarahkan inputan ke database
      $this->load->model('faunamodel');
      $cekmin = $this->faunamodel->validasiAdmin();


        if($cekmin)
            
        {

            $this->halAdmin();
           
        }
        else
        {

           $this->load->view('login');
        
         }

     }  
  
   }

 }
 

  function halAdmin(){

    $data['jumlahKontributor'] = $this->db->count_all_results('kontributor');
    $data['jumlahBerita'] = $this->db->count_all_results('news');
    $quweyH= $this->db->query("select * from news where kategori='HIGHLIGHT' ");

    $quweyP= $this->db->query("select * from news where kategori='PELIHARAAN' ");

    $data['jumlahHighlight'] = $quweyH->num_rows();
    $data['jumlahPeliharaan'] = $quweyP->num_rows();
    
    $data['theAdmin'] = $this->session->userdata('uname');

    $this->load->view('adminhome', $data);

  }















   //.....................................


 function inputUser(){

      $this->load->model('faunamodel');

      $this->faunamodel->modelinputUser();

 
         echo '<script language="javascript">';
          echo 'alert("DATA SUCESSFULY INSERTED")';  
        echo '</script>';
        

         

       $this->load->view('loginuser');
     
   

 }


  public function c_input_berita()
  {
    $username = $this->session->userdata('username');
           
           $printsesi['theusername']=$username;
           
    $this->load->view('input_berita',$printsesi);

  }


 public function logout(){

   $this->session->sess_destroy();
        redirect('/');
 }

 



}

/* End of file welcome.php */
/*Documentation 2015 @johanNainggolan
/* Location: ./application/controllers/welcome.php */