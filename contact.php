<?php get_header(); 
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Mid-Atlantic Propane Exchange
 * 
 */
?>

<?php echo get_template_part('parts/page', 'int-page-header'); ?>

<?php echo get_template_part('parts/page', 'contact-form-loop'); ?>

<?php  echo get_template_part('parts/page', 'partners'); ?>

<?php echo get_template_part('parts/page', 'tag-container'); ?>

<?php get_footer(); ?>
