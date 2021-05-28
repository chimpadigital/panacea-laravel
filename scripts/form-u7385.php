<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.0.342
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Formulario eventos Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'info@panaceahotel.com',
		'to' => 'info@panaceahotel.com'
	),
	'fields' => array(
		'custom_U7408' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Nombre\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U7386' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U7396' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Telefono',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Telefono\' is required.'
			)
		),
		'custom_U7412' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Tipo de Evento',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Tipo de Evento\' is required.'
			)
		),
		'custom_U7400' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Fecha',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Fecha\' is required.'
			)
		),
		'custom_U7404' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Caracteristica del Evento',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Caracteristica del Evento\' is required.'
			)
		)
	)
);

process_form($form);
?>
