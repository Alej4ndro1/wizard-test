<?php
function child_style() {
       // wp_enqueue_style( 'smartwizardcss', 'https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css', false, '', 'all' );
       // wp_enqueue_style( 'swarrows', 'https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css', false, '', 'all' );
       wp_enqueue_style( 'bs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, '4.6.0', 'all' );
       wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twenty-twenty-one-style'));


       // wp_enqueue_script( 'smartwizard', 'https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js', '', false );
       wp_deregister_script( 'jquery' );
       wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true );
       wp_enqueue_script( 'jquery' );
       wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '1.16.1', true );
       wp_enqueue_script( 'bsjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('popper'), '4.6.0', false );
 }
add_action( 'wp_enqueue_scripts', 'child_style' );

function wizard_shortcode() {
    return '
       <div class="container-wrapper">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
          <form class="form-steps forms-container">

            <!-- hidden inputs -->
              <input type="hidden" name="project_name" value="Test Work (Wizard)">
              <input type="hidden" name="admin_email" value="osobchuk1@gmail.com">
              <input type="hidden" name="form_subject" value="Wizard">
            <!-- hidden inputs -->

            <ul class="steps-menu">
              <!-- <li><span><img src="wp-content/themes/twentytwentyone-child/img/home.png" alt=""></span></li> -->
              <li  class="active"><span>Contact Info</span></li>
              <li><span>Quantity</span></li>
              <li><span>Price</span></li>
              <li><span>Done</span></li>
            </ul>

            <div class="form-content">

              <div class="form-content-body active">
                <h2>Contact Info</h2>
                <div class="form-group align-items-center row formpos">
                  <div class="col-lg-3 col-md-3">
                    <label for="inputName" class="col-form-label">Name</label>
                  </div>
                  <div class="col-lg-6 col-md-9">
                    <input type="text" class="form-control formsize"  name="name" id="inputName" placeholder="">
                  </div>
                </div>
                <div class="form-group align-items-center row formpos">
                  <div class="col-lg-3 col-md-3">
                    <label for="staticEmail" class="col-form-label ">Email <sup>required</sup></label>
                  </div>
                    <div class="col-lg-6 col-md-9">
                      <span class="error">Empty field Email</span>
                      <input type="text" class="form-control formsize" id="staticEmail" name="email">
                    </div>
                </div>
                <div class="form-group align-items-center row formpos">
                  <div class="col-lg-3 col-md-3">
                    <label for="inputPhone" class="col-form-label">Phone</label>
                  </div>
                  <div class="col-lg-6 col-md-9">
                    <input type="text" class="form-control formsize" id="inputPhone" name="phone" placeholder="">
                  </div>
                </div>

                  <div class="form-controls">
                    <button class="button cont-butt">Continue</button>
                  </div>
                </div>

                <div class="form-content-body">
                <h2>Quantity</h2>
                <div class="form-group align-items-center row formpos">
                  <div class="col-sm-3">
                    <label for="staticEmail" class="col-form-label ">Quantity <sup>required</sup></label>
                  </div>
                    <div class="col-sm-6">
                      <span class="error">Empty field Quantity</span>
                      <input type="number" class="form-control formsize" name="quant">
                    </div>
                </div>
                  <div class="form-controls">
                    <button class="button cont-butt">Continue</button>
                    <button class="button cont-butt back"><img src="wp-content/themes/twentytwentyone-child/img/Back.png" alt="" class="backimg"></button>
                  </div>
                </div>

                <div class="form-content-body">
                  <h2>Price</h2>
                  <div class="form-group align-items-center row formpos">
                    <div class="col-12">
                      <p class="price">$<span>10</span></p>
                      <input type="hidden" class="price-hidden" name="price">
                    </div>
                  </div>
                    <div class="form-controls">
                      <button class="button send-email">Send to email</button>
                      <button class="button cont-butt back"><img src="wp-content/themes/twentytwentyone-child/img/Back.png" alt="" class="backimg"></button>
                    </div>
                </div>

                <div class="form-content-body">
                  <h2>Done</h2>
                  <div class="form-group align-items-center row formpos">
                    <div class="col-12">
                      <p class="message message-done"><span>✅ Your email was send successfully</span></p>
                      <p class="message message-error"><span>⚠️ We cannot send you email right now. Use alternative way to contact us</span></p>
                    </div>
                  </div>
                    <div class="form-controls">
                      <button class="button send-again"><img src="wp-content/themes/twentytwentyone-child/img/Continue.png" alt="" class="btnstartimg"></button>
                    </div>
                </div>

            </div>

        </form>
      </div>
    </div>
  </div>
</div>
    ';
}

add_shortcode('wizardshortcode', 'wizard_shortcode');



?>