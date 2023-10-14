<?= $this->extend('frontend/header');?>
<?= $this->section('content');?>  
  
  <!-- gallery section -->
  <div class="gallery_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        <div class=" col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g1.jpg" alt=""> 
            <a href="<?= base_url() ?>assetF/images/g1.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g2.jpg" alt="">
            <a href="<?= base_url() ?>assetF/images/g2.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g3.jpg" alt="">
            <a href="<?= base_url() ?>assetF/images/g3.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g4.jpg" alt="">
            <a href="<?= base_url() ?>assetF/images/g4.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g5.jpg" alt="">
            <a href="<?= base_url() ?>assetF/images/g5.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="<?= base_url() ?>assetF/images/g6.jpg" alt="">
            <a href="<?= base_url() ?>assetF/images/g6.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </div>
  <!-- end gallery section -->

<?= $this->include('frontend/footer');?>
<?= $this->endSection('content');?>