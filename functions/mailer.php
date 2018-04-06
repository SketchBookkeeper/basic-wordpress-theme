<?php
/**
 * Mailer
 *
 * @package Basic
 */

/**
 * SMTP
 *
 * Overrides PHP mailer to send through SMTP.
 * Currently using MailGun.
 *
 * @author Rich Edmunds
 * @see    https://codex.wordpress.org/Plugin_API/Action_Reference/phpmailer_init
 * @see    https://www.mailgun.com/
 * @param  PHPMailer $phpmailer Object to set values.
 */
function basic_phpmailer_smtp( PHPMailer $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'smtp.mailgun.org';
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Port       = 465;
	$phpmailer->Username   = '{websitename}@mg.tenthmusedesign.com';
	$phpmailer->Password   = '{password}';
	$phpmailer->SMTPSecure = 'ssl'; // SSL or TLS.
	$phpmailer->From       = 'no-reply@' . $_SERVER['HTTP_HOST'];
	// $phpmailer->FromName   = '{Full Name}'; // Optional.
}

// add_action( 'phpmailer_init', 'basic_phpmailer_smtp' );
