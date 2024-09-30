<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		
		
		<div class="row page-margin-top">
			<form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<fieldset class="column column-1-2">
						<input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="Votre nom et prenom">
						<input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="Votre email">
					</fieldset>
					<fieldset class="column column-1-2">
						<textarea name="message" placeholder="Votre avis"><?php echo _def_message; ?></textarea>
					</fieldset>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2 align-right">
						<input type="hidden" name="action" value="contact_form" />
						<input type="submit" name="submit" value="ENVOYER VOTRE AVIS" class="more active">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>