

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
                            <h3>Cooking Classes</h3>
                            <p>Cooking Classes are our speciallty (40€ / person)</p>
                        </div>
                    </div>
                </div>
        <div class="row">
          <div id="lightgallery">
              <a href="bahia/class/28.jpg" id='sizer'>
                <img src="bahia/class/28.jpg">
              </a>
             
              <a href="bahia/class/31.jpg" id='sizer'>
                <img src="bahia/class/31.jpg">
              </a>
 
              <a href="bahia/class/33.jpg" id='sizer'>
                <img src="bahia/class/33.jpg">
              </a>
  
              <a href="bahia/class/29.jpg" id='sizer'>
                <img src="bahia/class/29.jpg">
              </a>

          </div>
        </div>
      </div>
</section>

<script>
    lightGallery(document.getElementById('lightgallery'));

</script>

<?php include 'bottom.php'; ?>