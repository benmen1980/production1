<?php
function enqueBootStrap(){
	wp_enqueue_script( 'jquery_slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '', false );
	wp_enqueue_script( 'cdn_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', '', '', false );
	wp_enqueue_script( 'stackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', '', '', false );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', '' );
}