<?php

Class Faunamodel extends CI_Model
{

 

	function modelinputUser()
    {
			 
		   	 $username=$this->input->post('username');
			 $password=$this->input->post('password'); 
			 $alamat=$this->input->post('alamat');
		   	 $nama=$this->input->post('nama'); 
		   	 $kontak=$this->input->post('kontak');
			 
				 //array insert into database
				 $data= array(
				    'id_kontributor'=> '',
				    'nama'=>$nama,
		 			'username'=>$username,
					'password'=>$password,
					'alamat'=>$alamat,
					'kontak'=>$kontak
			  
			     );


			  $this->db->insert('kontributor',$data); 	    
	}

	function validasiLogin(){

	 
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('kontributor');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id_kontributor,
                    'uname' => $row->username,
                    'alamat' => $row->alamat,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    

	}


    function validasiAdmin(){

     
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('admin');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'uname' => $row->username,                     
                    'validamin' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    

    }

    function modelInputBerita(){

         

            $this->load->database();
          
    
           
    }

    function m_lihatHighlight()
    {

     $query = $this->db->get('news');



            if ($query->num_rows() > 0)
            {

                  return $query->result();
         

            }
            
  

    }

    function m_konservasi()
    {
 

        $queryKonserve= $this->db->query("SELECT * from news where kategori='KONSERVASI' ");

        if($queryKonserve->num_rows() > 0)
        {

            return $queryKonserve->result();

        }

    }

    function m_peliharaan()
    {
 

        $queryPeliharaan= $this->db->get_where('news', array('kategori' => "PELIHARAAN"));

        if($queryPeliharaan->num_rows() > 0)
        {

            return $queryPeliharaan->result();

        }

    }


    function m_edit($data){
     
      $this->db->where($data);
      $edit = $this->db->get('news');
    
      return $edit->result();
    

    }






}




?>