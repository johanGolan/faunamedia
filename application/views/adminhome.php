<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html ng-app="api">
<head>
<title>Modern an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/angular.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>js/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url();?>js/d3.v3.js"></script>
<script src="<?php echo base_url();?>js/rickshaw.js"></script>














</head>
<body ng-controller="newsku">
 
<div class="container">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN - FAUNAMEDIA</a>
                <a class="fa fa-child" href="<?php echo site_url('logincontroller/logout');?>">Logout</a>
            </div >
            <!-- /.navbar-header -->
              
			<form class="">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="glyphicon glyphicon-asterisk icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Admin Label :</strong></h5>
                      <span><?php echo $theAdmin;?></span>
                      

                          </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="glyphicon glyphicon-user icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Kontributor :</strong></h5>
                      <span><?php echo $jumlahKontributor;?></span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="glyphicon glyphicon-pencil icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Total Berita :</strong></h5>
                      <span><?php echo $jumlahBerita;?></span>
                    </div>
                </div>
        	</div>
        	
        	<div class="clearfix"> </div>
      </div>
      <div class="col_1" >
		     
		    <div class="col-md-4 span_8">
		       <div class="activity_box">


		       
                   <div class="activity-row"  ng-repeat="listkontri in kontri | filter:filterin">
	                 <div class="col-xs-1"><i class="fa fa-thumbs-up text-info icon_13"> </i>  </div>
	                 <div class="col-xs-3 activity-img"><img src='' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#"> {{listkontri.nama}}</a> has a password   {{listkontri.alamat}} </h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
	  			      
                    </div>



		          

		    </div>
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Kontributor</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
                        <li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
                        <li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
                        <li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
                        <li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
                        <li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
                        <li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
                    </ul>
                </div>
            </div>


            <div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">FAQ</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
                        <li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
                        <li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
                        <li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
                        <li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
                        <li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
                        <li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <div class="map_container"><div id="vmap" style="width: 100%; height: 400px;"></div></div>
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="<?php echo base_url();?>js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		<div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div>
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<link href="<?php echo base_url();?>css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url();?>js/jquery.vmap.js"></script>
<script src="<?php echo base_url();?>js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		     <input type="text" class="tiles-head form-control" placeholder="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}" ng-model="filterin">
         
		        <tr>
		        	<th>ID</th>
		           <th>JUDUL</th>
		          <th>KATEGORI</th>
                  <th>KONTRIBUTOR</th>
                  <th>EVENT</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr class="active" ng-repeat="item in newsall | filter:filterin">
		           <td>{{item.id_news}}</td>
		          <td>{{item.judul}}</td>
		          <td>{{item.kategori}}</td>
		          <td>{{item.kontributor}}</td>
                  <td>
                    <a class="btn btn-info btn-sm glyphicon glyphicon-edit" data-toggle="modal" data-target=".bs-example-modal-lg"  href="<?php echo base_url();?>webcontroller/edit/?>"{{item.id_news}}  ></a>
                    <a class="btn btn-danger btn-sm glyphicon glyphicon-remove"></a>
                    <a class=""></a>
                  </td>
		        </tr>
		        
		        
		      </tbody>
		    </table>
		   </div> 
	   </div>
	   <div class="col-md-4 span_4">
		 <div class="col_2">
		  <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head red1">
			        <div class="text-center">Orders</div>
			    </div>
			    <div class="tiles-body red">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tiles_blue1">
			        <div class="text-center">Peliharaan</div>
			    </div>
			    <div class="tiles-body blue1"><?php echo $jumlahPeliharaan;?></div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head fb1">
			        <div class="text-center">Hightlight</div>
			    </div>
			    <div class="tiles-body fb2"><?php echo $jumlahHighlight;?></div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tw1">
			        <div class="text-center">Twitter</div>
			    </div>
			    <div class="tiles-body tw2">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		   </div>
		  </div>
		  <div class="cloud">
			<div class="grid-date">
				<div class="date">
					<p class="date-in">New York</p>
					<span class="date-on">°F °C </span>
					<div class="clearfix"> </div>							
				</div>
				<h4>30°<i class="fa fa-cloud-upload"> </i></h4>
			</div>
			<p class="monday">Monday 10 July</p>
		  </div>
		</div>
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>




<form>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          sdfsf
         
    </div>
  </div>
</div>
 

</form>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <script>  
	var app = angular.module('api', []);
 
	app.controller('newsku', function($scope, $http){
	    $http.get("http://localhost/faunamedia/webcontroller/hlAdmin").success(function(resp){
		$scope.newsall = resp; 
		});

		$http.get("http://localhost/faunamedia/webcontroller/hlAdminKontributor").success(function(responn){
		$scope.kontri = responn; 
		});
	}); 
</script>
</body>
</html>
