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

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://sharfikp.beget.tech"><?php bloginfo('name'); ?></a></h1></div>
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

	<div id="templatemo_menu" class="ddsmoothmenu">
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
	</div> 
	