<?php

function view_serials() {
	$args = [
		'post_type'      => 'royy_serial',
		'posts_per_page' => 10,
	];
	$loop = new WP_Query( $args );
	?>
	<div class="entry-content">
	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">Serial number</th>
			<th scope="col">Status</th>
		</tr>
		</thead>
	<?php
	while ( $loop->have_posts() ) {
		$loop->the_post();
		?>
		<tr>
			<td><?php the_title(); ?></td>
			<td><?php echo(get_post_status(get_the_ID())); ?></td>
		</tr>
		<?php
	}
	?>
	</table>
	</div>
		<?php
}
add_shortcode('viewserials',view_serials);
