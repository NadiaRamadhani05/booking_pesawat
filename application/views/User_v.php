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
      <div class="box-body">
        <a style="cursor: pointer;" onclick="href='<?php echo base_url('admin/tambahuser'); ?>'" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus"></span></a>
        <table id="example2" class="table table-bordered table-hover">
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Fullname</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        <?php
    $no = 1;
    foreach($user as $u){ 
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->username ?></td>
        <td><?php echo $u->password ?></td>
        <td><?php echo $u->fullname ?></td>
        <td><?php echo $u->level ?></td>
        <td>
          <a style="cursor: pointer;" onclick="href='<?php echo base_url(('crud/edit_user/'. $u->id)); ?>'" class="btn btn-warning btn-sm">
          <span class="glyphicon glyphicon-edit"></span></a>
          <a style="cursor: pointer;" onclick="href='<?php echo base_url(('crud/hapus_user/'. $u->id)); ?>'" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
      <?php } ?>
      </table> 
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'v_footeradmin.php' ?>