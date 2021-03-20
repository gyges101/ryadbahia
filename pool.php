

<?php include 'navbar.php'; ?>
<!-- MAin menu ends -->

<style>
#sizer {
  display: inline-block;
  max-width:20%;
  max-height: 40%
}

.cont {


}
</style>

<!-- Start welcome section -->
<section class="welcome-section-5 sec-padding">
    <div class="container-fluid" style="text-align:center;">
    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Swimming Pool</h3>
                        </div>
                    </div>
                </div>
        <div class="row">
          <div id="lightgallery">
              
             
              <a href="bahia/pool/4.jpg" id='sizer'>
                <img src="bahia/pool/4.jpg">
              </a>
              <a href="bahia/pool/5.jpg" id='sizer'>
                <img src="bahia/pool/5.jpg">
              </a>
              <a href="bahia/pool/20.jpg" id='sizer'>
                <img src="bahia/pool/20.jpg">
              </a>
              <a href="bahia/pool/27.jpg" id='sizer'>
                <img src="bahia/pool/27.jpg">
              </a>
             

          </div>
        </div>
      </div>
</section>

<script>
    lightGallery(document.getElementById('lightgallery'));

</script>

<?php include 'bottom.php'; ?>