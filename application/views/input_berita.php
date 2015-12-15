<html>
<head>
	<title>CARIKODE</title>	
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap_min.css"></link>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="//tinymce.cachefly.net/4.2/tinymce.min.js" type="text/javascript"></script>
	<script type="text/javascript">tinymce.init({

		selector:'#mytextarea'});</script>


	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/style.js"></script>
	<style type="text/css">
		body{
 				background-image: url('img/kolase.png') !important;
				font-family: monospace;
		}
		#kotak{
			margin: 50px auto;
			background: #ECF0F1;
			width: 800px;
			height: 500px;
			padding: 20px;
		}
		h1{
			text-align: center;
		}
		table tr input{
			width: 700px;
			height: 30px;
			padding-left: 20px;
			font-size: 12pt;
		}
 
	</style>
</head>
<body>
	<div id="kotak">
		<h1>BUAT BERITA BARU </h1>
		<h3><a   href="<?php echo base_url();?>logincontroller/logout"  class="btn-floating btn-large waves-effect waves-light red"> <i class="material-icons">LOGOUT</i></a></h3>

		<form role="form" method="post" action="<?php echo base_url();?>webcontroller/upload" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="judul">JUDUL </label>
			    <input type="text" name="judul" class="form-control" id="judul">
			  </div>

 			  <div class="form-group">
			    <label for="judul">Kontributor </label>
			    <input type="text" name="kontributor" class="form-control" id="kontributor"  placeholder="fill with free acronym">
			  </div>



			  <div class="form-group">
			    <label for="isi">ISI</label>
			    <textarea  name="isi" class="form-control" id="mytextarea"></textarea>
			  </div>

			  <div class="form-group">
			    <label>KATEGORI</label>
			    <select name="kategori">

			    	<option>KONSERVASI</option>
			    	<option>PELIHARAAN</option>
			    	<option>HIGHLIGHT</option>
			    	 
			    </select> 

			  </div>

			  <div class="form-group">
			    <label for="pwd">Put an Image</label>
			    <input type="file" name="userfile" class="form-control" id="pwd">
			  </div> 

			  <!-- <label class="radio-inline">
      <input type="radio" name="optradio">Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 3
    </label> -->
			  <button type="submit" class="form-control btn btn-success">Submit</button>
			   
			</form>
			<a href="<?php echo base_url();?>webcontroller/showBerita" type="submit" class="form-control btn btn-warning">GO TO NEWS</a>
	*
	</div>
</body>
</html>