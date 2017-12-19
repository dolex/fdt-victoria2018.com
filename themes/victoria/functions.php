<?php
// добавление хука wp. [ миниатюры картинок для постов ]
    add_theme_support( 'post-thumbnails' );

// Выводит отрывок (цитату) поста, со вставкой в конец

    function new_excerpt_length($length) {
        return 37;
    }
    add_filter('excerpt_length', 'new_excerpt_length');

    add_filter('excerpt_more', function($more) {
        return '...';
    });

    /* Удаляем H2 из пагинации */ 
    add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ){
    return '
    <nav class="%1$s" role="navigation">
    <div class="nav-links">%3$s</div>
    </nav>    
    ';
}

add_theme_support('menus');




function victoria_customize_register( $wp_customize ) {
	
	$wp_customize->add_section('section_block', array(
		'title' => __('Настройки сайта','victoria'),
		'priority' => 30,
	));

	$wp_customize->add_setting('phone', array(
		'default' => __('', 'victoria'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('phone', array(
		'label' => __('Телефон', 'victoria'),
		'section' => 'section_block',
		'settings' => 'phone',
		'type' => 'text',
	));

	$wp_customize->add_section('feature_images', array(
		'title'           => __('Настройка СЛАЙДЕРА', 'victoria'),
		'description'     => __('тут вы можете загрузить или удалить картинки для слайдера'),
		'section' => 'section_block',
		'priority' => 30,
	));

$wp_customize->add_setting('feature_product_one', array(
	'default-image' => get_template_directory_uri() . '/img/slide_acziya3.jpg',
	'transport'     => 'refresh',
));

$wp_customize->add_setting('feature_product_two', array(
	'default-image' => get_template_directory_uri() . '/img/slide_acziya3.jpg',
	'transport'     => 'refresh',
));

$wp_customize->add_setting('feature_product_three', array(
	'default-image' => get_template_directory_uri() . '/img/slide_acziya3.jpg',
	'transport'     => 'refresh',
));

$wp_customize->add_setting('feature_product_four', array(
	'default-image' => get_template_directory_uri() . '/img/slide_acziya3.jpg',
	'transport'     => 'refresh',
));

// ####### настройки для блока - наши услуги ###### //

$wp_customize->add_setting('feature_product_one_text', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_one_text_url', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_two_text', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_two_text_url', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_three_text', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_three_text_url', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_four_text', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_four_text_url', array(
	'default' => __('', 'victoria'),
	'transport' => 'refresh',
));



$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_one_control', array(
	'label' => __('Слайдер 1', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one',
)));

$wp_customize->add_control('feature_product_one_control_text_title', array(
	'label' => __('введите название', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_one_control_text_url', array(
	'label' => __('введите адрес', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one_text_url',
	'type' => 'text',
));


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_two_control', array(
	'label' => __('Слайдер 1', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two',
))); 

$wp_customize->add_control('feature_product_two_control_text_title', array(
	'label' => __('введите название', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_two_control_text_url', array(
	'label' => __('введите адрес', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_three_control', array(
	'label' => __('Слайдер 3', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three',
)));

$wp_customize->add_control('feature_product_three_control_text_title', array(
	'label' => __('введите название', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_three_control_text_url', array(
	'label' => __('введите адрес', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_four_control', array(
	'label' => __('Слайдер 4', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four',
)));

$wp_customize->add_control('feature_product_four_control_text_title', array(
	'label' => __('введите название', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_four_control_text_url', array(
	'label' => __('введите адрес', 'victoria'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four_text_url',
	'type' => 'text',
));

}

add_action( 'customize_register', 'victoria_customize_register' );

add_theme_support( 'custom-background' );





add_filter( 'post_gallery', 'my_post_gallery', 10, 2 );
function my_post_gallery( $output, $attr) {
    global $post, $wp_locale;

    static $instance = 0;
    $instance++;

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'dl',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    // $selector = "gallery-{$instance}";
    
    $selector = "gallery";

    $output = apply_filters('gallery_style', "
      
        <!-- see gallery_shortcode() in wp-includes/media.php -->
    <div>&nbsp;</div>
        <div id=\"$selector\" style=\"display:none;\">");

    // <div id='$selector' class='gallery galleryid-{$id}'>");
    // <{$icontag} class='gallery-icon'>
    // <style type='text/css'>
    // #{$selector} {
    //     margin: auto;
    // }
    // #{$selector} .gallery-item {
    //     float: {$float};
    //     margin-top: 10px;
    //     text-align: center;
    //     width: {$itemwidth}%;           }
    // #{$selector} img {
    //     border: 2px solid #cfcfcf;
    // }
    // #{$selector} .gallery-caption {
    //     margin-left: 0;
    // }
    // </style>
    $i = 0;


        $images = get_attached_media('image', $post->ID);
        foreach($images as $image) {
        
            
            // ссылка на картинку
            $image_url = $image->guid;

        
        // $output .= "<{$itemtag} class='gallery-item'>";
        $output .= '
        <a href="#">
        <img alt=""
        src="'.$image_url.'"
        data-image="'.$image_url.'"
        data-description=""
        style="display:none">
        </a>';
        }
        // if ( $captiontag && trim($attachment->post_excerpt) ) {
            // $output .= "
            //     <{$captiontag} class='gallery-caption'>
            //     " . wptexturize($attachment->post_excerpt) . "
            //     </{$captiontag}>";

          
               
        // }

    //     if ( $columns > 0 && ++$i % $columns == 0 )
    //         $output .= '<br style="clear: both" />';


        
     

    // $output .= "
    //         <br style='clear: both;' />
    //     </div>\n";

    $output .= '</div>';
    return $output;
}


?>