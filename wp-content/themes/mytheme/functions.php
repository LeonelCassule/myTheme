<?php
// Chamar a tag title
/*
function tema_title_tag(){
    add_support_theme('title_tag');
}
    add_action('after_setup_theme', 'tema_title_tag');

 // Previnir de versoes mais antigas
 
 if(!function_exists('_wp_render_title_tag')){
    function tema_render_title(){
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
        }
        add_action('wp_head','tema_render_title');
    }
        */

        // Registar o bootstrap navwalker
         
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        // Registar os menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'myTheme' ),
        ) );

        // Adicionar imagem no Post/Artigo
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 720, true);

        // Definir o tamanho do resumo do post
        add_filter('excerpt_length', function($length){
            return 70;
        } );

        // styles buttom
       add_filter('next_posts_link_attributes','posts_link_attributes');
       add_filter('previous_posts_link_attributes','posts_link_attributes');
        function posts_link_attributes(){
            return 'class = "btn btn-outline-primary"';
        }

?>

   
   