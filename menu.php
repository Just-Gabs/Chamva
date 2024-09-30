<nav>
	<ul class="sf-menu">
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="accueil") ? " class='selected'" : ""); ?>>
			<a href="?page=accueil" title="accueil">
				ACCUEIL
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="tarifs" ? " class='selected'" : ""); ?>>
			<a href="?page=tarifs" title="Tarifs">
				TARIFS
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
			<a href="?page=services" title="Services">
				SERVICES
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="sejours" || $_GET["page"]=="normandie" || $_GET["page"]=="montpellier" || $_GET["page"]=="gironde" || $_GET["page"]=="paris" || $_GET["page"]=="provence" || $_GET["page"]=="nantes" || $_GET["page"]=="barcelone" || $_GET["page"]=="pornic" ? " class='selected'" : ""); ?>>
			<a href="?page=sejours" title="Séjours">
				SEJOURS
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="qui-suis-je" ? " class='selected'" : ""); ?>>
			<a href="?page=qui-suis-je" title="Qui suis-je?">
				QUI SUIS-JE?
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="a-propos" ? " class='selected'" : ""); ?>>
			<a href="?page=a-propos" title="A propos">
				A PROPOS
			</a>
		</li>
		<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
			<a href="?page=contact" title="Contacts">
				CONTACTS
			</a>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="accueil") ? " class='selected'" : ""); ?>>
				<a href="?page=accueil" title="accueil">
					ACCUEIL
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="tarifs" ? " class='selected'" : ""); ?>>
				<a href="?page=tarifs" title="Tarifs">
					TARIFS
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="services" ? " class='selected'" : ""); ?>>
				<a href="?page=services" title="Séjours">
					SERVICES
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="projects" || $_GET["page"]=="espagne" ? " class='selected'" : ""); ?>>
				<a href="?page=sejours" title="Séjours">
					SEJOURS
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="qui-suis-je" ? " class='selected'" : ""); ?>>
				<a href="?page=qui-suis-je" title="Single Team">
					QUI SUIS-JE?
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="a-propos" ? " class='selected'" : ""); ?>>
				<a href="?page=a-propos" title="A propos">
					A PROPOS
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
				<a href="?page=contact" title="Contacts">
					CONTACTS
				</a>
			</li>
		</ul>
	</nav>
</div>