<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Personal Details'); ?></span></legend>
<div class="field field-name-full-name field-type-list-text field-label-inline clearfix">
	<div class="field-label">Full Name:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_title['und']['0']['value'] ?> <?php print $node->application_name['und']['0']['value'] ?></div>
	</div>
</div>
<div class="field field-name-dob field-type-list-text field-label-inline clearfix">
	<div class="field-label">Date of Birth:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_dob['und']['0']['value']; ?></div>
	</div>
</div>
<div class="field field-name-country field-type-list-text field-label-inline clearfix">
	<div class="field-label">Country:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->field_country['und']['0']['value']; ?></div>
	</div>
</div>
<div class="field field-name-organization field-type-list-text field-label-inline clearfix">
	<div class="field-label">Current organization:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_organization['und']['0']['value']; ?></div>
	</div>
</div>
<div class="field field-name-position field-type-list-text field-label-inline clearfix">
	<div class="field-label">Current position:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_position['und']['0']['value']; ?></div>
	</div>
</div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Contact Details'); ?></span></legend>
<div class="field field-name-telephone field-type-list-text field-label-inline clearfix">
	<div class="field-label">Telephone Number:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_telephone['und']['0']['value']; ?></div>
	</div>
</div>
<div class="field field-name-email field-type-list-text field-label-inline clearfix">
	<div class="field-label">Email Address:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><a href="mailto:<?php print $node->application_email['und']['0']['email']; ?>"><?php print $node->application_email['und']['0']['email']; ?></a></div>
	</div>
</div>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
	<div class="field-label">Postal Address:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_mail['und']['0']['value']; ?></div>
	</div>
</div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 1'); ?></span></legend>
<p><strong>Please describe your experience in designing and leading trainings related to gender and/or conflict resolution/peace building (max 250 words).</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_experience['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 2'); ?></span></legend>
<p><strong>What organizations have you worked with to implement your trainings? Do you have an organization or an institution through which you can replicate and localize training? Please include any details about your current organization and the position you occupy (max 500 words).</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_org['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 3'); ?></span></legend>
<p><strong>Why would you like to participate in this Training of Trainers? What are your expectations? (max 250 words).</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_why['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 4'); ?></span></legend>
<p><strong>How do you intend to use elements of this training in your own country? (max 250 words).</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_usage['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 5'); ?></span></legend>
<p><strong>Below you will find a list of the eight chapters of the curriculum, please answer the following questions as they relate to your experience.</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<p>5a: Which of these courses is most relevant to your current work?</p>
		<ul>
		<?php foreach ($node->field_curriculum1['und'] as $index=>$value) {
			print '<li />'.$node->field_curriculum1['und'][$index]['value'];
		}
		?>
        </ul>
</div>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<p>5b: Which of these course topics have you covered in your past trainings? Please provide additional details in the text box below.</p>
		<ul>
		<?php foreach ($node->field_curriculum2['und'] as $index=>$value) {
			print '<li />'.$node->field_curriculum2['und'][$index]['value'];
		}
		?>
        </ul>
        <?php print $node->field_curriculum2_text['und']['0']['value']; ?>
</div>

<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<p>5c: Which of the course topics would be most useful in expanding the outreach of your work? Please provide details in the text box below.</p>
		<ul>
		<?php foreach ($node->field_curriculum3['en'] as $index=>$value) {
			print '<li />'.$node->field_curriculum3['en'][$index]['value'];
		}
		?>
        </ul>
        <?php print $node->field_curriculum3_text['en']['0']['value']; ?>
</div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 6'); ?></span></legend>
<p><strong>Please provide a brief outline of your ideas for how you could organize a local level training and/or consultation using some of the elements you will learn in the regional ToT programme. Note: The local level training may be conducted with other trainers from your country and some support may be provided for this.</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_training['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 7'); ?></span></legend>
<p><strong>If selected and trained through this ToT program, would you be willing to serve as an alumni and help the N-PEACE network with future in-country and or regional trainings?</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<div class="field-item even"><?php print $node->application_questions_alumini['und']['0']['value']; ?></div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Question 8'); ?></span></legend>
<p><strong>Would you be willing to contribute a short case study/perspective piece related to women, peace and security from your own country experience which can be shared at the regional ToT? (Please select a minimum of ONE and a maximum of THREE case studies.</strong></p>
<div class="field field-name-postal field-type-list-text field-label-inline clearfix">
		<ul>
		<?php foreach ($node->application_questions_casestudy['und'] as $index=>$value) {
			print '<li />'.$node->application_questions_casestudy['und'][$index]['value'];
		}
		?>
        </ul>
</div>
</fieldset>

<fieldset id="node_application_form_group_details" class="fieldset group-details form-wrapper">
			<legend><span class="fieldset-legend"><?php print t('Supporting Information'); ?></span></legend>
<div class="field field-name-full-name field-type-list-text field-label-inline clearfix">
	<div class="field-label">Personal Statement:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_personal_statement['und']['0']['value'] ?></div>
	</div>
</div>

<div class="field field-name-full-name field-type-list-text field-label-inline clearfix">
	<div class="field-label">Biography:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><?php print $node->application_biography['und']['0']['value'] ?></div>
	</div>
</div>

<div class="field field-name-full-name field-type-list-text field-label-inline clearfix">
	<div class="field-label">Resume:&nbsp;&nbsp;</div>
	<div class="field-items">
		<div class="field-item even"><a href="/sites/default/files/resumes/<?php print $node->application_resume['und']['0']['filename']; ?>"><?php print $node->application_resume['und']['0']['filename']; ?></a></div>
	</div>
</div>
</fieldset>

<?php print render($content['comments']); ?>