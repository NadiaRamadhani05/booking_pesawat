 <?php require_once 'Headeradmin_v.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Reservation</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Total Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Data Rute</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
       <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo site_url('admin');?>">
            <i class="fa fa-user"></i> 
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="<?php echo site_url('admin/customer');?>">
            <i class="fa fa-plane"></i>
            <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/rute');?>">
            <i class="fa fa-th"></i> <span>Rute</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('admin/transportation');?>">
            <i class="fa fa-user"></i> 
              <span>Transportation</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('admin/user');?>">
            <i class="fa fa-user"></i> 
              <span>User</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('login/logout');?>">
            <i class="fa fa-user"></i> 
              <span>Log Out</span>
          </a>
        </li>
        <a href="<?php echo site_url('admin/form_user');?>">
      </ul>
    </section>
      <!-- /.row -->
       <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form User
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <?php if($user != 0){
              foreach ($user as $u){
                $id = $u->id;
                $username = $u->username;
                $password = $u->password;
                $fullname = $u->fullname;
                $level = $u->level;
              }
            }else{
              $id = null;
              $username = null;
              $password = null;
              $fullname = null;
              $level = null;
            }
            ?>
            <form role="form" action="<?php echo base_url();?>index.php/crud/add_user" method="post">
              <div class="box-body">
                <div class="form-group">
                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="usernameHelp" placeholder="Enter Username" value="<?php echo $id?>">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" name="username" id="exampleInputUsername" placeholder="Enter Username" value="<?php echo $username?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password" value="<?php echo $password?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFullname">Fullname</label>
                  <input type="text" class="form-control" name="fullname" id="exampleInputFullname" placeholder="Enter Fullname" value="<?php echo $fullname?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputLevel">Level</label>
                  <input type="text" class="form-control" name="level" id="exampleInputLevel" placeholder="Enter Level" value="<?php echo $level?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Fullname</th>
                  <th>Level</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Admin</td>
                  <td>Admin</td>
                  <td>Admin</td>
                  <td>Admin</td>
                </tr>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <?php require_once  'Footeradmin_v.php' ?>

