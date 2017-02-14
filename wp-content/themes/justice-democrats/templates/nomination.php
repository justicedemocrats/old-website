<?php
  /*
  Template Name: Nomination
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
      <div class="col-xs-24 col-lg-auto">
        <h1 class="page__title"><?php echo get_the_title(); ?></h1>        
        <?php
        if($_GET['thanks'] == 1):
	?>
          <h2>Thank you for your nomination! We'll be in touch. </h2>
	  <a class="button submit_another" href="/nominate">Submit Another</a>
	<?php
        else:
          ?>
	<div class="page__content wysiwyg">
          <?php the_content(); ?>
        </div>
          <form class="" action="https://api.justicedemocrats.com/nominations" method="post">
            <input type="hidden" name="source" value="Justice Democrats Website">
            <input type="hidden" name="utmSource">
            <input type="hidden" name="utmMedium">
            <input type="hidden" name="utmCampaign">
            <input type="hidden" name="redirect" value="https://justicedemocrats.com/nominate?thanks=1">
            <div class="row">
              <div class="col-xs-24 col-md-12">
                <fieldset>
                  <h2 class="legend">About You</h2>
                  <div class="field">
                    <label for="nom-name" class="required">Your Name</label>
                    <input type="text" name="nominatorName" value="" id="nom-name" required>
                  </div>
                  <div class="field">
                    <label for="nom-email" class="required">Your Email</label>
                    <input type="email" name="nominatorEmail" value="" id="nom-email" required>
                  </div>
                  <div class="field">
                    <label for="nom-phone" class="required">Your Phone</label>
                    <input type="tel" name="nominatorPhone" value="" id="nom-phone" required>
                  </div>
                </fieldset>

                <fieldset>
                  <h2 class="legend">About the Nominee</h2>
                  <div class="field">
                    <label for="nom-nominee-name" class="required">Nominee's Name</label>
                    <input type="text" name="nomineeName" value="" id="nom-nominee-name" required>
                  </div>
                  <div class="field">
                    <label for="nom-nominee-city" class="required">Nominee's City</label>
                    <input type="text" name="nomineeCity" value="" id="nom-nominee-city" required>
                  </div>
                  <div class="field">
                    <label for="nom-nominee-state" class="required">Nominee's State</label>
                    <div class="custom-select">
                      <select class="" name="nomineeState" id="nom-nominee-state" required>
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
                    <label for="nom-nominee-district">Nominee's Congressional District</label>
                    <input type="text" name="nomineeDistrict" value="" id="nom-nominee-district">
                    <span class="field-help">a number or "AL" for at-large. <a href="http://www.house.gov/representatives/find/">Look up their district.</a></span>
                  </div>
                </fieldset>
              </div>
              <div class="col-xs-24 col-md-12">
            		<fieldset>
                  <h2 class="legend">Why This Nominee?</h2>
                  <div class="field">
                    <label for="nom-speaking" class="required">Why would this person make a good candidate in your district?</label>
                    <textarea id="nom-speaking" name="nomineeProfile" required></textarea>
                    <span class="field-help">Tell us about their background, why they represent your district well, their service and leadership work, career, public speaking abilities, political views, and anything else you think we should know.</span>
                  </div>
                  <div class="field">
                    <label for="nom-nominee-twitter">Links about your candidate.</label>
                    <input type="text" name="nomineeLinks" value="" id="nom-nominee-twitter">
                    <span class="field-help">Include personal homepage, YouTube videos of them, etc.</span>
                  </div>
                </fieldset>
                <fieldset>
                  <h2 class="legend">Nominee's Contact</h2>
                  
                  <div class="field">
                    <label for="nom-nominee-email">Email</label>
                    <input type="email" name="nomineeEmail" value="" id="nom-nominee-email">
                  </div>
                  <div class="field">
                    <label for="nom-nominee-phone">Phone</label>
                    <input type="tel" name="nomineePhone" value="" id="nom-nominee-phone">
                  </div>
                  <div class="field">
                    <label for="nom-nominee-facebook">Facebook</label>
                    <input type="text" name="nomineeFacebook" value="" id="nom-nominee-facebook">
                    <span class="field-help">e.g. facebook.com/justicedemocrats</span>
                  </div>
                  <div class="field">
                    <label for="nom-nominee-linkedin">LinkedIn</label>
                    <input type="text" name="nomineeLinkedIn" value="" id="nom-nominee-linkedin">
                    <span class="field-help">e.g. linkedin.com/in/justice-democrats</span>
                  </div>
                  <div class="field">
                    <label for="nom-nominee-twitter">Twitter</label>
                    <input type="text" name="nomineeTwitter" value="" id="nom-nominee-twitter">
                    <span class="field-help">e.g. twitter.com/justicedemocrats</span>
                  </div>
                </fieldset>                
              </div>
            </div>
            <div class="row center-xs nomination-submit">
              <div class="col-xs-24">
                <button type="submit" class="button button--large button--full-mobile">Nominate this person!</button>
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
