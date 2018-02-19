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
      
      <div class="box-body">
        <a style="cursor: pointer;" onclick="href='<?php echo base_url('admin/tambahrute'); ?>'" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus"></span></a>
    <table id="example2" class="table table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>From</th>
      <th>To</th>
      <th>Departure Date</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach($rute as $r){ 
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $r->rute_from ?></td>
        <td><?php echo $r->rute_to ?></td>
        <td><?php echo $r->depart_on ?></td>
        <td><?php echo $r->price ?></td>
        <td>
          <a style="cursor: pointer;" onclick="href='<?php echo base_url(('crud/edit_rute/'. $r->ruteid)); ?>'" class="btn btn-warning btn-sm">
          <span class="glyphicon glyphicon-edit"></span></a>
          <a style="cursor: pointer;" onclick="href='<?php echo base_url(('crud/hapus/'. $r->ruteid)); ?>'" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
      <?php } ?>
      </table>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once 'v_footeradmin.php' ?>
