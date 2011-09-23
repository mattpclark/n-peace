<?php
// Update variables
unset($form['field_country']['und']['#title']);
unset($form['application_organization']['und']['0']['value']['#title']);
unset($form['application_position']['und']['0']['value']['#title']);
unset($form['application_telephone']['und']['0']['value']['#title']);
unset($form['application_questions_experience']['und']['0']['value']['#title']);
unset($form['application_questions_org']['und']['0']['value']['#title']);
unset($form['application_questions_why']['und']['0']['value']['#title']);
unset($form['application_questions_usage']['und']['0']['value']['#title']);
unset($form['field_curriculum1']['und']['#title']);
unset($form['field_curriculum2']['und']['#title']);
unset($form['field_curriculum2_text']['und']['0']['#title']);
unset($form['field_curriculum2_text']['und']['0']['value']['#title']);
unset($form['field_curriculum3']['und']['#title']);
unset($form['field_curriculum3_text']['und']['0']['value']['#title']);
unset($form['field_curriculum3_text']['und']['#title']);
unset($form['application_questions_training']['und']['0']['value']['#title']);
unset($form['application_questions_alumini']['und']['#title']);
unset($form['application_questions_casestudy']['und']['#title']);
unset($form['application_personal_statement']['und']['0']['value']['#title']);
unset($form['application_personal_statement']['und']['0']['#title']);
unset($form['application_personal_statement']['und']['#title']);
unset($form['application_biography']['und']['0']['value']['#title']);
unset($form['application_biography']['und']['0']['#title']);
unset($form['application_biography']['und']['#title']);
$form['actions']['submit']['#value'] = 'Submit Application';
?>
  <script>
	$(document).ready(function() {
		$('#edit-field-casestudy-other-text-und-0-value-wrapper').hide();
		$('#edit-application-questions-casestudy-und-other').click (
		function() {
			if($('#edit-application-questions-casestudy-und-other:checked').val() !== undefined) {
				$('#edit-field-casestudy-other-text-und-0-value-wrapper').fadeIn('slow', function() {
				// Animation Complete	
				});	
			} else {
				$('#edit-field-casestudy-other-text-und-0-value-wrapper').fadeOut('slow', function() {
				// Animation Complete	
				});	
			};
		});
	});
</script>

<div id="application-form">
	<div id="application">
    <div id="instructions">
   	<p>Please ensure that you have read the <a href="/tot/terms">terms and conditions</a> carefully before completing your application.</p>
	<p>You are advised to draft your response in a text editor or word document, then copy and paste your information into this form. This will avoid losing information related to your application.</p>
    </div>
		<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Personal Details'); ?></span></legend>
		<div class="fieldset-wrapper">
			<p class="emphasized"><?php print t('Please provide your name and contact details.'); ?></p>
			<div id="section-name">
				<div class="float-form-element-left title"><?php print drupal_render($form['application_title']); ?></div>
				<div class="float-form-element-left name"><?php print drupal_render($form['application_name']); ?></div>
				<div class="float-form-element-left dob"><?php print drupal_render($form['application_dob']); ?></div>
			</div>
			<div class="clear-block"></div>
			<div id="section-address">
				<div class="float-form-element-left country"><?php print drupal_render($form['field_country']); ?></div>
				<div class="float-form-element-left organization"><?php print drupal_render($form['application_organization']); ?></div>
				<div class="float-form-element-left position"><?php print drupal_render($form['application_position']); ?></div>
			</div>
			<div class="clear-block"></div>
			<div id="section-details">
				<div class="float-form-element-left telephone"><?php print drupal_render($form['application_telephone']); ?></div>
				<div class="float-form-element-left e-mail"><?php print drupal_render($form['application_email']); ?></div>
                <div class="float-form-element-left e-mail"><?php print drupal_render($form['application_mail']); ?></div>
			</div>
		</div>
		</fieldset>
		<fieldset id="node_application_form_group_questions" class="fieldset group-application form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Questions'); ?></span></legend>
				<div class="fieldset-wrapper">
					<p class="emphasized"><?php print t('Please answer the following questions to help us assess you suitability to participate in the Training of Trainers programme.'); ?></p>
					<div id="section-questions">
						<div class="float-form-element-left experience"><?php print drupal_render($form['application_questions_experience']); ?></div>
						<div class="float-form-element-left organization"><?php print drupal_render($form['application_questions_org']); ?></div>
						<div class="float-form-element-left why"><?php print drupal_render($form['application_questions_why']); ?></div>
						<div class="float-form-element-left usage"><?php print drupal_render($form['application_questions_usage']); ?></div>
                        	<fieldset id="node_application_form_group_questions" class="fieldset group-application form-wrapper">
							<div class="fieldset-wrapper">
									<p class="emphasized"><?php print t('Below you will find a list of the eight chapters of the curriculum, please answer the following questions as they relate to your experience.'); ?></p>
									<div id="section-curriculum-sub-section">
                                        <div class="float-form-element-left curriculum1"><?php print drupal_render($form['field_curriculum1']); ?></div>
										<div class="float-form-element-left curriculum2"><?php print drupal_render($form['field_curriculum2']); ?></div>
                        				<div class="float-form-element-left curriculum2-text"><?php print drupal_render($form['field_curriculum2_text']); ?></div>
                                     	<div class="float-form-element-left curriculum3"><?php print drupal_render($form['field_curriculum3']); ?></div>
                        				<div class="float-form-element-left curriculum3-text"><?php print drupal_render($form['field_curriculum3_text']); ?></div>
									</div>
									<div class="clear-block"></div>
                             </div>
                             </fieldset>
						<div class="float-form-element-left training"><?php print drupal_render($form['application_questions_training']); ?></div>
						<div class="float-form-element-left alumini"><?php print drupal_render($form['application_questions_alumini']); ?></div>
                     	<div class="float-form-element-left casestudy"><?php print drupal_render($form['application_questions_casestudy']); ?>
                        <span><?php print drupal_render($form['field_casestudy_other_text']); ?></span>
                        </div>
					</div>
				</div>
		</fieldset>
		<fieldset id="node_application_form_group_supporting" class="fieldset group-application form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Supporting information'); ?></span></legend>
				<div class="fieldset-wrapper">
					<p class="emphasized"><?php print t('Please provide the following comments and supporting documents.'); ?></p>
					<div id="section-questions">
						<div class="float-form-element-left personal-statement"><?php print drupal_render($form['application_personal_statement']); ?></div>
						<div class="float-form-element-left biography"><?php print drupal_render($form['application_biography']); ?></div>
                        <div class="float-form-element-left resume"><?php print drupal_render($form['application_resume']); ?></div>
					</div>
				</div>
		</fieldset>
	</div>
    <div class="captcha"><?php print drupal_render($form['actions']['captcha']); ?></div>
    <div class="verify"><?php print drupal_render($form['agree-terms']); ?></div>
	<?php print drupal_render_children($form); ?>
</div>