<?php

/*
  Template Name: Testi Template
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div class="container">

<!-- pääteksti -->
		<div class="row">
			<br>
			<br>
				<article class="post">
				<!-- 	<h3><a ><?php the_title(); ?></a></h3>  -->
					<p><?php the_content(); ?></p>
				</article>

		</div> <!-- .row -->



<!-- Prosentti palkki -->
				<div class="row">
					<div class="col-sm-3">
					</div> <!-- .col-sm-3 -->
					<div class="col-sm-9">
						<div id="Widget-content">

							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('palkki')) : else : ?>

							<div class="pre-widget">
								<p><strong>Widgetized Header</strong></p>
								<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
							</div>

							<?php endif; ?>

						</div>
					</div> <!-- .col-sm-9 -->
				</div> <!-- .row -->
				<br>
				<br>
<!-- tuotetiedot2 -->
						<div class="row">
							<div class="col-sm-3">
							</div> <!-- .col-sm-3 -->
							<div class="col-sm-9">
								<div id="Widget-content">

									<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('tuotetiedot2')) : else : ?>

									<div class="pre-widget">
										<p><strong>Widgetized Header</strong></p>
										<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
									</div>

									<?php endif; ?>

								</div>
							</div> <!-- .col-sm-9 -->
						</div> <!-- .row -->
						<br>
						<br>
<!-- Alkuperä -->
		<div class="row">
			<div class="col-sm-3">
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-9">
				<article class="post" style="text-align: center;">
				<h2 style="width:100%; text-align:center; border-bottom: 1px solid #000; line-height:0.1em; margin:10px 0 20px; color: #41a327; font-size: 20px;">
					<span style="background:#f8f6ef; padding:0 10px;">ALKUPERÄ</span></h2>
				</article>
			</div> <!-- .col-sm-9 -->
		</div> <!-- .row -->
		<br>
<!-- Alkuperätiedot -->
		<div class="row">
			<div class="col-sm-3">
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content1')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Header</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content2')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Sidebar</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content3')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Footer</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
		</div> <!-- row -->

		<div class="row">
			<div class="col-sm-3">
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content4')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Header</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content5')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Sidebar</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content6')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Footer</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
		</div> <!-- row -->

		<div class="row">
			<div class="col-sm-3">
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content7')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Header</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content8')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Sidebar</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
			<div class="col-sm-3">
				<div id="Widget-content">

					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('content9')) : else : ?>

					<div class="pre-widget">
						<p><strong>Widgetized Footer</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

					<?php endif; ?>

				</div>
			</div> <!-- .col-sm-3 -->
		</div> <!-- row -->

	</div> <!-- .container -->

</div>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>
