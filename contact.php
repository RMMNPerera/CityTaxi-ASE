 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-center justify-content-center w-100">
        <div class="text-center text-white w-100">
        <h1 class="display-4 fw-bolder">Contact Us</h1>
            <p class="lead fw-normal text-white-50 mb-0">Any Emergancy contact</p>
        </div>
    </div>
</header> 
<!-- Section-->
<section class="py-5">
    <div class="container">
        <div class="card shadow card-outline card-purple rounded-0">
            <div class="card-body">
                <?php include 'contact.html' ?>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>