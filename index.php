<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<body>
<?php $page = isset($_GET['p']) ? $_GET['p'] : 'home';  ?>
<?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
<?php endif;?>
<?php 
    if(!file_exists($page.".php") && !is_dir($page)){
        include '404.html';
    }else{
      if(is_dir($page))
        include $page.'/index.php';
      else
        include $page.'.php';
    }
?>
<?php require_once('inc/footer.php') ?>
<link rel="stylesheet" href="assets/css/popup.css">


<div class="modal fade" id="uni_modal" role='dialog'>
  <div class="modal-dialog   rounded-0 modal-md modal-dialog-centered" role="document">
    <div class="modal-content  rounded-0">
      <div class="modal-header">
      <h5 class="modal-title"></h5>
    </div>
    <div class="modal-body">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
    </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog  rounded-0 modal-full-height  modal-md" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
<!--Popup call box -->
<!-- A button to open the popup form -->
<button class="open-button" onclick="openForm()" ><img src="images/icon/telephone.png" alt="#" /></button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h4>City Taxi Call Center</h4>

    <label for=""><b>Inquire</b><a> -</a> <span>0117536942</span></label>
  
    <label for=""><b>Service</b><a> -</a> <span>0115643256</span></label>
    

   
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script src="assets/js/popup.js"></script>
</body>
</html>