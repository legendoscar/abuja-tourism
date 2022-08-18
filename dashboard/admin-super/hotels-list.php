
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
        Hotels List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Hotels</li>
        <li class="active">Hotels List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" id="overflow">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-flat"><i class="fa fa-plus"></i> Add Hotel</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <option value="">Budget</option>
                      <option value="">Luxury</option>
                      <option value="">Business</option>
                      <option value="">Romantic</option>
                      <option value="">Standard</option>
                      <option value="">Best Value</option>
                      <option value="">Classic</option>
                      <option value="">Family Friendly</option>
                      <option value="">Quiet</option>
                      <option value="">Charming</option>
                      <option value="">Trendy</option>
                      <option value="">Party</option>
                      <option value="">Villa</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>S/N</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>No. of Bookings</th>
                  <th>Date</th>
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
                      <button class='btn btn-success btn-sm edit btn-flat' data-id=''><i class='fa fa-edit'></i> Edit</button>
                      <button class='btn btn-danger btn-sm ban btn-flat' data-id=''><i class='fa fa-remove'></i> Ban</button>
                      <button class='btn btn-warning btn-sm unban btn-flat' data-id=''><i class='fa fa-check'></i> Unban</button>
                      <button class='btn btn-default btn-sm btn-flat ' data-id=''><i class="fa fa-folder-open-o"></i><a class="" href="single-list.php"> View</a></button>
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
  <?php include 'includes/hotel_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'hotels-list.php';
    }
    else{
      window.location = 'hotels-list.php?category='+value;
    }
  });

  // Edit
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
  });

  // Ban
  $(document).on('click', '.ban', function(e){
    e.preventDefault();
    $('#ban').modal('show');
  });

  // Unban
  $(document).on('click', '.unban', function(e){
    e.preventDefault();
    $('#unban').modal('show');
  });
});

</script>
</body>
</html>
