<?php 

$sidebar_args = array(
'name'          => __( 'Main Left Sidebar'),
'id'            => 'left-sidebar',
'description'   => '',
'class'         => 'style1',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<header><h2>',
'after_title'   => '</h2></header>' ); 

register_sidebar($sidebar_args);

register_nav_menu('header-menu', 'Main Header Menu');