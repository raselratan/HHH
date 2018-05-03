<?php include 'code/session.php';
$id=$_SESSION['auto_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="files/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="files/css/style.css" rel="stylesheet" id="bootstrap-css">
	<script src="files/js/jquery-1.11.1.min.js"></script>
	<script src="files/js/bootstrap.min.js"></script>	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="files/css/style.css" rel="stylesheet" type="text/css">
	<link href="files/css/reg.css" rel="stylesheet" type="text/css">

</head>
	<body>
		<?php include 'include/navbar.php'; ?>	
		<?php
		if(isset($_GET['r_id']))  {
			$r_id = $_GET['r_id'];
			$sql="SELECT * FROM  renter_table where renter_id='$r_id'";
			$query=mysqli_query($con,$sql);

		?>


		
		<!-- One "tab" for each step in the form: -->
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
							<td><?php echo date_format(date_create($row['reg_date']),'D, d-M-Y');?></td>
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
				<a class="btn btn-info"href="view_renter.php">Back</a>
			</div>
			
		</div>
	</body>
</html>