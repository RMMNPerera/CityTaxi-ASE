<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
  <style>
     body{
          width:calc(100%);
          height:calc(100%);
          background-image:url('');
          background-repeat: no-repeat;
          background-size:cover;
      }
      #logo-img{
          /* width:15em;
          height:15em; */
          object-fit:scale-down;
          object-position:center center;
      }
  </style>
<div class="login-box">
  <!-- /.login-logo -->
  <center><img src="" alt="System Logo" id="logo-img"></center>
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
            <a href="" style="text-decoration:none;">Back</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-sm btn-flat btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>