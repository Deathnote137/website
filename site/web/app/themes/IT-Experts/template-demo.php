<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>




<ul class="baukastensysteme" >
	<li><a data-parent="#accordion" href="#dokumentation" data-toggle="collapse" >IT-Dokumentation</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#softwareverteilung" data-toggle="collapse">Softwareverteilung/Patch-Management</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#ticketsystem" data-toggle="collapse">Ticketsystem</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#checklisten" data-toggle="collapse">IT-Checklisten und -Protokolle</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#berechtigungsanalyse" data-toggle="collapse">Berechtigungsanalyse und -management</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#schwachstellenmanagement" data-toggle="collapse">Schwachstellenmanagement</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#security" data-toggle="collapse">USB-Security und Application Control</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#network" data-toggle="collapse">Network Access Control</a></li>
	<li><a class="collapsed" data-parent="#accordion" href="#privileged" data-toggle="collapse">Privileged Account Management</a></li>
	<li class="noborder"><a class="collapsed" data-parent="#accordion" href="#beratungen" data-toggle="collapse">ISMS-Beratungen</a></li>
</ul>
</div>

<div class="col-md-8">
	<div class="collapse_content collapse in" id="dokumentation">
		<div class="baukastensysteme_title marker_title_left">
			<h1>IT-Dokumentation</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="softwareverteilung">
		<div class="baukastensysteme_title marker_title_left">
			<h1>SOFTWAREVERTEILUNG/PATCH-MANAGEMENT</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="ticketsystem">
		<div class="baukastensysteme_title marker_title_left">
			<h1>TICKETSYSTEM</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="checklisten">
		<div class="baukastensysteme_title marker_title_left">
			<h1>IT-CHECKLISTEN UND -PROTOKOLLE</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="berechtigungsanalyse">
		<div class="baukastensysteme_title marker_title_left">
			<h1>BERECHTIGUNGSANALYSE UND -MANAGEMNET</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="schwachstellenmanagement">
		<div class="baukastensysteme_title marker_title_left">
			<h1>SCHWACHSTELLENMANAGEMENT</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="security">
		<div class="baukastensysteme_title marker_title_left">
			<h1>USB-SECURITY UND APPLICATION CONTROL</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="network">
		<div class="baukastensysteme_title marker_title_left">
			<h1>NETWORK ACCESS CONTROL</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="privileged">
		<div class="baukastensysteme_title marker_title_left">
			<h1>PRIVILEG ACCOUNT MANAGEMENT</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
	<div class="collapse_content collapse" id="beratungen">
		<div class="baukastensysteme_title marker_title_left">
			<h1>ISMS-BERATUNGEN</h1>
		</div>
		<div class="first_content">
			<p>Oftmals können Administratoren auch Jahre, nach denen Sie nicht mehr bei Ihrem vorherigen
				Arbeitgeber tätig sind, noch auf bestimmte Server zugreifen, da eine Passwortänderung
				tiefgehende Auswirkungen auf die Infrastruktur hat. Privilegierte Accounts von externen und
				internen Administratoren kann man aber auch wesentlich charmanter absichern und zentral
				verwalten.</p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
		</div>
		<div class="baukastensysteme_title2">
			<h2>ZIELGRUPPE</h2>
		</div>
		<div class="second_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<ul class="compliance_list">
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
				<li> Lorem ipsum dolor sit amet, consetetur sadipscing elit commodo ligula eget dolor</li>
			</ul>
		</div>
		<div class="baukastensysteme_title2">
			<h2>IHRE VORTEILE</h2>
		</div>
		<div class="third_content">
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
				invidunt
				ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
				duo
				dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
				dolor
				sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
				tempor
				invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
				et
				justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
				ipsum dolor sit amet.</p>
			<div class="feedback">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
					invidunt
					ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo
					dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
					dolor
					sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
					eirmod tempor
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
					accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
					Lorem
					ipsum dolor sit amet.</p>
				<span class="nutzer">Max Mustermann - Geschäftsführer Relativitäts GmbH</span>
			</div>
		</div>
		<div class="baukastensysteme_title2">
			<h2>LÖSUNGEN</h2>
		</div>
		<div class="fourth_content">
			<div class="row">
				<div class="col-md-4"><img src="img/deskcenter.png"></div>
				<div class="col-md-4"><img src="img/docusnap.png"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>