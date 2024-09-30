<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		
		<div class="row page-margin-top">
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-location">
						<p>6 rue de la saulnerie<br>35410 Chateaugiron</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-phone">
						<p>Téléphone:<br>07.44.99.43.61</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-clock">
						<p>Lundi - Vendredi: 09h00 - 17h00<br>Samedi: 09h00 - 12h00</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row page-margin-top">
			<form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<fieldset class="column column-1-2">
						<input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="Votre nom et prenom">
						<input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="Votre email">
						<input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="Votre numéro de téléphone">
					</fieldset>
					<fieldset class="column column-1-2">
						<textarea name="message" placeholder="Votre message"><?php echo _def_message; ?></textarea>
					</fieldset>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<p class="description t1">Je vous réponds dans les plus bref délais.</p>
					</div>
					<div class="column column-1-2 align-right">
						<input type="hidden" name="action" value="contact_form" />
						<input type="submit" name="submit" value="ENVOYER LE MESSAGE" class="more active">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>