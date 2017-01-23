<?php
  /*
  Template Name: Volunteer Skills
  */

  get_header();
  the_post();

  // get post ID
  $pid = get_the_ID();
?>

<?php if (get_post_thumbnail_id()): ?>
  <div class="comp-backdrop">
    <?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', '0', array('class' => '') ); ?>
  </div>
<?php endif; ?>

<article class="landing-page">
  <section class="container-gr">
    <div class="row">
      <div class="col-xs-12 col-lg-auto">
        <h1 class="page__title"><?php echo get_the_title(); ?></h1>        
        <?php
        if($_GET['thanks'] == 1):
	?>
          <h2>Thanks for your interest in volunteering! We'll reach out to you as soon as we can use your help.</h2>
	<?php
        else:
          ?>
	<div class="page__content wysiwyg">
          <?php the_content(); ?>
        </div>
          <form class="" action="https://api.justicedemocrats.com/volunteers" method="post">
            <input type="hidden" name="source" value="Justice Democrats Website">
            <input type="hidden" name="utmSource">
            <input type="hidden" name="utmMedium">
            <input type="hidden" name="utmCampaign">
            <input type="hidden" name="redirect" value="https://justicedemocrats.com/volunteer?thanks=1">
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <fieldset>
                  <h2 class="legend">About You</h2>
                  <div class="field">
                    <label for="vol-name" class="required">Your Name</label>
                    <input type="text" name="volunteerName" value="" id="vol-name" required>
                  </div>
                  <div class="field">
                    <label for="vol-email" class="required">Your Email</label>
                    <input type="email" name="volunteerEmail" value="" id="vol-email" required>
                  </div>
                  <div class="field">
                    <label for="vol-phone" class="required">Your Phone</label>
                    <input type="tel" name="volunteerPhone" value="" id="vol-phone" required>
                  </div>
                  <div class="field">
                    <label for="vol-city" class="required">Your City</label>
                    <input type="text" name="volunteerCity" value="" id="vol-city" required>
                  </div>
                  <div class="field">
                    <label for="vol-state" class="required">Your State</label>
                    <div class="custom-select">
                      <select class="" name="volunteerState" id="vol-state" required>
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                  </div>
                  <div class="field">
                    <label for="vol-zip" class="required">Your Zip</label>
                    <input type="text" name="volunteerZip" value="" id="vol-zip" required>
                  </div>
                  <div class="field">
                    <label for="volunteer-district" class="required">Your Congressional District</label>
                    <input type="text" name="volunteerDistrict" value="" id="volunteer-district">
                    <span class="field-help">a number or "AL" for at-large. <a href="http://www.house.gov/representatives/find/">Look up your district.</a></span>
                  </div>
                  <div class="field">
                    <label for="volunteer-facebook">Your Facebook</label>
                    <input type="text" name="volunteerFacebook" value="" id="volunteer-facebook">
                  </div>
                  <div class="field">
                    <label for="volunteer-twitter">Your Twitter</label>
                    <input type="text" name="volunteerTwitter" value="" id="volunteer-twitter">
                  </div>
                  <div class="field">
                    <label for="volunteer-linkedin">Your LinkedIn</label>
                    <input type="text" name="volunteerLinkedIn" value="" id="volunteer-linkedin">
                  </div>
                </fieldset>
              </div>
              <div class="col-xs-12 col-md-6">
                <fieldset>
                  <h2 class="legend">How can you help?</h2>
                  <div class="field">
                    <input type="checkbox" id="volunteer-programming" name="volunteerType" value=volunteer-programming""> <label for="volunteer-programming">Web development</label><br />
                     <input type="checkbox" id="volunteer-web-design" name="volunteerType" value=volunteer-web-design""> <label for="volunteer-web-design">Web design</label><br />
                     <input type="checkbox" id="volunteer-graphic-design" name="volunteerType" value=volunteer-graphic-design""> <label for="volunteer-graphic-design">Graphic design</label><br />
                     <input type="checkbox" id="volunteer-video" name="volunteerType" value=volunteer-video""> <label for="volunteer-video">Video production</label><br />
                     <input type="checkbox" id="volunteer-writing" name="volunteerType" value=volunteer-writing""> <label for="volunteer-writing">Writing/marketing</label><br />
                     <input type="checkbox" id="volunteer-press" name="volunteerType" value=volunteer-press""> <label for="volunteer-press">Provide press connections</label><br />
                     <input type="checkbox" id="volunteer-nationbuilder" name="volunteerType" value=volunteer-nationbuilder""> <label for="volunteer-nationbuilder">Nationbuilder administration</label><br />
                     <input type="checkbox" id="volunteer-data-entry" name="volunteerType" value=volunteer-data-entry""> <label for="volunteer-data-entry">Data entry</label><br />
                     <input type="checkbox" id="volunteer-call" name="volunteerType" value=volunteer-call""> <label for="volunteer-call">Call supporters</label><br />
                     <input type="checkbox" id="volunteer-helpdesk" name="volunteerType" value=volunteer-helpdesk""> <label for="volunteer-helpdesk">Answer helpdesk emails</label><br />
                     <input type="checkbox" id="volunteer-sharing" name="volunteerType" value=volunteer-sharing""> <label for="volunteer-sharing">Share social media posts</label><br />
                     <input type="checkbox" id="volunteer-printing" name="volunteerType" value=volunteer-printing""> <label for="volunteer-printing">Provide printing services</label><br />
                     <input type="checkbox" id="volunteer-travel" name="volunteerType" value=volunteer-travel""> <label for="volunteer-travel">Manage and book travel</label><br />
                     <input type="checkbox" id="volunteer-hr" name="volunteerType" value=volunteer-hr""> <label for="volunteer-hr">Operations and HR</label><br />
                     <input type="checkbox" id="volunteer-legal" name="volunteerType" value=volunteer-legal""> <label for="volunteer-legal">Legal</label><br />
                     <input type="checkbox" id="volunteer-manage-communities" name="volunteerType" value=volunteer-manage-communities""> <label for="volunteer-manage-communities">Manage online communities</label><br />
                     <input type="checkbox" id="volunteer-supporter-housing" name="volunteerType" value=volunteer-supporter-housing""> <label for="volunteer-supporter-housing"><strong>Can house supporters</strong></label><br />
                     <input type="checkbox" id="volunteer-event-host" name="volunteerType" value=volunteer-event-host""> <label for="volunteer-event-host"><strong>Can host events</strong></label><br />
                     <input type="checkbox" id="volunteer-venue" name="volunteerType" value=volunteer-venue""> <label for="volunteer-venue"><strong>Have access to free or low-cost venues</strong></label><br />
                  </div>
                </fieldset>
                <fieldset>
                  <h2 class="legend">Anything else we should know about you?</h2>
                  <div class="field">
                    <textarea id="volunteer-info" name="volunteerProfile" required></textarea>
                    <span class="field-help">Tell us about your work experience or anything else you think you could provide that would help.</span>
                  </div>
                </fieldset>
              </div>
            </div>
            <div class="row center-xs nomination-submit">
              <div class="col-xs-12">
                <button type="submit" class="button button--large button--full-mobile">Let me help!</button>
              </div>
            </div>
          </form>
          <?php
        endif;
        ?>
      </div>
    </div>
  </section>
</article>

<?php get_footer(); ?>
