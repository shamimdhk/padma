echo '<pre>';
print_r(get_stylesheet_uri());
wp_die();


wp_enqueue_style('main-css', get_template_directory_uri().'/main.css', ['stylesheet']); 

for depandency 
lecture 7 :
wp_register_style('style-css', get_stylesheet_uri(), [],filemtime(get_template_directory().'/style.css'),'all' );
wp_enqueue_style('style-css');
wp_enqueue_script('main.js');