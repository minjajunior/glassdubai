<?php $this->load->view('includes/header'); ?>
<!-- Begin bread crumbs -->
<nav class="bread-crumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="bread-crumbs-list">
                    <li>
                        <a href="<?php echo base_url()?>">Home</a>
                        <i class="i md-18">chevron_right</i>
                    </li>
                    <li><a href="#!">Products</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav><!-- End bread crumbs -->

<!-- Begin main content -->
<div class="main-content">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="wrapp-page-title page-title-center">
                    <h1 class="page-title">Our Products</h1>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin servises item -->
                <div class="services-image-item">
                    <div class="services-image-item-card services-image-item-card-front">
                        <img src="<?php echo base_url('assets/images/aluminium-profile.jpg')?>" alt="Aluminium Profile">
                    </div>
                    <div class="services-image-item-card services-image-item-card-back">
                        <div class="services-image-item-card-center">
                            <h5 class="services-image-item-title">Aluminium Profile</h5>
                            <p class="services-image-item-desc">All sorts of Aluminium profile and Aluminium accessories. Available in wholesale and retail. </p>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="#" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13px" height="9px">
                                        <use xlink:href="img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End servises item -->
            </div>
            <div class="col-lg-4 col-md-6 col-12 item">
                <!-- Begin servises item -->
                <div class="services-image-item">
                    <div class="services-image-item-card services-image-item-card-front">
                        <img src="<?php echo base_url('assets/images/curtains.jpg')?>" alt="Curtains">
                    </div>
                    <div class="services-image-item-card services-image-item-card-back">
                        <div class="services-image-item-card-center">
                            <h5 class="services-image-item-title">Curtains</h5>
                            <p class="services-image-item-desc">We offer different types of curtains, blinds and curtain accessories based on our customers’ requirements.  Available in wholesale and retail.</p>
                            <div class="wrapp-btn-circl-arrow justify-content-center">
                                <a href="#" class="btn-circl-arrow btn-circl-arrow-white">
                                    <svg viewBox="0 0 13 9" width="13px" height="9px">
                                        <use xlink:href="img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End servises item -->
            </div>
        </div>
    </div>
</div><!-- End main content -->

<?php $this->load->view('includes/footer'); ?>