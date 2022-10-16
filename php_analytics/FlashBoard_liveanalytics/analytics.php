
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include_once("conn.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>GreenFlash Analytics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>FlashBoard</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>

							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Admin</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="chart-main-block">
       <div class="chart-first-line">
    	<div class="col-md-6 chart-blo-1">
    	   <div class="dygno">
    		     <h2>Doughnut</h2>
				
				    <canvas id="doughnut" height="300" width="470" style="width: 470px; height: 300px;"></canvas>
				
								<script>
									var doughnutData = [
									<?php
											$sql="select sum(opti_paths) as op, sum(non_opti_path) as nop from greenflash_real_db;";
											$result=mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result)){
												echo "{
													value:".$row['op'].",
													color:'#FC8213',
													},
													{
														value:".$row['nop'].",
														color:'#337AB7',
													},";
											}
									?>
									];
									new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
								</script>
			</div>	
    	 </div>
    	<div class="col-md-6 chart-blo-1">
    	    <div class="line-chart">
    		<h3>Line Chart</h3>
    		 <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"> </canvas>
                    <script>
                        var lineChartData = {
						labels : ["Mon","Tue","Wed","Thr","Fri","Sat","Sun"],
						datasets : [
							{
								fillColor : "rgba(252, 130, 19, 0.74)",
								strokeColor : "#FC8213",
								pointColor : "#FC8213",
								pointStrokeColor : "#fff",
								data : [
									<?php
											$sql="select opti_paths from greenflash_real_db group by Day;";
											$result=mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result)){
												echo $row['opti_paths'];
												echo ",";
											}
									?>
								]
							},
							{
								fillColor : "rgba(51, 122, 183, 0.71)",
								strokeColor : "#337AB7",
								pointColor : "#337AB7",
								pointStrokeColor : "#fff",
								data : [
									<?php
											$sql="select Non_opti_path from greenflash_real_db group by Day;";
											$result=mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result)){
												echo $row['Non_opti_path'];
												echo ",";
											}
									?>
								]
							}
						]
						
					};
                       new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);

                    </script>
    	    </div>
    	  </div>

		  <div class="col-md-6 chart-blo-1">
    	    <div class="line-chart">
    		<h3>Bar Chart</h3>
    		 <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"> </canvas>
                    <script>
                        var lineChartData = {
						labels : ["Distance","Time", "fuel used"],
						datasets : [
							{
								fillColor : "rgba(252, 130, 19, 0.74)",
								strokeColor : "#FC8213",
								pointColor : "#FC8213",
								pointStrokeColor : "#fff",
								data : [
									<?php
											$sql="select sum(Total_Distance) as td,sum(Total_time) as tt,sum(Fuel_used) as fu from greenflash_real_db;";
											$result=mysqli_query($link, $sql);
											$row=mysqli_fetch_array($result);
												echo $row['td'];
												echo ",";
												echo $row['tt'];
												echo ",";
												echo $row['fu'];
												echo ",";
												
										
									?>
								]
							}
													
						]
												
					};
                       new Chart(document.getElementById("bar").getContext("2d")).Bar(lineChartData);

                    </script>
    	    </div>
    	  </div>

    	  <div class="clearfix"> </div>
    	</div>


		
    	<!-- <div class="chart-second-line">
    	<div class="col-md-6 chart-blo-1">
    	    <div class="polararea">
    		<h3>Polar Chart</h3>
    		<canvas id="polarArea" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
				<script>
					var chartData = [
						{
							value : Math.random(),
							color: "#FC8213"
						},
						{
							value : Math.random(),
							color: "#68AE00"
						},
						{
							value : Math.random(),
							color: "#337AB7"
						},
						{
							value : Math.random(),
							color: "#FC8213"
						},
						{
							value : Math.random(),
							color: "#68AE00"
						},
						{
							value : Math.random(),
							color: "#337AB7"
						}
					];
					new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
				</script>   
			</div> 		
    	  </div>   	 -->
    	<!-- <div class="col-md-6 chart-blo-1">
    		<div class="chart-other">
	    		<h3>Pie</h3> 		
				<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
								<script>
									var pieData = [
										{
											value: 30,
											color:"#337AB7"
										},
										{
											value : 50,
											color : "#FC8213"
										},
										{
											value : 100,
											color : "#8BC34A"
										}
									
									];
									new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
								</script>
            </div>
    	</div> -->
    	<div class="clearfix"> </div>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2022 FlashBoard. All Rights Reserved | Designed by Team Green Flash</p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
<div class="sidebar-menu">
	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
		<!--<img id="logo" src="" alt="Logo"/>--> 
	</a> </div>		  
  <div class="menu">
	<ul id="menu" >
	  <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>

	  <li><a href="charts.php"><i class="fa fa-bar-chart"></i><span>Analytics</span></a></li>
	  </li>
	  <li><a href="ml.php"><i class="fa fa-cogs"></i><span>ML Model</span></span></a></li>
	  </li>
		<li><a href="maps.php"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
	  
	  
	  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		  <ul id="menu-academico-sub" >
			   <li id="menu-academico-boletim" ><a href="login.php">Login</a></li>
			<li id="menu-academico-avaliacoes" ><a href="signup.php">Sign Up</a></li>		           
		  </ul>
		</li>
	</ul>
  </div>
</div>
<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>					
