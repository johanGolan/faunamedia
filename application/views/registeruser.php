<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/materialize.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>css/materialize.css"></link>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<script type="text/javascript">
	
	$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
       
	</script>
<title>

</title>

<style>

 body{

  background: #5512aa !important ;

 }

.card-action
{

     background: url('img/backfaunacom.png') !important;
 

}
</style>

</head>
<body>
<div class="container">	

	<div class="card">

 
	
	  <div class="card-action">

         <h1>REGISTER</h1> 
              <div class="row">
				 
				 	<form method="post" action="<?php echo base_url();?>logincontroller/inputUser">

           <div class="input-field col s12">
              <input   id="nama" type="text" class="validate" placeholder="Username" name="nama">
              <label class="active" for="nama">NAMA</label>
            </div>


				    <div class="input-field col s12">
				      <input   id="username" type="text" class="validate" placeholder="Username"  name="username">
				      <label class="active" for="username">USERNAME</label>
				    </div>


				    <div class="input-field col s12">
				      <input  id="password" type="password" class="validate" placeholder="Password" name="password">
				      <label class="active" for="password">PASSWORD</label>
				    </div>

            <div class="input-field col s12">
              <input   id="alamat" type="text" class="validate" placeholder="Alamat diisi..." name="alamat">
              <label class="active" for="alamat">ALAMAT</label>
            </div>

           <div class="input-field col s12">
              <input   id="first_name2" type="text" class="validate" placeholder="Kontak" name="kontak">
              <label class="active" for="kontak">KONTAK</label>
            </div>



            <input type="submit"   class="waves-effect waves-light btn"> </input>
 			
				    </form>
 			 </div>
      </div>

	</div>



</div>


  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Moto:</h5>
                <p class="grey-text text-lighten-4">Sayangi satwa, peduli satwa, promosikan satwa sebagai objek wisata...</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Rekan Kami...</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Pesona Indoneisa</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">NetGeo Channel</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">PeduliHewan.com</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Promote us...</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 DevGolan...
            <a class="grey-text text-lighten-4 right" href="#!">Follow FaunaMedia on Page....</a>
            </div>
          </div>
        </footer>
            





</body>
</html>	-