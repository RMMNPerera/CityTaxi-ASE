<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<body>
<div class="login-box">
  <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo" id="logo-img"></center>
  <div class="clear-fix my-2"></div>
  <div class="card card-outline card-purple">
    <div class="card-header text-center">
      <a href="./" class="h4 text-decoration-none"><b>Driver Login Panel</b></a>
    </div>
    <div class="card-body">
      
      <form id="dlogin-frm" action="" method="post">
        <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" name="reg_code" placeholder="Reg.Code">
          
        </div>
        <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password">
          
        </div>
        <div class="row align-items-center">
          <div class="col-8">
            <a href="<?php echo base_url ?>" style="text-decoration:none;">Back</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-sm btn-flat btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</body>
</html>