<?php 

function load_stylesheets()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');

    


    
    
    
}

add_action('wp_enqueue_scripts' , 'load_stylesheets');

//add featured image in post
add_theme_support('post-thumbnails');



?>


 