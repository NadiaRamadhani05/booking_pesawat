<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <center>
    <h2>Tambah Data Rute</h2>
  </center>
  <div class="container">
  <form action="<?php echo base_url(). 'Crud/tambah_aksi'; ?>" method="post">
    <div class="form-group col-sm-11">
      <label for="from">From</label>
      <input type="text" class="form-control" name="from" placeholder="Departure City">
    </div>
    <div class="form-group  col-sm-11">
      <label for="to">To</label>
      <input type="text" class="form-control" name="to" placeholder="Destination City">
    </div>
    <div class="form-group  col-sm-11">
      <label for="depart">Departure Date</label>
      <input id="datepicker" name="depart" type="datetime-local" placeholder="Departure Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                  required="" class="form-control">
    </div>
    <div class="form-group  col-sm-11">
      <label for="price">Price</label>
       <input id="price" type="text" class="form-control" name="price" placeholder="Price">
    </div>
    <div class="box=footer col-sm-11">    
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
   </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  

  <?php require_once 'v_footeradmin.php' ?>
  
