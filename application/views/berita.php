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
	
	<script type="text/javascript">
	
	 $(".button-collapse").sideNav();
	
	 
	
	</script>
	
	<style type="text/css">

body, html
{
	
     
}

.intro
{
    text-align: center;
    padding-top: 7%;
    padding-bottom: 13%;
    margin-bottom: 50px;
	background: url('-img/backfaunacom.png') !important;
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
 
.latar
{

background-color: #f0f00f;

}
 
	
	
	</style>

</head>
<body>
<nav>
    <div class="nav-wrapper  deep-orange">
      <a class="brand-logo ">FAUNA-MEDIA NEWS</a>
      
    </div>
	
	
	
	
</nav>

<div class="latar">

<?php foreach ($berita_highlight as $berita1) { ?>




<div class="container z-depth-3">
	<div class="card blue lighten-2">
		<div class="card-image waves-effect waves-block waves-light">
		  <img class="activator" src="<?php echo base_url();?>media/<?php echo $berita1->filename;?>" width="10" height="350">
		</div>
		<div class="card-content ">
		  <span class="card-title activator grey-text text-darken-4"><?php echo $berita1->judul;?><i class="material-icons right">more_vert</i></span>
		  <p><a href="#">This is a link</a></p>
		</div>
		<div class="card-reveal orange accent-2">
		  <span class="card-title grey-text text-darken-4"><?php echo $berita1->judul;?><i class="material-icons right">close</i></span>
		  <p><?php echo $berita1->isi; ?>.</p>
		</div>
	</div>
				
			
</div>

 	
	<?php }?>

 

    
 	 
	</div>

		 
   
	<footer class="page-footer purple darken-1">
	
	<div class="footer-copyright purple darken-1">
				<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			  </div>
   </footer>

</div>
  

</body>
</html>