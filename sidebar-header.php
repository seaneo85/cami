				<div id="sidebar-header" class="sidebar m-all t-1of3 d-1of3 last-col cf" role="complementary">

					<?php if ( is_active_sidebar( 'header' ) ) : ?>

						<?php dynamic_sidebar( 'header' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
