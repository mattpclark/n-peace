<?php
	$form['group_nominee']['field_title']['und']['#options']['_none'] = '- Select -';
	$form['group_nominee']['field_country']['und']['#options']['_none'] = '- Select -';
?>
<div id="nomination-form">
	<div id="nominee">
		<fieldset id="node_nomination_form_group_nominee" class="fieldset group-nominee form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Nominee/Candidate'); ?></span></legend>
		<div class="fieldset-wrapper">
			<p class="emphasized"><?php print t('Please enter the details of the person you would like to nominate for an N-Peace award.'); ?></p>
			<div id="section-name">
				<div class="float-form-element-left title"><?php print drupal_render($form['field_nominee_title']); ?></div>
				<div class="float-form-element-left firstname"><?php print drupal_render($form['field_nominee_firstname']); ?></div>
				<div class="float-form-element-left surname"><?php print drupal_render($form['field_nominee_surname']); ?></div>
			</div>
			<div class="clear-block"></div>
			<div id="section-address">
				<div class="float-form-element-left country"><?php print drupal_render($form['field_nominee_country']); ?></div>
				<div class="float-form-element-left email"><?php print drupal_render($form['field_nominee_email']); ?></div>
				<div class="float-form-element-left telephone"><?php print drupal_render($form['field_nominee_telephone']); ?></div>
			</div>
			<div class="clear-block"></div>
			<div id="section-details">
				<div class="float-form-element-left photo"><?php print drupal_render($form['field_nominee_photo']); ?></div>
				<div class="float-form-element-left about"><?php print drupal_render($form['field_nominee_about']); ?></div>
				<div class="clear-block"></div>
				<div class="attachment"><?php print drupal_render($form['field_nominee_docs']); ?></div>
			</div>
		</div>
		</fieldset>
		<fieldset id="node_nomination_form_group_nominator" class="fieldset group-nominator form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Nominator'); ?></span></legend>
				<div class="fieldset-wrapper">
					<p class="emphasized"><?php print t('Please enter your own details in case we need to contact you to verify details about your nomination.'); ?></p>
					<div id="section-nominator-name">
						<div class="float-form-element-left title"><?php print drupal_render($form['field_nominator_title']); ?></div>
						<div class="float-form-element-left firstname"><?php print drupal_render($form['field_nominator_firstname']); ?></div>
						<div class="float-form-element-left surname"><?php print drupal_render($form['field_nominator_surname']); ?></div>
					</div>
					<div class="clear-block"></div>
					<div id="section-nominator-name">
						<div class="float-form-element-left country"><?php print drupal_render($form['field_nominator_country']); ?></div>
						<div class="float-form-element-left email"><?php print drupal_render($form['field_nominator_email']); ?></div>
						<div class="float-form-element-left telephone"><?php print drupal_render($form['field_nominator_telephone']); ?></div>
					</div>
					<div class="clear-block"></div>
					<div id="section-outreach">
						<div class="float-form-element-left heard-about-npeace"><?php print drupal_render($form['field_info_source']); ?></div>
						<div class="float-form-element-left know-more"><?php print drupal_render($form['field_know_more']); ?></div>
					</div>
				</div>
		</fieldset>
		<fieldset id="node_nomination_form_group_verify" class="fieldset group-verify form-wrapper">
			<legend><span class="fieldset-legend">Verification</span></legend>
				<div class="fieldset-wrapper">
					<p class="emphasized"><?php print t('Please tick the boxes below to confirm you have read, understood and complied with the terms and conditions of the n-peace awards programme.'); ?></p>
					<div id="accept-terms">
						<div><?php print drupal_render($form['informed-nominee']); ?></div>
						<div><?php print drupal_render($form['agree-terms']); ?></div>
					</div>
					<div id="section-captcha">
						<div><?php print drupal_render($form['actions']['captcha']); ?></div>
					</div>
					<div class="clear-block"></div>
					<div id="section-nominator-name">
						<div class="float-form-element-left country"><?php print drupal_render($form['group_nominator']['field_nominator_country']); ?></div>
						<div class="float-form-element-left email"><?php print drupal_render($form['group_nominator']['field_nominator_email']); ?></div>
						<div class="float-form-element-left telephone"><?php print drupal_render($form['group_nominator']['field_nominator_telephone']); ?></div>
					</div>
					<div class="clear-block"></div>
					<div id="section-outreach">
						<div class="float-form-element-left heard-about-npeace"><?php print drupal_render($form['group_nominator']['field_heard_about_npeace']); ?></div>
						<div class="float-form-element-left know-more"><?php print drupal_render($form['group_nominator']['field_know_more']); ?></div>
					</div>
				</div>
		</fieldset>
	</div>
	<?php unset($form['group_nominee']); ?>
	<?php unset($form['group_nominator']); ?>
	<?php print drupal_render_children($form); ?>
</div>