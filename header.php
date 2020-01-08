<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme - free CSS template provided by templatemo.com" />
<link href="<?php echo get_template_directory_uri() ?>/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/styles.css" />
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://sharfikp.beget.tech/"><?php bloginfo('name'); ?></a></h1></div>
        <!-- Free CSS Templates -->
       
        <div id="header_right">
            <div id="templatemo_search">
                <form action="<?php get_search_query(); ?>" method="get">
                  <input type="text" value="Search" name="s" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    <?php wp_nav_menu( array(
    'menu' => 'menu1',
    'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => 'ddsmoothmenu',              // (string) class контейнера (div тега)
	'container_id'    => 'templatemo_menu',              // (string) id контейнера (div тега)
	'menu_class'      => 'menu',          // (string) class самого меню (ul тега)
	'menu_id'         => 'menu1',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => ''     
    ));
    ?>
    
    <div id="templatemo_middle">
    	<img src="<?php echo get_template_directory_uri() ?>/images/templatemo_image_01.png" alt="Image 01" />
    	<h1>Introducing Web Store</h1>
        <p><a href="http://sharfikp.beget.tech/" target="_parent">Web Store</a> is a free css template for your personal or commercial websites. Feel free to download, edit and use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->
   

    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="product_slider">
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">


                        
                        <?php

    $loop = new WP_Query( array(
'post_type' => 'product',  // указываем, что выводить нужно именно товары
'posts_per_page' => 9, // количество товаров для отображения
'orderby' => 'date', // тип сортировки (в данном случае по дате)
'product_cat' => 'штуки-1, штуки-2,  штуки-3, штуки-4', // указываем слаг нужной категории
));
while  ( $loop->have_posts()  ): $loop->the_post(); ?>
<div class="SlideItMoo_element">
<div id="SlideItMoo_items a img" class="SlideItMoo_items"> <a href="<?php echo get_permalink(); ?>"  class="avatar"><img class="img-responsive" src="<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, ' 160 x 120' , true );
echo $thumb_url[0];
?>" alt=""></a> </div>
    
    </div>
    <?php endwhile?>
    </div>     			
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        <?php get_sidebar(); ?>
      