<?php
/**
 * Template part file that contains the Video Post content,
 * including Post title, Post entry and Post footer
 *
 * This file is called by Posts with the "Video" Post Format
 * 
 * @uses		oenology_get_context()					Defined in /functions/custom.php
 * @uses		oenology_hook_post_header_metadata()	Defined in /functions/hooks.php
 * @uses		oenology_hook_post_header_taxonomies()	Defined in /functions/hooks.php
 * 
 * @link		http://codex.wordpress.org/Function_Reference/get_template_part	get_template_part()
 * 
 * @package 	Oenology
 * @copyright	Copyright (c) 2010, Chip Bennett
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		Oenology 1.0
 */
?>

<div class="post-title">
	<?php 
	// Include the specified Theme template part file
	// 
	// Codex reference: {@link http://codex.wordpress.org/Function_Reference/get_template_part get_template_part}
	// 
	// get_template_part( $slug ) will attempt to include $slug.php. 
	// The function will attempt to include files in the following 
	// order, until it finds one that exists: the Theme's $slug.php, 
	// the parent Theme's $slug.php
	// 
	// get_template_part( $slug , $name ) will attempt to include 
	// $slug-$name.php. The function will attempt to include files 
	// in the following order, until it finds one that exists: the 
	// Theme's $slug-$name.php, the Theme's $slug.php, the parent 
	// Theme's $slug-$name.php, the parent Theme's $slug.php
	// 
	// Child Themes can replace this template part file globally, 
	// via "post-header.php", or in a specific context only, via 
	// "post-header-{context}.php"
	get_template_part( 'template-parts/post-header', oenology_get_context() );
	?>
</div>

<div class="post-entry">

	<!-- Post Entry Begin -->
	<?php the_content(); ?>
	<ul class="audiovideo-meta">
		<li>
			<?php 
			// Fire the 'oenology_hook_post_header_metadata' custom action hook
			// 
			// @param	null
			// @return	mixed	any output hooked into 'oenology_hook_post_header_metadata'
			oenology_hook_post_header_metadata(); 
			?>
		</li>	
		<li>
			<?php 
			// Fire the 'oenology_hook_post_header_taxonomies' custom action hook
			// 
			// @param	null
			// @return	mixed	any output hooked into 'oenology_hook_post_header_taxonomies'
			oenology_hook_post_header_taxonomies(); 
			?>
		</li>
	</ul>
	<!-- Post Entry End -->

</div>

<div class="post-footer">
	<?php 
	// Include the specified Theme template part file
	// 
	// Codex reference: {@link http://codex.wordpress.org/Function_Reference/get_template_part get_template_part}
	// 
	// get_template_part( $slug ) will attempt to include $slug.php. 
	// The function will attempt to include files in the following 
	// order, until it finds one that exists: the Theme's $slug.php, 
	// the parent Theme's $slug.php
	// 
	// get_template_part( $slug , $name ) will attempt to include 
	// $slug-$name.php. The function will attempt to include files 
	// in the following order, until it finds one that exists: the 
	// Theme's $slug-$name.php, the Theme's $slug.php, the parent 
	// Theme's $slug-$name.php, the parent Theme's $slug.php
	// 
	// Child Themes can replace this template part file globally, 
	// via "post-footer.php", or in a specific context only, via 
	// "post-footer-{context}.php"
	get_template_part( 'template-parts/post-footer', oenology_get_context() ); 
	?>
</div>