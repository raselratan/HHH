<?php 
include 'code/session.php';
$tname=$_SESSION['name'];
	//$i="IQBAL";

?>
<!DOCTYPE html> 
<html>
<head>
	<link href="../user/files/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../user/files/css/style.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="../user/files/datatable/data_table.css">
	<script src="../user/files/js/jquery-1.11.1.min.js"></script>		
	<script src="../user/files/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="../user/files/datatable/jsDatatable.js"></script>
	<!------ Include the above in your HEAD tag ---------->	

	<title>Home Management System</title>
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">HMS</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav pull-right" >
					<li><a href="" style="color: blue;"><?php echo $tname; ?></a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<?php
	if(isset($_GET['r_id']) && isset($_GET['o_id']))  {
		$r_id = $_GET['r_id'];
		$o_id=$_GET['o_id'];
		$sql="SELECT * FROM  renter_table where renter_id='$r_id' and owner_id='$o_id'";
		$query=mysqli_query($con,$sql);

		?>	
		<div class="container">
			Renter List:
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Name </th>
								<th>Father Name </th>
								<th>Mother Name </th>
								<th>Occupation </th>
								<th>Qualification </th>
								<th>Marital Status </th>
								<th>Nid</th>
								<th>Phone No</th>
								<th>Flat No</th>
								<th>Block</th>
								<th>Entry Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($row=mysqli_fetch_assoc($query)){?>
							<tr>
								<td><?php echo $row['owName'];?></td>
								<td><?php echo $row['fatName'];?></td>
								<td><?php echo $row['motName'];?></td>
								<td><?php echo $row['occupation'];?></td>
								<td><?php echo $row['qualification'];?></td>
								<td><?php echo $row['marital_status'];?></td>
								<td><?php echo $row['nid'];?></td>
								<td><?php echo $row['cell'];?></td>
								<td><?php echo $row['floorNum'];?></td>
								<td><?php echo $row['block'];?></td>
								<td><?php echo $row['reg_date'];?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
					<h5> Family Members</h5>
					<table class="table">
						<thead>
							<tr>
								<th>Name </th>
								<th>Relation</th>
								<th>NID No</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql="SELECT * FROM   renter_family_table where renter_id='$r_id'";
							$query=mysqli_query($con,$sql);
							while($row=mysqli_fetch_assoc($query)){?>
							<tr>
								<td><?php echo $row['fmlyname'];?></td>
								<td><?php echo $row['relation'];?></td>
								<td><?php echo $row['relnid'];?></td>
							</tr>
							<?php }}?>
						</tbody>
					</table>
					<a class="btn btn-info"href="view_details.php?r_id=<?php echo $o_id; ?>">Back</a>
				</div>
				
			</div>
		</div>
		<script>
			$(document).ready( function () {
				$('#short').DataTable();
			} );
		</script>	    	
	</body>
	</html>	