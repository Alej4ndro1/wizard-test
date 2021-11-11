<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header alignwide">
      <?php get_template_part( 'template-parts/header/entry-header' ); ?>
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
  <?php elseif ( has_post_thumbnail() ) : ?>
    <header class="entry-header alignwide">
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>

  <div>
    <?php
    the_content();

    wp_link_pages(
      array(
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
        'after'    => '</nav>',
        /* translators: %: Page number. */
        'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
      )
    );
    ?>
  </div>

  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer default-max-width">
      <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post. Only visible to screen readers. */
          esc_html__( 'Edit %s', 'twentytwentyone' ),
          '<span class="screen-reader-text">' . get_the_title() . '</span>'
        ),
        '<span class="edit-link">',
        '</span>'
      );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->



<script>

   $('input[name=email]').click(function(){
      $(this).siblings('.error').removeClass('active');
    })

  $('.cont-butt').click(function(event){

    event.preventDefault();
    let formContentBody = $(this).parent().parent();
    if( formContentBody.has('input[name=email]').length > 0 ) {
      if( formContentBody.find('input[name=email]').val().length == 0 ) {
        formContentBody.find('.error').addClass('active');
        return false;
      }
      else {
        formContentBody.fadeOut();
        setTimeout(function(){
          formContentBody.removeClass('active');
          formContentBody.next().fadeIn().addClass('active');
        }, 500)
        $('.steps-menu li').removeClass('active').eq(formContentBody.index()+1).addClass('active');
      }
    } else {
       if( formContentBody.has('input[name=quant]').length > 0 ) {
         if( formContentBody.find('input[name=quant]').val().length == 0 ) {
          formContentBody.find('.error').addClass('active');
          return false;
       } else {
        if (formContentBody.find('input[name=quant]').val() > 1000) {
          formContentBody.find('input[name=quant]').val(1000);
        } else {
          if (formContentBody.find('input[name=quant]').val() >= 1 && formContentBody.find('input[name=quant]').val() <= 10) {
            $('.price span').text(10);
            $('.price-hidden').val(10);
          } else if ( formContentBody.find('input[name=quant]').val() >= 11 && formContentBody.find('input[name=quant]').val() <= 100 ) {
            $('.price span').text(100);
            $('.price-hidden').val(100);
          } else if ( formContentBody.find('input[name=quant]').val() >= 101 && formContentBody.find('input[name=quant]').val() <= 1000 ) {
            $('.price span').text(1000);
            $('.price-hidden').val(1000);
          } else {
            return false;
          }
          formContentBody.fadeOut();
          setTimeout(function(){
            formContentBody.removeClass('active');
            formContentBody.next().fadeIn().addClass('active');
          }, 500)
          $('.steps-menu li').removeClass('active').eq(formContentBody.index()+1).addClass('active');
        }
       }
     }
    }
    
  });

  $('.back').click(function(event){
    event.preventDefault();
    let formContentBody = $(this).parent().parent();
    formContentBody.fadeOut();
    setTimeout(function(){
      formContentBody.removeClass('active');
      formContentBody.prev().fadeIn().addClass('active');
    }, 500)
    $('.steps-menu li').removeClass('active').eq(formContentBody.index()-1).addClass('active'); //Что такое eq?
  })

  $('.send-email').click(function(event){
    event.preventDefault();
    let form = $('.form-steps');

    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: form.serialize()
    }).done(function(){
        $('.message-done').addClass('active');
        form.trigger('reset');
    }).fail(function(){
        $('.message-error').addClass('active');
        form.trigger('reset');
    });

    let formContentBody = $(this).parent().parent();
    formContentBody.fadeOut();
    setTimeout(function(){
      formContentBody.removeClass('active');
      formContentBody.next().fadeIn().addClass('active');
    }, 500)
    $('.steps-menu li').removeClass('active').eq(formContentBody.index()+1).addClass('active');

  })

  $('.send-again').click(function(event){
    event.preventDefault();
    $('.steps-menu li').removeClass('active').first().addClass('active');
    let formContentBody = $(this).parent().parent();
    formContentBody.fadeOut();
    $('.form-content .form-content-body').first().fadeIn().addClass('active');
  })


</script>