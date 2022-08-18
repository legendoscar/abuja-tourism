
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include 'includes/navbar.php'; ?>
<?php include 'includes/menubar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	<h1>
		Category
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Hotels</li>
		<li class="active">Category</li>
	</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
				</div>
				<div class="box-body">
				<table id="example1" class="table table-bordered">
					<thead>
					<th>Category</th>
					<th>Action</th>
					</thead>
					<tbody>
					<tr>
						<td>Budget</td>
						<td>...</td>
						<td>
						<button class='btn btn-success btn-sm edit btn-flat' data-id=''><i class='fa fa-edit'></i> Edit</button>
						<button class='btn btn-danger btn-sm delete btn-flat' data-id=''><i class='fa fa-trash'></i> Delete</button>
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
<?php include 'includes/category_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
$(document).on('click', '.edit', function(e){
	e.preventDefault();
	$('#edit').modal('show');
});

$(document).on('click', '.delete', function(e){
	e.preventDefault();
	$('#delete').modal('show');
});
});

</script>
</body>
</html>
