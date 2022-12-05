<div class="wrap">
	<h1><?php esc_html_e( 'Generate Dummy Posts', 'generate-dummy-posts' ); ?></h1>
	<div id='gdpmain_parent'>
		<label><?php esc_html_e( 'Enter no. of posts you want to generate', 'generate-dummy-posts' ); ?></label>
		<input type='number' id='gdp_count' placeholder="<?php esc_html_e( 'Enter number', 'generate-dummy-posts' ); ?>" />
	</div>
	<button class="button button-primary dsxmlrpc_button" id="generate_posts"><?php esc_html_e( 'Generate', 'generate-dummy-posts' ); ?></button> <div id="generating_message"></div>
</div>