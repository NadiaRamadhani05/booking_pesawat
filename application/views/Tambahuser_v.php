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
    <h2>Tambah Data User</h2>
  </center>
  <div class="container">
  <form action="<?php echo base_url(). 'Crud/tambah_aksi_user'; ?>" method="post">
    <div class="form-group col-sm-11">
      <label for="username">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="form-group  col-sm-11">
      <label for="password">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <div class="form-group  col-sm-11">
      <label for="fullname">Fullname</label>
      <input type="text" class="form-control" placeholder="Fullname" name="fullname">
    </div>
    <div class="form-group  col-sm-11">
      <label for="level">Level</label>
       <select id="country1" onchange="change_country(this.value)" class="form-control" name="level">
            <option value="">Level</option>
            <option value="1">Admin</option>
            <option value="2">User</option>
          </select>
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
