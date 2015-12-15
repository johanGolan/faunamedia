<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Webcontroller extends CI_Controller {

	 
	 function index()

	{
			if($this->session->userdata('validated')){

					$this->c_input_berita();

			}
			else{ $this->load->view('home');      }  


		
	}

	 function beritaview()
	{
		$this->load->view('berita');

	}

  function adlog()
  {

      $this->load->view('login');

  }

	public function loginuserview()
	{
		$this->load->view('loginuser');

	}

	public function registeruserview()
	{
		$this->load->view('registeruser');

	}


	public function c_input_berita()
	{
		$this->load->view('input_berita');

	}


	function upload() {
        $config['upload_path'] = './media';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile')) {
            echo $this->upload->display_errors();
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
           
                      $judul=$this->input->post('judul');
          $isi=$this->input->post('isi');
          $kategori=$this->input->post('kategori');

          $kontributor=$this->input->post('kontributor');




            $data = array(
            	'id_news'=> null ,
                'judul'=> $judul,
                'isi'=> $isi,
                'kategori'=> $kategori,
                'kontributor'=> $kontributor, 
                'filename'=> $file_data['file_name']
          


                     
            );
               $this->db->insert('news', $data);
            print_r($file_data); 
        }
    }



	
  function showBerita()
  {

    $this->load->model('faunamodel');

    $data['berita_highlight']=$this->faunamodel->m_lihatHighlight();

    $data['berita_konservasi']=$this->faunamodel->m_konservasi();

    $data['berita_peliharaan']=$this->faunamodel->m_peliharaan();

    $this->load->view('berita',$data);



  }

  function hlAdmin()
  {

      $q = $this->db->get('news');
      echo json_encode($q->result_array());

  }

   function hlAdminKontributor()
  {

      $q = $this->db->get('kontributor');
      echo json_encode($q->result_array());

  }

  function edit($id){

    $this->load->model('modelweb');


    $data=array(
    'id_news'=>$id
   
    );
   

    $data['data_edit']=$this->modelweb->m_edit($data);

    $this->load->view('adminhome',$data);



  }




}

/* End of file welcome.php */
/*Documentation 2015 @johanNainggolan
/* Location: ./application/controllers/welcome.php */