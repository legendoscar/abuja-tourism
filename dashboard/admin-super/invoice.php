
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include 'includes/navbar.php'; ?>
<?php include 'includes/menubar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	<h1 class="text-bold">
		All Invoice
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Invoice</li>
	</ol>
	</section>
	<!-- Main content -->
	<section class="content skin-green">
	<div class="row" id="overflow">
		<div class="col-sm-12">
		<div class="box">
			<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<th>Hotel Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Invoice Number</th>
					<th>Date issued</th>
					<th>Payment status</th>
					<th>Amount</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
						<button class='btn btn-default btn-sm btn-flat' data-id=''><i class='fa fa-folder-open-o'></i> <a href="invoice.php">View</a></button>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
		</div>
	</div>
	</section>   
</div>
	
<?php include 'includes/footer.php'; ?>
<?php include 'includes/booking_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
