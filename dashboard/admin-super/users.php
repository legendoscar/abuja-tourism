
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include 'includes/navbar.php'; ?>
<?php include 'includes/menubar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	<h1 class='text-bold'>
		Users
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Users</li>
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
							<th>S/N</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Action</th>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
								<button class='btn btn-danger btn-sm ban btn-flat' data-id=''><i class='fa fa-remove'></i> Ban</button>
								<button class='btn btn-warning btn-sm unban btn-flat' data-id=''><i class='fa fa-check'></i> Unban</button>
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
<?php include 'includes/user_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

	$(document).on('click', '.ban', function(e){
		e.preventDefault();
		$('#ban').modal('show');
	});
	$(document).on('click', '.unban', function(e){
		e.preventDefault();
		$('#unban').modal('show');
	});
	
});

</script>
</body>
</html>
