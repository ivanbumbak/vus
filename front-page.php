<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Veleučilište_u_Šibeniku
 */

get_header();

include 'sections/home/news-home.php';
include 'sections/home/studies-home.php';
include 'sections/home/programs-home.php';

get_footer(); ?>
