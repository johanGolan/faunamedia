<!DOCTYPE html>
<html>
<head>

	<title>FAUNA-MEDIA.COM - HOME</title>
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
	
	<style type="text/css">
	
	body, html
{
    background-color: #fadfad !important;
}

.intro
{
    text-align: center;
    padding-top: 7%;
    padding-bottom: 13%;
    margin-bottom: 50px;
	   background: url('img/backfaunacom.png') !important;
    background-repeat: no-repeat;
	width:100%;
}

.intro h1
{
    font-weight: 900;
    text-transform: uppercase;
	font-type:"Monotype Corsiva";
    font-color:#efeded;
}

.intro h5
{
    text-transform: uppercase;
    background-color: #f5f5f5;
    padding: 10px;
    color: #333333;
    display: inline-block;
    font-size: 1.2rem;
}


.about .col
{
    margin-bottom: 24px;
}

.about h5
{
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.about h6
{
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 45px;
}

.about hr
{
    width: 40px;
    margin-bottom: 45px;
}

.about .card
{
    text-align: center;
}
	
	
	
	</style>

</head>

<body>
		
	  <div class="intro lighten-2 z-depth-1">
		
        <h1 class="grey-text text-lighten-5">FAUNA-MEDIA.COM</h1>
        <h5 class="grey lighten-4 grey-text text-darken-1">FAUNA DAN MEDIA SUDAH SAATNYA ...</h5>
      </div>

	  <div class="container about">
 
	  
      <h5>about me</h5>
       
		
		<h6>PERKENALKAN KAMI...</h6>
        <hr>
        <div class="row">
          <div class="col s12 m4 l4">
            <h6>BACKGROUND WEBSITE</h6>
            <p> Website FAUNA-MEDIA.com adalah basis bagi semua wadah organisasi yang ingin berbagi dengan memberitakan tentang dunia fauna yang ada di Indonesia.  .</p>
            <p>Berbagi pengalaman, kisah, dan mempromosikan Indonesia dari segi fauna. Mari Selamatkan Fauna Indonesia !</p>
          </div>
          <div class="col s12 m4 l4">
            <h6>Profile</h6>
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <img src="img/GDEV.png" width="64" height="64">
                <p>Golan Developer , pengembang website yang peduli akan lingkungan dan media kepedulian terhadap fauna Indonesia.</p>
              </div>
              <div class="card-action">
                <a href="#">Link</a>
                <a href='#'>Link</a>
              </div>
            </div>
          </div>
          <div class="col s12 m4 l4">
            <h6>NAVIGATION</h6>
            <ul class="collapsible">
              <li class="active">
                <div class="collapsible-header"><i class="mdi-av-web"></i><a href="<?php echo base_url();?>webcontroller/showBerita">BERITA</a></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-editor-format-align-justify"></i><a href="#">REPORT </a></div>
                <div class="collapsible-body">SFSDFDSF</div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-av-play-shopping-bag"></i><a href="https://www.youtube.com">YOUTUBE</a></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header">LOGIN / REGISTER<i class="icon perm_identity"></i></div>
                <div class="collapsible-body">
				<a class="waves-effect waves-light btn" href="<?php echo base_url();?>webcontroller/loginuserview"><i class="material-icons left"> perm_identity</i>LOGIN</a> <br>
				<a class="waves-effect waves-light btn" href="<?php echo base_url();?>webcontroller/registeruserview"><i class="material-icons left">add </i>REGISTRASI</a>
								
				</div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    

 



</body>
</html>