			<?php if(!isset($_GET["page"]) || ($_GET["page"]!="contact" && $_GET["page"]!="contact_2")):?>
			<div class="row yellow full-width padding-top-bottom-30">
				<div class="row">
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-phone">
								<p>Téléphone:<br>
								07.44.99.43.61</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-location">
								<p>6 rue de la saulnerie<br>
								35410 Chateaugiron</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="contact-details-list">
							<li class="sl-small-mail">
								<p>E-mail:<br>
								<a href="mailto:chamva.voyage@gmail.com">chamva.voyage@gmail.com</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="row align-center padding-top-bottom-30">
				<span class="copyright">© Tous droits réservés <?= date('Y') ?> <a href="chamva.fr" title="CHAMVA">CHAMVA</a> webmaster Nathan M'BOUMBA / crédits photo Didier GAUTIER / charte graphique Alexis LECARDONNEL</span>
			</div>
		</div>
		<a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
		<div class="background-overlay"></div>
		<!--js-->
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
		<!--slider revolution-->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="js/jquery.imagesloaded-packed.js"></script>
		<?php if(isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2")):?>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
		<?php endif; ?>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<?php
		//require_once("style_selector/style_selector.php");
		?>
	</body>
</html>