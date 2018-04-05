<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>

<!-- Index.php -->
<div class="section-80">
	<div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-8">
          <div class="w-row">
            <div class="column w-col w-col-3"><img src="/wp-content/uploads/2018/03/jer3.jpg" width="105" class="image"></div>
            <div class="w-col w-col-9">
              <h1 class="jer_min_header">Jeremy Alexander</h1>
              <p class="paragraph-2">Thoughts on e-commerce, specifically courses, ebooks, memberships, SaaS, design and marketing.</p>
            </div>
          </div>
          <ul class="jer_blog_ul">
             <?php if ( have_posts() ) : ?>
        		<?php while ( have_posts() ) : the_post(); ?>
        		    <li>
           			    <?php the_title(sprintf('<a class="jer_link" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</li>'); ?>
                    </li>
		        <?php endwhile; ?>
		    <?php endif; ?>    		
		    
          </ul>
        </div>
        <div class="w-col w-col-4">
          <div class="jer_categories">
            <h3 class="jer_min_header">Categories</h3>
            <ul class="unordered-list">
              <?php get_sidebar(); ?>	            
            </ul>
          </div>
        </div>
        </div>
    </div>
</div>
<div class="section-80 jer_grey">
  <div class="w-container">
    <div class="jer_640">
      <div class="w-form">
        <form id="wf-form-jerementor_full_form" name="wf-form-jerementor_full_form" data-name="jerementor_full_form" method="post" action="https://www.getdrip.com/forms/33167202/submissions" drip-embedded-form="33167202"><input type="text" class="jer_text_field w-input" maxlength="256" name="fields[first_name]" data-name="Fields First Name" placeholder="Enter your first name" id="fields[first_name]" required=""><input type="email" class="jer_text_field w-input" maxlength="256" name="fields[email]" data-name="Fields Email" placeholder="Enter your email" id="fields[email]" required=""><input type="submit" value="Join Now For Weekly Articles" data-wait="Please wait..." class="jer_submit_btn w-button">
          <div class="text-block">We remove your e-mail after 8 weeks if there is no activity. Your first name and e-mail are the only personal data we store. You must be 18 or older to sign-up.</div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>