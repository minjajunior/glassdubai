<?php $this->load->view('includes/header') ?>

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
                        <li><a href="#!">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row content-items">
                <div class="col-12">
                    <div class="wrapp-page-title">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 content-item">
                    <div class="contact-info section-bg">
                        <h3>Get in Touch</h3>
                        <ul class="contact-list">
                            <li>
                                <i class="i md-22">location_on</i>
                                <div class="footer-contact-info">
                                    <a href="#">
                                        Mbezi Mwisho (Morogoro Road)<br>
                                        Makabe road,<br>
                                        Madukani area
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="i md-22 footer-contact-tel">smartphone</i>
                                <div class="footer-contact-info">
                                    <a href="tel:++255718233331" class="formingHrefTel">+255 718 233331</a>
                                </div>
                            </li>
                            <li>
                                <i class="i md-22 footer-contact-email">email</i>
                                <div class="footer-contact-info">
                                    <a href="mailto:mail@example.com">info@glassdubaialuminium.co.tz</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-7 content-item">
                    <?php
                    $attributes = array('class' => 'contact-form contact-form-padding');
                    echo form_open('contact', $attributes);
                    ?>
                        <div class="row gutters-20">
                            <div class="col-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Your Name</label>
                                    <input type="text" class="form-field-input" name="name" value="" autocomplete="off" required="required" id="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-phone" class="form-field-label">Your Phone</label>
                                    <input type="tel" class="form-field-input mask-phone" name="phone" value="" autocomplete="off" required="required" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">Your Email</label>
                                    <input type="email" class="form-field-input" name="email" value="" autocomplete="off" required="required" id="contact-email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="contact-message" class="form-field-label">Your Message</label>
                                    <textarea name="message" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-w240 ripple">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

<?php $this->load->view('includes/footer') ?>
