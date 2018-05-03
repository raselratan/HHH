<?php include('process/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ATC tech</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML1 Shim and Respond.js IE8 support of HTML1 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html1shiv/3.7.0/html1shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <?php include ('include/navbar.php'); ?>
            <!-- Navigation -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Criminal Case</a>
                        </li>
						<?php 
						
						 $rand = $_SESSION['rand'];
						 $id = $_SESSION['id'];
					?>
                        <li class="breadcrumb-item active">Gr Case Data</li>
                    </ol>
                    <div class="container-fluid">
                        <h2 style="text-align:center;">Client And Case Data</h2>
						<?php 
                                 $rand = $_SESSION['rand'];
								 $id = $_SESSION['id'];
								$counter = 0;						
                                          $sql1= mysqli_query($con,"SELECT * FROM `case_client` where rand = '$rand' AND admin = '$id' LIMIT 1");
                                        	while ($row1 = mysqli_fetch_assoc($sql1)) {
                                		
                                ?>
								<p><b>Case Date Entry Time : </b><?php echo $row1['curr_date'],' ',$row1['time'] ;?></p>
								<p><b>Case Type : </b><?php echo $row1['type'] ;?> </p>
											<?php } ?>
                                <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%;">Serial</th>
                                    <th>Clients</th>
                                    <th style="">C/O</th>
                                    <th style="">Address</th>
                                    <th style="">Contact</th>
                                </tr>
                            </thead>
                            <?php 
                                $counter = 0;						
                                         $sql= mysqli_query($con,"SELECT * FROM `case_client` where rand = '$rand' AND admin = '$id'");
                                             while ($row = mysqli_fetch_assoc($sql)) {
                          
                                ?>
                            <tbody>
                                <tr>
                                    <td><?php echo ++$counter ; ?></td>
                                    <td><?php echo $row['cname1'] ; ?></td>
                                    <td><?php echo $row['co1']; ?></td>
                                    <td><?php echo $row['address1']; ?></td>
									<td><?php echo $row['contact1']; } ?></td>
                                </tr>
                            </tbody>
                        </table>
						
						 <?php 			
                            
							 $rand = $_SESSION['rand'];
							 $id = $_SESSION['id'];
								$sql= mysqli_query($con,"SELECT * FROM `civil_case_details` where rand = '$rand' AND admin = '$id' ");
                               while ($row = mysqli_fetch_assoc($sql)) {
							
						  
						  ?>
						  <div class="container-fluid">
						  
							<div class="row">
							<h3 style="text-align:center;">Case Details</h3>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<h4><b>Assistant Judge</b></h4>
									<p><b>Suit Name : </b><?php echo $row['asname']; ?></p>
									<p><b>Court No : </b><?php echo $row['ascno']; ?></p>
								</div>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<h4><b>Senior Assistant Judge</b></h4>
									<p><b>Suit Name : </b><?php echo $row['sasname']; ?></p>
									<p><b>Court No : </b><?php echo $row['sacno']; ?></p>
								</div>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<h4><b>Joint District Judge</b></h4>
									<p><b>Suit Name : </b><?php echo $row['jsname']; ?></p>
									<p><b>Court No : </b><?php echo $row['jcno']; ?></p>
								</div>
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<h4><b>District Judge</b></h4>
									<p><b>Suit Name : </b><?php echo $row['dsname']; ?></p>
									<p><b>Court No: </b><?php echo $row['dcno']; ?></p>
								</div>
								
							</div>
							
							
							<div class="row">
							<h3 style="text-align:center;">High Court</h3>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<p><b>Date Of Filing : </b><?php echo $row['datef']; ?></p>
									<p><b>Judge Name : </b><?php echo $row['judgename']; ?></p>
								</div>


								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<p><b>Entry No : </b><?php echo $row['entryno']; ?></p>
									<p><b>Next Step : </b><?php echo $row['nxtstp']; ?></p>
								</div>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<p><b>Case No : </b><?php echo $row['caseno']; ?></p>
									<p><b>Arising Out Of : </b><?php echo $row['arising_out']; ?></p>
								</div>
								
								
								<div class="col-md-3 col-sm-12 col-lg-3 well">
									<p><b>Court No : </b><?php echo $row['crtno']; ?></p>
									<p><b>Order Date : </b><?php echo $row['ordrdate']; ?></p>
								</div>
								
							</div>	
						  </div>
						  <?php } ?>
						
                    </div>
                </div>
            </div>
        </div>
        </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morrisjs/morris.min.js"></script>
        <script src="data/morris-data.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>
    </body>
</html>