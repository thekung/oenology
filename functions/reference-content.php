<?php 

/* Load Settings Page Tab Content
*******************************************************************************************/

global $pagenow;
if ( 'themes.php' == $pagenow && isset( $_GET['page'] ) && 'oenology-reference' == $_GET['page'] ) :
    if ( isset ( $_GET['tab'] ) ) :
        $tab = $_GET['tab'];
    else:
        $tab = 'general';
    endif;
    switch ( $tab ) :
        case 'general' :
            oenology_reference_page_general();
            break;
        case 'faq' :
            oenology_reference_page_faq();
            break;
        case 'coderef' :
            oenology_reference_page_coderef();
            break;
        case 'changelog' :
            oenology_reference_page_changelog();
            break;
        case 'license' :
            oenology_reference_page_license();
            break;
    endswitch;
endif;


/* Reference Page Tab Content
*******************************************************************************************/

// FAQ Tab
function oenology_reference_page_license() { ?>
	
	<h3>Oenology WordPress Theme</h3>

	<p>Oenology WordPress Theme, Copyright (C) 2010 Chip Bennett</p>
	<ol>
		<li>License: GNU General Public License, v2 (or newer)</li>
		<li>License URI: <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">http://www.gnu.org/licenses/old-licenses/gpl-2.0.html</a></li>
	</ol>
	
	<p>This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.</p>
	
	<p>This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.</p>
	
	<h3>Bundled Fonts</h3>

	<p>TexGyre Schola Font, Copyright 2005, 2006 C. R. Holder</p>
	<ol>
		<li>Source: <a href="http://www.fontsquirrel.com/fonts/TeX-Gyre-Schola">TeXGyre Schola Font</a></li>
		<li>License: GUST Font License (GFL) (GPL-compatible)</li>
		<li>License URI: <a href="<?php echo get_template_directory_uri(); ?>/fonts/GUST-FONT-LICENSE.txt">/fonts/GUST-FONT-LICENSE.txt</a></li>
	</ol>
	
	<h3>Bundled Icons</h3>

	<p>IconSweets2 Icons, Copyright 2010 YummyGum</p>
	<ol>
		<li>Source: <a href="http://www.iconsweets2.com">IconSweets2</a></li>
		<li>License: "You may use these icons for both commercial and for 
		personal use and customize them any way you like."</li>
		<li>License URI: <a href="<?php echo get_template_directory_uri(); ?>/images/iconsweets2/License.rtf">/images/iconsweets2/License.rtf</a></li>
	</ol>

	<p>InFocus Social Media Icons, Copyright 2010 WebTreats</p>
	<ol>
		<li>Source: <a href="http://webtreats.mysitemyway.com/1540-infocus-social-media-icon-mega-set/">InFocus Social Media Icons</a></li>
		<li>License: "This resource is free for personal and commercial use ~ no attribution necessary."</li>
		<li>License URI: <a href="<?php echo get_template_directory_uri(); ?>/images/infocus/readme.txt">/images/infocus/readme.txt</a></li>
	</ol>
	
<?php }

// Changelog Tab
function oenology_reference_page_changelog() { ?>
	
	<h3>1.2 [2011.04.25]</h3>
	<p>Update Release</p>
	<ol>
	<li>New Features:
		<ol>
		<li>Added basic Theme options:
			<ol>
			<li>RSS and Social Network Profile Icons
				<ul>
				<li><em>TODO: Change icons to sprites to elimiate hover "blink"</em></li>
				</ul>
			</li>
			</ol>
		</li>
		<li>Added Widgetized Sidebars:
			<ul>
			<li>Added two full-width sidebars:
				<ol>
				<li>Above existing lef/right column sidebars</li>
				<li>Below existing lef/right column sidebars</li>
				</ol>
			</li>
			<li><em>Note: These sidebars do not apply to Page templates, where left and right column sidebars are separated</em></li>
			<li><em>Note: you may need to adjust Widget placement, via Dashboard -> Appearance -> Widgets, after upgrade</em></li>
			</ul>
		</li>
		<li>Added Theme color schemes ("Varietals"): 
			<ol>
			<li>Muscat (Light Green)</li>
			<li>Malbec (Dark Green)</li>
			</ol>
		</li>
		</ol>
	</li>
	<li>Maintenance/Bugfixes:
		<ol>
		<li>Fixed handling of Custom Image Header:
			<ol>
			<li>Added default header text color based on light/dark color scheme</li>
			<li>Added translucent filter over header image, to improve readability of Site Title/Description</li>
			<li>Fixed handling of user-configured header text color</li>
			</ol>
		</li>
		<li>Stylesheet updates to improve aesthetics</li>
		<li>Added caching for the oenology_copyright() function database query results</li>
		<li>Added caching for the oenology_copyright() function database query results</li>
		<li>Added icons for Post Formats</li>
		<li>Changed RSS icon in Loop Header</li>
		<li>Changed enqueueing of comment-reply script from hard-coded in document head to hooked into wp_enqueue_scripts,
			and added comments_open() to enqueue conditional.</li>
		<li>Changed Track/pingback list in comments.php from custom markup to a wp_list_comments() callback</li>
		<li>Changed handling of no Post Title from an inline conditional to a hook into the_title filter.</li>
		<li>Tweaked CSS for .wp-caption class for handling linked images with captions</li>
		<li>Added "Light" and "Dark" color scheme designations, for automatic styling of Post Format and Social Network icons</li>
		<li>Replaced previous/next index page links in infobar and loop footer with native 
			pagination links, via core function paginate_links()</li>
		<li>Replaced previous/next comments page links above/below comment list with native 
			pagination links, via core function paginate_comments_links()</li>
		<li>Added oenology_paginate_archive_page_links() custom wrapper function for paginate_links, for use by Child Themes</li>
		<li>Added @import font: TexGyre Schola</li>
		</ol>
	</li>
	<li>Documentation:
		<ol>
		<li>Completed update to Oenology Resources Admin Page "Code Ref" Tab</li>
		</ol>
	</li>
	</ol>

	<h3>1.1 [2011.02.23]</h3>
	<p>Update Release</p>
	<ol>
	<li>New Features:
		<ol>
		<li>Added support for Post Formats (introduced in WordPress 3.1)</li>
		<li>Added basic Theme options:
			<ol>
			<li>Header Navigation Menu Position</li>
			<li>Header Navigation Menu Depth (up to three levels)</li>
			<li>Footer Credit Link (disabled-by-default)</li>
			</ol>
		</li>
		<li>Added Theme color schemes ("Varietals"):
			<ol>
				<li>Syrah (Black)</li>
				<li>Seyval Blanc (Tan)</li>
			</ol>
		</li>
		</ol>
	</li>
	<li>Maintenance/Bugfixes:
		<ol>
		<li>Added check to ensure TwentyTen header images are registered only if TwentyTen is installed</li>
		<li>Minor tweak/bugfix to ensure floats are cleared properly on paginated posts</li>
		<li>Minor tweaks to comments.php</li>
		</ol>
	</li>
	</ol>

	<h3 id="">1.0 [2010.12.08]</h3>
	<p>Maintenance Release</p>
	<ol>
	<li>Moved all CSS declarations into style.css, and eliminated @import calls</li>
	<li>Cleaned up un-needed CSS files in css\ and css\fonts\ directories; removed css\fonts\ directory.</li>
	<li>Fixed a few minor bugs</li>
	<li>Added Prev/Next page navigation in Loop Footer, to match Infobar navigation</li>
	<li>Added default Widgets to appear in each sidebar if no widgets are defined by the user</li>
	<li>Finished adding inline documentation for all functions used in the Theme, including functions.php</li>
	<li>Added default "(Untitled)" text to appear in place of Title for Posts without a defined Post Title</li>
	<li>Removed translation strings. Internationalization will be added in a later revision.</li>
	</ol>

	<h3 id="">0.9.2 [2010.11.04]</h3>
	<p>Minor BugFix release</p>
	<ol>
	<li>Fixed divide-by-zero PHP notice generated on the attachment page when the image metadata indicates 
	a shutter speed of zero.</li>
	<li>Fixed minor CSS image dimension bug</li>
	<li>Updated Theme tags</li>
	</ol>

	<h3 id="">0.9.1 [2010.09.24]</h3>
	<p>Initial Release.</p>
	
<?php }

// General Tab
function oenology_reference_page_general() { ?>
	
	<h3>Menu Functionality</h3>

	<p>The Theme fully supports WordPress core Navigation Menu functionality. The main site navigation menu 
	is called "Header Navigation", and the left sidebar page navigation is called "Sidebar Navigation".</p>

	<p>The Header Navigation menu can optionally be set to display either above or below the Site Title and 
	Description. By default, the Header Navigation menu displays above the Site Title/Description. To change 
	this setting, see Appearance -> Oenology Options.</p>

	<p>The Theme defaults to using wp_list_pages() for these menus, which means that you do not have to create 
	your own menus. With the Theme-default functionality, any time you add pages, they will automatically appear 
	in the menus.</p>

	<p>The Header Navigation menu shows only top-level Pages. The Sidebar Navigation shows up to four levels of 
	Child Pages, and shows the current Page and its Child Pages. Second-level Child Pages show from the first level, 
	third-level Child Pages show from the second level, and fourth-level Child Pages show from the third level.</p>

	<p>Menus are displayed as lists, with each list item being a link displaying a Page Title. The list items are 
	styled so that overly long Page Titles will not break the layout. Long Page Titles will be cut off, and the full 
	Page Title will appear in the tooltip when hovering over the link.</p>

	<h3>Post Thumbnail Functionality</h3>

	<p>The Theme fully supports WordPress core Post Thumbnail functionality. By default, Post Thumbnails will appear 
	in the Post Title for Archive, Taxonomy (Category/Tag), and Search pages.</p>

	<h3>Custom Header Image Functionality</h3>

	<p>The Theme fully supports WordPress core Custom Header Image functionality. The Theme is configured to make the 
	TwentyTen header images available if TwentyTen is installed. Custom images will be cropped to 1000x198px when uploaded.</p>

	<p>The Theme will automatically apply a foreground color to the Site Header Text. If you use a custom image header, you
	 may need to modify this text color, via Dashboard -> Appearance -> Header -> "Text Color"</p>

	<h3>Custom Background Functionality</h3>

	<p>The Theme fully supports WordPress core Custom Background functionality. Background image or color is applied to 
	the BODY tag, and will appear outside the Theme content.</p>

	<h3>Post Formats Functionality</h3>

	<p>The Theme fully supports WordPress core Post Formats functionality. Custom layout and style are applied for each of 
	the core Post Format types: Aside, Audio, Chat, Gallery, Image, Link, Status, and Video. Post Format archive pages are 
	linked in the post footer of each post that uses a Post Format other than "standard". Also, the Theme includes a custom 
	Widget to display a list of Post Format types, similar to the Category list or Tag list.</p>
	
	<p><strong>Note:</strong> to display captions for Gallery Post Format types, and for Image Post Format types with linked 
	(external) images, add the caption to the <em>Excerpt</em> field on the Edit Post screen.</p>

	<h3>Widgets</h3>

	<p>The Theme includes some custom Widgets, that can take the place of their built-in counterparts. In fact, the custom 
	Widgets are essentially identical to the core Widgets, except that the custom Widgets are collapsible. The following 
	Widgets are available:</p>
	<ol>
		<li>Archives</li>
		<li>Categories</li>
		<li>Linkroll by Cat</li>
		<li>Post Formats</li>
		<li>Recent Posts</li>
		<li>Tags</li>
	</ol>
	
<?php }

// FAQ Tab
function oenology_reference_page_faq() { ?>
	
	<h3>So, how do I learn from Oenology?</h3>

	<p>Each Theme template file includes a considerable amount of inline documentation, explaining the code 
	use. Also, each template file includes a function reference, that lists each function, hook, and tag 
	used in the file, along with a WordPress Codex reference, an explanation of the function, and example usage.</p>

	<h3>What is oenology-reference.txt?</h3>

	<p>oenology-reference.txt is the master cross-reference file, that contains all of the functions, template tags, 
	and hooks used in the Theme.</p>

	<h3>Why so many template files?</h3>

	<p>Oenology is likely broken down into more template parts than the average Theme. This deconstruction is by 
	design, in order to facilitate easier Child-Theming.</p>

	<h3>What's in store for the future?</h3>

	<p>First and foremost, since Oenology is intended to be a learning tool, the inline and reference documentation 
	will be a continual work-in-progress, based upon user feedback. This documentation is complete as of Oenology 
	Version 1.0, but will continue to be updated and improved.</p>

	<p>Other features that may be added in the future:</p>
	<ol>
	<li>Internationalization</li>
	<li>Theme Options</li>
	<li>others, as determined by user feedback and demand</li>
	</ol>

	<h3 id="">What About SEO?</h3>
 
	<p>I am a firm believer that the single, most important criterion for SEO is good content. That said, the Theme 
	does take apply some SEO considerations:</p>
	<ol>
	<li>The Theme assumes that the H1 heading tag will only be applied to the Post Title, and not to any post-entry 
	content. Accordingly, if you use an H1 heading in the post-entry content, you'll find that it is styled rather 
	similarly to the H2 heading tag.</li>
	<li>The Theme template files ensure that the most important content - the post-entry content - is rendered 
	as early as possible. The loop.php template file is called first, and the sidebar-left.php and sidebar-right.php 
	files are called second.</li>
	<li>The Theme supplies a default breadcrumb navigation function.</li>
	<li>The Theme includes plug-and-play support for the following plugins: WP-Paginate, Yoast Breadcrumbs</li>
	</ol>

	<p>Most of the rest is really up to the user. The Theme is intended to be SEO-neutral: neither hurting your SEO, 
	nor going out of its way (and adding considerable bloat that is better added via the many good plugins available) 
	to improve it.</p>
	
<?php }

// Code Ref Tab
function oenology_reference_page_coderef() { ?>

<p>The following functions, tags, and hooks are used (or referenced) in Oenology:</p>

<ul class="codereflinklist">
<li>
<h4><a href="#section_wordpress_functions">WordPress Functions</a></h4>
<ul>
<li><a href="#add_action">add_action()</a></li>
<li><a href="#add_custom_background">add_custom_background()</a></li>
<li><a href="#add_custom_image_header">add_custom_image_header()</a></li>
<li><a href="#add_editor_style">add_editor_style()</a></li>
<li><a href="#add_filter">add_filter()</a></li>
<li><a href="#add_image_size">add_image_size()</a></li>
<li><a href="#add_theme_support">add_theme_support()</a></li>
<li><a href="#apply_filters">apply_filters()</a></li>
<li><a href="#dynamic_sidebar">dynamic_sidebar()</a></li>
<li><a href="#get_option">get_option()</a></li>
<li><a href="#get_queried_object">get_queried_object()</a></li>
<li><a href="#get_query_var">get_query_var()</a></li>
<li><a href="#get_stylesheet_uri">get_stylesheet_uri()</a></li>
<li><a href="#get_theme_root">get_theme_root()</a></li>
<li><a href="#get_userdata">get_userdata()</a></li>
<li><a href="#header_image">header_image()</a></li>
<li><a href="#home_url">home_url()</a></li>
<li><a href="#register_default_headers">register_default_headers()</a></li>
<li><a href="#register_nav_menus">register_nav_menus()</a></li>
<li><a href="#register_sidebar">register_sidebar()</a></li>
<li><a href="#register_widget">register_widget()</a></li>
<li><a href="#set_post_thumbnail_size">set_post_thumbnail_size()</a></li>
<li><a href="#size_format">size_format()</a></li>
<li><a href="#wp_enqueue_script">wp_enqueue_script</a></li>
<li><a href="#wp_upload_dir">wp_upload_dir()</a></li>
</ul>
</li>
<li>
<h4><a href="#section_wordpress_template_tags">WordPress Template Tags</a></h4>
<ul>
<li><a href="#body_class">body_class()</a></li>
<li><a href="#category_description">category_description()</a></li>
<li><a href="#comment_form">comment_form()</a></li>
<li><a href="#comments_link">comments_link()</a></li>
<li><a href="#comments_number">comments_number()</a></li>
<li><a href="#edit_post_link">edit_post_link()</a></li>
<li><a href="#get_avatar">get_avatar()</a></li>
<li>
<a href="#get_bloginfo">get_bloginfo()</a> /<br />
<a href="#get_bloginfo">bloginfo()</a>
</li>
<li>
<a href="#get_category">get_category()</a> /<br />
<a href="#get_category">get_the_category()</a> /<br />
<a href="#get_category">the_category()</a>/ <br />
<a href="#get_category">wp_get_post_categories()</a>
</li>
<li><a href="#get_category_parents">get_category_parents()</a></li>
<li><a href="#get_children">get_children()</a></li>
<li><a href="#get_comment_link">get_comment_link()</a></li>
<li><a href="#get_comments_number">get_comments_number()</a></li>
<li><a href="#get_comment_pages_count">get_comment_pages_count()</a></li>
<li><a href="#get_comment_type">get_comment_type()</a></li>
<li><a href="#get_month_link">get_month_link()</a></li>
<li>
<a href="#get_permalink">get_permalink()</a> /<br />
<a href="#get_permalink">the_permalink()</a>
</li>
<li>
<a href="#get_post">get_post()</a> /<br />
<a href="#get_post">the_post()</a> /<br />
</li>
<li><a href="#get_post_format">get_post_format()</a></li>
<li><a href="#get_posts">get_posts()</a></li>
<li>
<a href="#get_search_query">get_search_query()</a> /<br />
<a href="#get_search_query">the_search_query()</a>
</li>
<li><a href="#get_tag_feed_link">get_tag_feed_link()</a></li>
<li>
<a href="#get_tags">get_tags()</a>/<br />
<a href="#get_tags">get_the_tags()</a>/<br />
<a href="#get_tags">the_tags()</a>
</li>
<li>
<a href="#get_the_author">get_the_author()</a> /<br />
<a href="#get_the_author">the_author()</a>
</li>
<li>
<a href="#get_the_author_meta">get_the_author_meta()</a> /<br />
<a href="#get_the_author_meta">the_author_meta()</a>
</li>
<li>
<a href="#get_the_content">get_the_content()</a> /<br />
<a href="#get_the_content">the_content()</a>
</li>
<li>
<a href="#get_the_date">get_the_date()</a> /<br />
<a href="#get_the_date">the_date()</a>
</li>
<li>
<a href="#get_the_excerpt">get_the_excerpt()</a> /<br />
<a href="#get_the_excerpt">the_excerpt()</a>
</li>
<li>
<a href="#get_the_ID">get_the_ID()</a> /<br />
<a href="#get_the_ID">the_ID()</a>
</li>
<li>
<a href="#get_the_post_thumbnail">get_the_post_thumbnail()</a> /<br />
<a href="#get_the_post_thumbnail">the_post_thumbnail()</a>
</li>
<li>
<a href="#get_the_time">get_the_time()</a> /<br />
<a href="#get_the_time">the_time()</a>
</li>
<li>
<a href="#get_the_title">get_the_title()</a> /<br />
<a href="#get_the_title">the_title()</a>
</li>
<li>
<a href="#get_trackback_url">get_trackback_url()</a> /<br />
<a href="#get_trackback_url">trackback_url()</a>
</li>
<li><a href="#get_year_link">get_year_link()</a></li>
<li><a href="#language_attributes">language_attributes()</a></li>
<li>
<a href="#next_comments_link">next_comments_link()</a> /<br />
<a href="#next_comments_link">previous_comments_link()</a>
</li>
<li>
<a href="#next_post_link">next_post_link()</a> /<br />
<a href="#next_post_link">previous_post_link()</a>
</li>
<li><a href="#post_class">post_class()</a></li>
<li><a href="#posts_nav_link">posts_nav_link()</a></li>
<li><a href="#single_cat_title">single_cat_title()</a></li>
<li><a href="#single_tag_title">single_tag_title()</a></li>
<li>
<a href="#the_shortlink">the_shortlink()</a> /<br />
<a href="#the_shortlink">wp_get_shortlink()</a>
</li>
<li><a href="#the_widget">the_widget()</a></li>
<li><a href="#wp_footer">wp_footer()</a></li>
<li><a href="#wp_get_attachment_image">wp_get_attachment_image()</a></li>
<li><a href="#wp_get_attachment_link">wp_get_attachment_link()</a></li>
<li><a href="#wp_get_current_user">wp_get_current_user()</a></li>
<li><a href="#wp_head">wp_head()</a></li>
<li><a href="#wp_link_pages">wp_link_pages()</a></li>
<li><a href="#wp_list_comments">wp_list_comments()</a></li>
<li><a href="#wp_list_pages">wp_list_pages()</a></li>
<li><a href="#wp_loginout">wp_loginout()</a></li>
<li><a href="#wp_nav_menu">wp_nav_menu()</a></li>
<li><a href="#wp_register">wp_register()</a></li>
<li><a href="#wp_title">wp_title()</a></li>
</ul>
</li>
<li>
<h4><a href="#section_wordpress_include_tags">WordPress Include Tags</a></h4>
<ul>
<li><a href="#comments_template">comments_template()</a></li>
<li><a href="#get_footer">get_footer()</a></li>
<li><a href="#get_header">get_header()</a></li>
<li><a href="#get_search_form">get_search_form()</a></li>
<li><a href="#get_sidebar">get_sidebar()</a></li>
<li><a href="#get_template_part">get_template_part()</a></li>
</ul>
<h4><a href="#section_wordpress_conditional_tags">WordPress Conditional Tags</a></h4>
<ul>
<li><a href="#comments_open">comments_open()</a></li>
<li><a href="#has_nav_menu">has_nav_menu()</a></li>
<li><a href="#have_comments">have_comments()</a></li>
<li><a href="#have_posts">have_posts()</a></li>
<li><a href="#is_404">is_404()</a></li>
<li><a href="#is_archive">is_archive()</a></li>
<li><a href="#is_author">is_author()</a></li>
<li><a href="#is_category">is_category()</a></li>
<li><a href="#is_day">is_day()</a></li>
<li><a href="#is_feed">is_feed()</a></li>
<li><a href="#is_home">is_home()</a></li>
<li><a href="#is_month">is_month()</a></li>
<li><a href="#is_page">is_page()</a></li>
<li><a href="#is_search">is_search()</a></li>
<li><a href="#is_single">is_single()</a></li>
<li><a href="#is_singular">is_singular()</a></li>
<li><a href="#is_tag">is_tag()</a></li>
<li><a href="#is_user_logged_in">is_user_logged_in()</a></li>
<li><a href="#is_year">is_year()</a></li>
<li><a href="#post_password_required">post_password_required()</a></li>
<li><a href="#wp_attachment_is_image">wp_attachment_is_image()</a></li>
</ul>
<h4><a href="#section_wordpress_hooks">WordPress Hooks</a></h4>
<ul>
<li><a href="#hook_after_setup_theme">after_setup_theme</a></li>
<li><a href="#hook_get_comments_number">get_comments_number</a></li>
<li><a href="#hook_widgets_init">widgets_init</a></li>
<li><a href="#hook_wp_enqueue_scripts">wp_enqueue_scripts</a></li>
<li><a href="#hook_wp_footer">wp_footer</a></li>
<li><a href="#hook_wp_head">wp_head</a></li>
<li><a href="#hook_wp_title">wp_title</a></li>
</ul>
<h4><a href="#section_wordpress_global_variables">WordPress Global Variables</a></h4>
<ul>
<li><a href="#var_page">$page</a></li>
<li><a href="#var_paged">$paged</a></li>
<li><a href="#var_post">$post</a></li>
<li><a href="#var_wpdb">$wpdb</a></li>
</ul>
<h4><a href="#section_wordpress_constants">WordPress Constants</a></h4>
<ul>
<li><a href="#const_header_image_height">HEADER_IMAGE_HEIGHT</a></li>
<li><a href="#const_header_image_width">HEADER_IMAGE_WIDTH</a></li>
<li><a href="#const_header_textcolor">HEADER_TEXTCOLOR</a></li>
<li><a href="#const_no_header_text">NO_HEADER_TEXT</a></li>
</ul>
</li>
<li>
<h4><a href="#section_php_functions">PHP Functions</a></h4>
<ul>
<li><a href="#_server">$_SERVER[]</a></li>
<li><a href="#array_map">array_map()</a></li>
<li><a href="#array_reverse">array_reverse()</a></li>
<li><a href="#array_values">array_values()</a></li>
<li><a href="#basename">basename()</a></li>
<li><a href="#count">count()</a></li>
<li><a href="#create_function">create_function()</a></li>
<li><a href="#date">date()</a></li>
<li><a href="#define">define()</a></li>
<li><a href="#max">max()</a></li>
<li><a href="#number_format">number_format()</a></li>
<li><a href="#preg_replace">preg_replace()</a></li>
<li><a href="#require">require()</a> /<br /><a href="#require">require_once()</a></li>
<li><a href="#sprintf">sprintf()</a></li>
<li><a href="#str_replace">str_replace()</a></li>
<li><a href="#trim">trim()</a></li>
<li><a href="#urldecode">urldecode()</a></li>
</ul>
<h4><a href="#section_php_conditionals">PHP Conditionals</a></h4>
<ul>
<li><a href="#file_exists">file_exists()</a></li>
<li><a href="#filesize">filesize()</a></li>
<li><a href="#function_exists">function_exists()</a></li>
<li><a href="#is_array">is_array()</a></li>
<li><a href="#isset">isset()</a></li>
</ul>
<h4><a href="#section_oenology_custom_functions">Oenology Custom Functions</a></h4>
<ul>
<li><a href="#oenology_404_handler">oenology_404_handler()</a></li>
<li><a href="#oenology_admin_header_style">oenology_admin_header_style()</a></li>
<li><a href="#oenology_breadcrumb">oenology_breadcrumb()</a></li>
<li><a href="#oenology_comment_count">oenology_comment_count()</a></li>
<li><a href="#oenology_copyright">oenology_copyright()</a></li>
<li><a href="#oenology_filter_wp_title">oenology_filter_wp_title()</a></li>
<li><a href="#oenology_gallery_image_meta">oenology_gallery_image_meta()</a></li>
<li><a href="#oenology_gallery_links">oenology_gallery_links()</a></li>
<li><a href="#oenology_header_style">oenology_header_style()</a></li>
<li><a href="#oenology_load_widgets">oenology_load_widgets()</a></li>
<li><a href="#oenology_setup">oenology_setup()</a></li>
<li><a href="#oenology_setup_widgets">oenology_setup_widgets()</a></li>
<li><a href="#oenology_show_current_cat_on_single">oenology_show_current_cat<br />_on_single()</a></li>
<li><a href="#oenology_widget_archives">oenology_widget_archives()</a></li>
<li><a href="#oenology_widget_categories">oenology_widget_categories()</a></li>
<li><a href="#oenology_widget_linkrollbycat">oenology_widget_linkrollbycat()</a></li>
<li><a href="#oenology_widget_recentposts">oenology_widget_recentposts()</a></li>
<li><a href="#oenology_widget_tags">oenology_widget_tags()</a></li>
</ul>
<h4><a href="#section_other_custom_functions">Other Custom Functions</a></h4>
<ul>
<li><a href="#wp_paginate">wp_paginate()</a></li>
</ul>
</li>
</ul>

<!-- ====================================================================================================================================== -->
<hr style="clear:both;" />

<div id="oenologycoderef">

<h2 id="section_wordpress_functions">WordPress Functions</h2>

<h3 id="add_action">add_action()</h3>
<div class="coderefdetail">
<p><code>add_action()</code> is a WordPress function.</p>
<ul>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_action">add_action()</a></li>
</ul>

<p><code>add_action()</code> is used to hook a function into a WordPress action</p>

<p><code>add_action( $tag, $function_to_add, $priority, $accepted_args )</code> accepts four arguments:</p>
<ul>
<li><code>$tag:</code> WordPress action into which to hook the function.<ul>
<li>(<em>required</em>)(string) Default: <code>null</code></li>
</ul></li>
<li><code>$function_to_add:</code> function to hook into the WordPress action.<ul>
<li>(<em>required</em>)(callback) Default: <code>null</code></li>
</ul></li>
<li><code>$priority:</code> relative priority (order of execution, lower numbers execute sooner) of function.<ul>
<li>(<em>optional</em>)(integer) Default: <code>10</code></li>
</ul></li>
<li><code>$accepted_args:</code> number of arguments accepted by function being hooked.<ul>
<li>(<em>optional</em>)(integer) Default: <code>1</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul>
<li><code>add_action( 'after_setup_theme', 'oenology_setup', 10 );</code><br />
<small>Hooks custom function oenology_setup() into the "after_setup_theme" action, with the default priority</small></li>
</ul>

<p>Used in the following template files:</p>
<ul>
<li>functions.php</li>
</ul>
</div>

<h3 id="add_custom_background">add_custom_background()</h3>
<div class="coderefdetail">
<p><code>add_custom_background()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_background">add_custom_background()</a></li></ul>

<p><code>add_custom_background()</code> is used to add Theme support for WordPress custom background functionality</p>

<p><code>add_custom_background( $header_callback, $admin_header_callback, $admin_image_div_callback )</code> accepts three arguments:</p>
<ul>
<li><code>$header_callback</code>: Callback to add to "wp_head".<ul>
<li>(<em>optional</em>)(callback) Default: <code>none</code></li>
</ul></li>
<li><code>$admin_header_callack</code>: Callback to add to Custom Background admin screen.<ul>
<li>(<em>optional</em>)(callback) Default: <code>none</code></li>
</ul></li>
<li><code>$admin_image_div_callback</code>: Output a custom background image div on Custom Background admin screen.<ul>
<li>(<em>optional</em>)(callback) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul>
<li><code>add_custom_background();</code><br />
<small>Adds custom background support to Theme, with no default background image defined.</small></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="add_custom_image_header">add_custom_image_header()</h3>
<div class="coderefdetail">
<p><code>add_custom_image_header()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_image_header">add_custom_image_header()</a></li></ul>

<p><code>add_custom_image_header()</code> is used to add Theme support for WordPress custom background functionality</p>

<p><code>add_custom_image_header( $header_callback, $admin_header_callback )</code> accepts two arguments:</p>
<ul>
<li><code>$header_callback</code>: Callback to add to "wp_head".<ul>
<li>(<em>optional</em>)(callback) Default: <code>none</code></li>
</ul></li>
<li><code>$admin_header_callback</code>: Callback to add to Custom Image Header admin screen.<ul>
<li>(<em>optional</em>)(callback) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>add_custom_image_header( 'oenology_header_style', 'oenology_admin_header_style' );</code><br />
<small>Adds custom image header support to Theme, using header style defined in custom function
<code>oenology_header_style()</code>, and Custom Image Header admin screen style defined in custom function
<code>oenology_admin_header_style()</code>.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="add_editor_style">add_editor_style()</h3>
<div class="coderefdetail">
<p><code>add_editor_style()</code> is a WordPress template tag.</p>
Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_editor_style">add_editor_style()</a>

<p><code>add_editor_style()</code> is used to add Theme support for WordPress custom visual editor style functionality</p>

<p><code>add_editor_style( $stylesheet )</code> accepts one argument:</p>
<ul>
<li><code>$stylesheet</code>: name (without file extension) of the CSS file that contains the custom editor style
 definitions.<ul>
<li>(<em>optional</em>)(string) Default: <code>'editor-style'</code> ('editor-style.css')</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>add_editor_style();</code><br />
<small>Adds custom visual editor style support to Theme, with styles defined in CSS file editor-style.css.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="add_filter">add_filter()</h3>
<div class="coderefdetail">
<p><code>add_filter()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_filter">add_filter()</a></li></ul>

<p><code>add_filter()</code> is used to hook a function into a WordPress action</p>

<p><code>add_filter( $tag, $function_to_add, $priority, $accepted_args )</code> accepts four arguments:</p>
<ul>
<li><code>$tag</code>: WordPress filter into which to hook the function.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
</ul></li>
<li><code>$function_to_add</code>: function to hook into the WordPress filter.<ul>
<li>(<em>required</em>)(callback) Default: <code>none</code></li>
</ul></li>
<li><code>$priority</code>: relative priority (order of execution, lower numbers execute sooner) of function.<ul>
<li>(<em>optional</em>)(integer) Default: <code>10</code></li>
</ul></li>
<li><code>$accepted_args</code>: number of arguments accepted by function being hooked.<ul>
<li>(<em>optinal</em>)(integer) Default: <code>1</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>add_filter('get_comments_number', 'oenology_comment_count', 0);</code><br />
<small>Hooks custom function <code>oenology_comment_count()</code> into the <code>get_comment_count</code> filter, 
with the highest priority (0)</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="add_image_size">add_image_size()</h3>
<div class="coderefdetail">
<p><code>add_image_size()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_image_size">add_image_size()</a></li></ul>

<p><code>add_image_size()</code> is used to define a custom thumbnail image size, which will be generated
along with the default sizes of "Original", "Large", "Medium", "Small", and "Thumbnail".</p>

<p><code>add_image_size( $name, $width, $height, $crop )</code> accepts four arguments:</p>
<ul>
<li><code>$name</code>: Name of the custom Image Size to be added.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code>.</li>
</ul></li>
<li><code>$width</code>: Width (in pixels) of the custom image.<ul>
<li>(<em>required</em>)(integer) Default: <code>0</code>.</li>
</ul></li>
<li><code>$height</code>: Height (in pixels) of the custom image.<ul>
<li>(<em>required</em>)(integer) Default: <code>0</code>.</li>
</ul></li>
<li><code>$crop</code>: crop method:<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: hard crop mode</li>
<li><code>false</code>: soft (proportional/box-resize) crop mode</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>add_image_size( 'attachment-nav-thumbnail', 45, 45, true );</code><br />
<small>Adds a custom image size <code>attachment-nav-thumbnail</code>, 45px wide, 45px in height, hard-cropped.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="add_theme_support">add_theme_support()</h3>
<div class="coderefdetail">
<p><code>add_theme_support()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_theme_support">add_theme_support()</a></li></ul>

<p><code>add_theme_support()</code> is used to add Theme support for the specified functionality</p>

<p><code>add_theme_support( $feature )</code> accepts one argument:</p>
<ul>
<li><code>$feature</code>: feature for which to add Theme support.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
<li><code>'automatic-feed-links'</code>: Automatically place feed links in document head</li>
<li><code>'post-thumbnails'</code>: Enable support for Post Thumbnails feature</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="apply_filters">apply_filters()</h3>
<div class="coderefdetail">
<p><code>apply_filters()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/apply_filters">apply_filters()</a></li></ul>

<p><code>apply_filters()</code> is used to call the functions added to a filter hook, and apply them to a specified value.</p>

<p><code>apply_filters( $tag, $value )</code> accepts two arguments:</p>
<ul>
<li><code>$tag</code>: the name of the filter hook.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code>.</li>
</ul></li>
<li><code>$value</code>: the value to be modified by the specified filter hook.<ul>
<li>(<em>optional</em>)(mixed) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Examples:</p>
<ul>
<li><code>apply_filters( 'oenology_header_image_width', 1000 ) );</code><br />
<small>Applies the value of 1000 (px) to the <code>oenology_header_image_width</code> filter hook.</small></li>
<li><code>$title = apply_filters( 'widget_title', empty($instance['title']) ? 'oenology Recent Posts' : $instance['title'] );</code><br />
<small>Applies a string (based on a shorthand conditional) to the <code>widget_title</code> filter hook, and sets that value 
 to the variable <code>$title</code>.</small></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="dynamic_sidebar">dynamic_sidebar()</h3>
<div class="coderefdetail">
<p><code>dynamic_sidebar()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/dynamic_sidebar">dynamic_sidebar()</a></li></ul>

<p><code>dynamic_sidebar()</code> is used to insert widgetized areas ("sidebars") into a Theme.</p>

<p>Dynamic sidebars must be defined and registered. Refer to functions.php for more information.</p>

<p><code>dynamic_sidebar( $index )</code> accepts one argument:</p>
<ul>
<li><code>$index</code>: name of the dynamic sidebar to include.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>dynamic_sidebar( 'foo' )</code><br />
<small>Inserts a dynamic sidebar named "foo".</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>sidebar-left.php</li><li>sidebar-right.php</li></ul>
</div>
	
<h3 id="get_option">get_option()</h3>
<div class="coderefdetail">
<p><code>get_option()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_option">get_option()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Option_Reference">Option Reference</a></li></ul>

<p><code>get_option()</code> is used to return the value of a specified database option.
If the option does not exist or has no value, the function returns FALSE.</p>

<p><code>get_option()</code> returns, but does not print (output/display) the value requested. To 
print this value, use <code>'echo get_option()'</code>.</p>

<p><code>get_option( $show, $default )</code> accepts two arguments:</p>
<ul>
<li><code>$show</code>: the database option for which to return a value<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
<li>See the Codex Option Reference page for the full list of options.</li>
</ul></li>
<li><code>$default</code>: the value to return if the option does not exist, or has no value.<ul>
<li>(<em>optional</em>)(mixed) Default: <code>false</code></li>
</ul></li>
</ul>

<p>Examples:</p>
<ul>
<li><code>if ( 'posts' == get_option( 'show_on_front' ) )</code><br />
<small>returns TRUE if the "Show On Front" option is set to display blog posts, and
   returns FALSE if the "Show On Front" option is set to display a static page</small></li>
<li><code>get_option( 'page_comments' )</code><br />
<small>returns <code>TRUE</code> if the "Paged Comments" option is true; otherwise returns <code>FALSE</code></small></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>comments.php</li><li>header.php</li><li>site-navigation.php</li></ul>
</div>

<h3 id="get_queried_object">get_queried_object()</h3>
<div class="coderefdetail">
<p><code>get_queried_object()</code> is a property of the WordPress WP_Query class.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/WP_Query">WP_Query</a></li></ul>

<p><code>get_queried_object()</code> is used to return information about the current 
category, author, permalink, or page. 
<code>get_queried_object()</code> returns an object that contains the specified information.</p>

<p><code>get_queried_object()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>$my_obj = $wp_query->get_queried_object();</code><br />
<small>returns object <code>$my_obj</code> that contains the specified information from <code>$wp_query</code>.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="get_query_var">get_query_var()</h3>
<div class="coderefdetail">
<p><code>get_query_var()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_query_var">get_query_var()</a></li></ul>

<p><code>get_query_var()</code> is used to return the specified variable from the <code>$wp_query</code> object.</p>

<p><code>get_query_var( $var )</code> accepts one argument:</p>
<ul>
<li><code>$var</code>: the query variable to return.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Examples:</p>
<ul>
<li><code>get_query_var('paged');</code><br />
<small>Returns the current page number of an index page (home, archive, etc.)</small></li>
<li><code>get_query_var('page');</code><br />
<small>Returns the current page number of a Post or Page</small></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>
	
<h3 id="get_stylesheet_uri">get_stylesheet_uri()</h3>
<div class="coderefdetail">
<p><code>get_stylesheet_uri()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_stylesheet_uri">get_stylesheet_uri()</a></li></ul>

<p><code>get_stylesheet_uri()</code> is used to get the URL of the Theme
style sheet (style.css).</p>

<p><code>get_stylesheet_uri()</code> returns, but does not print/display, the value requested.<br />
<code>echo get_stylesheet_uri()</code> prints/displays the value requested.</p>

<p><code>get_stylesheet_uri()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>echo get_stylesheet_uri();</code><br />
<small>prints e.g. "http://www.mydomain.tld/wp-content/themes/my-theme/style.css"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>header.php</li></ul>
</div>

<h3 id="get_theme_root">get_theme_root()</h3>
<div class="coderefdetail">
<p><code>get_theme_root()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_theme_root">get_theme_root()</a></li></ul>

<p><code>get_theme_root()</code> is used to retrieve the file path to the directory in which 
Themes are installed (e.g. 'home/username/html/wp-content/themes'). <br />
Note that the returned string has no trailing slash.</p>

<p><code>get_theme_root()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="get_userdata">get_userdata()</h3>
<div class="coderefdetail">
<p><code>get_userdata()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_userdata">get_userdata()</a></li></ul>

<p><code>get_userdata()</code> is used to return an object containing user data for the specified user.</p>

<p><code>get_userdata( $userid )</code> accepts one argument:</p>
<ul>
<li><code>$userid</code>: the ID of the user for which to return data.<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>$user_info = get_userdata( $id );</code><br />
<small>Returns the following object values (not inclusive):
<ul>
<li><code>$user_info->user_login</code></li>
<li><code>$user_info->user_pass</code></li>
<li><code>$user_info->user_nicename</code></li>
<li><code>$user_info->user_email</code></li>
<li><code>$user_info->user_url</code></li>
<li><code>$user_info->user_registered</code></li>
<li><code>$user_info->display_name</code></li>
<li><code>$user_info->user_firstname</code></li>
<li><code>$user_info->user_lastname</code></li>
<li><code>$user_info->nickname</code></li>
<li><code>$user_info->user_description</code></li>
</ul></small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="header_image">header_image()</h3>
<div class="coderefdetail">
<p><code>header_image()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/header_image">header_image()</a></li></ul>

<p><code>header_image()</code> is used to display the path to the header image.</p>

<p><code>header_image()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="home_url">home_url()</h3>
<div class="coderefdetail">
<p><code>home_url()</code> is a WordPress function</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/home_url">home_url()</a></li></ul>

<p><code>home_url()</code> is used to return the home URL (the 'home' option), using the appropriate protocol 
(http or https), based on value of <code>is_ssl()</code>.</p>

<p><code>home_url()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>home_url();</code><br />
<small>returns e.g. "http://www.domain.tld"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>footer.php</li><li>infobar.php</li><li>site-navigation.php</li></ul>
</div>

<h3 id="register_default_headers">register_default_headers()</h3>
<div class="coderefdetail">
<p><code>register_default_headers()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/register_default_headers">register_default_headers()</a></li></ul>

<p><code>register_default_headers()</code> is used to register default header images available through the
Custom Header admin option page, as part of the Custom Image Header feature.</p>

<p><code>register_default_headers( $array )</code> accepts one argument:</p>
<ul>
<li><code>$array</code>: array of arrays containing the following key pairs:<ul>
<li>(<em>required</em>)(array) Default: <code>none</code></li>
<li><code>'url'</code> => 'url/path/to/header/image'</li>
<li><code>'thumbnail_url'</code> => 'url/path/to/header/image/thumbnail'</li>
<li><code>'description'</code> => 'Description of the header image'</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="register_nav_menus">register_nav_menus()</h3>
<div class="coderefdetail">
<p><code>register_nav_menus()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/register_nav_menus">register_nav_menus()</a></li></ul>

<p><code>register_nav_menus()</code> is used to register Navigation Menu locations, as part of the 
Navigation Menus feature.</p>

<p><code>register_nav_menus( $array )</code> accept one argument:</p>
<ul>
<li><code>$array</code>: an array of key pairs, as $location => $description<ul>
<li>(<em>required</em>)(array) Default: <code>none</code></li>
<li><code>$location</code>: the menu location, used to add the Menu to a Theme template file</li>
<li><code>$description</code>: description of the menu location, used on the Menus admin option page</li>
</ul></li>
</ul>
<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="register_sidebar">register_sidebar()</h3>
<div class="coderefdetail">
<p><code>register_sidebar()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/register_sidebar">register_sidebar()</a></li></ul>

<p><code>register_sidebar()</code> is used to register dynamic (Widgetized) sidebar locaions, as part of the Widgets feature.</p>

<p><code>register_sidebar( $array )</code> accepts one argument, as an array:</p>
<ul>
<li><code>$array:</code> array containing the following key pairs:<ul>
<li>(<em>required</em>)(array) Default: <code>none</code></li>
<li><code>'name'</code> => 'sidebar_name'</li>
<li><code>'description'</code> => 'Description of the sidebar'</li>
<li><code>'before_widget'</code> => 'HTML to output before the widget'</li>
<li><code>'after_widget'</code> => 'HTML to output after the widget'</li>
<li><code>'before_title'</code> => 'HTML to output before the widget title'</li>
<li><code>'after_title'</code> => 'HTML to output after the widget title'</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="register_widget">register_widget()</h3>
<div class="coderefdetail">
<p><code>register_widget()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/register_widget">register_widget()</a></li></ul>

<p><code>register_widget()</code> is used to register a custom Theme Widget.</p>

<p><code>register_widget( $widget )</code> accepts one argument:</p>
<ul><li><code>$widget</code>: function that defines the Widget being registered.<ul>
<li>(<em>required</em>)(callback) Default: <code>none</code></li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="set_post_thumbnail_size">set_post_thumbnail_size()</h3>
<div class="coderefdetail">
<p><code>set_post_thumbnail_size()</code> is a WordPress function.</p>
<ul><li>Codex reference: http://codex.wordpress.org/Function_Reference/the_post_thumbnail</li></ul>

<p><code>set_post_thumbnail_size()</code> is used to define the default size for an image thumbnail,
for use with <code>the_post_thumbnail()</code>.</p>

<p><code>set_post_thumbnail_size( $width, $height, $crop )</code> accepts arguments:</p>
<ul>
<li><code>$width</code>: image thumbnail width, in pixels.<ul>
<li>(<em>required</em>)(integer) Default: <code>0</code></li>
</ul></li>
<li><code>$height</code>: image thumbnail height, in pixels.<ul>
<li>(<em>required</em>)(integer) Default: <code>0</code></li>
</ul></li>
<li><code>$crop</code>: whether thumbnail should be cropped.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: hard-crop: image is resized and cropped to match the specified dimensions exactly</li>
<li><code>false</code>: soft-crop (box-resize): image is resized proportionally</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="size_format">size_format()</h3>
<div class="coderefdetail">
<p><code>size_format()</code> is a WordPress function.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>size_format()</code> is used to format filesizes into human-readable.</p>
formats, from bytes into KB, MB, etc.

<p><code>size_format()</code> takes a value in bytes, and returns the same value 
in KiB, MiB (where 1 MiB = 1024 B), with units "MB", "KB", etc.</p>

<p><code>size_format( $bytes, $decimals )</code> accepts two arguments:</p>
<ul>
<li><code>$bytes</code>: filesize value (up to 32bits)<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$decimals</code>: decimal places to return.<ul>
<li>(<em>optional</em>)(integer) Default: <code>0</code>.</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>size_format( '1048576' );</code><br />
<small>returns "1 MB"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="wp_enqueue_script">wp_enqueue_script()</h3>
<div class="coderefdetail">
<p><code>wp_enqueue_script()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script">wp_enqueue_script()</a></li></ul>

<p><code>wp_enqueue_script()</code> is used as a safe way to add JavaScript to displayed pages. WordPress 
maintains a "queue" of javascript files to load when a page is displayed. The <code>wp_enqueue_script()</code>
filter enables a Theme or Plugin to add its own javascript files to this queue. </p>

<p>Using <code>wp_enqueue_script()</code> facilitates the addition of javascript files only on pages where they
are needed, and will ensure that the same javascript file (e.g. jQuery) is not loaded multiple times.</p>

<p><code>wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );</code> accepts five arguments:</p>
<ul>
<li><code>$handle</code>: handle (name) of the script.<ul>
<li>(<em>required</em>)(string) Default: <code>null</code></li>
</ul></li>
<li><code>$src</code>: URL path to script file.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code></li>
</ul></li>
<li><code>$deps</code>: script dependencies.<ul>
<li>(<em>optional</em>)(array) Default: <code>null</code></li>
</ul></li>
<li><code>$ver</code>: script version number.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code></li>
</ul></li>
<li><code>$in_footer</code>: whether to output script in the footer.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: output script in footer, via <code>wp_footer</code> hook.</li>
<li><code>false</code>: (<em>default</em>) output script in header, via <code>wp_head</code> hook.</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>header.php</li></ul>
</div>

<h3 id="wp_upload_dir">wp_upload_dir()</h3>
<div class="coderefdetail">
<p><code>wp_upload_dir()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_upload_dir">wp_upload_dir()</a></li></ul>

<p><code>wp_upload_dir()</code> is used to return an array of information regarding the
current upload directory.</p>

<p><code>wp_upload_dir()</code> returns the following $key => $value pairs:</p>
<ul>
<li><code>[path]</code> - base directory and sub directory or full path to upload directory</li>
<li><code>[url]</code> - base url and sub directory or absolute URL to upload directory.</li>
<li><code>[subdir]</code> - sub directory if uploads use year/month folders option is on.</li>
<li><code>[basedir]</code> - path without subdir.</li>
<li><code>[baseurl]</code> - URL path without subdir.</li>
<li><code>[error]</code> - set to false.</li>
</ul>

<p><code>wp_upload_dir( $time )</code> accepts one argument:</p>
<ul>
<li><code>$time</code>: year/month upload directory (if this option is configured).<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code>.</li>
<li><code>'yyyy/mm'</code>: required string format</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>$upload_dir = wp_upload_dir();<br />
echo $upload_dir['baseurl'];</code><br />
<small>returns "http://www.mydomain.tld/wp-content/uploads/"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_template_tags">WordPress Template Tags</h2>

<p>Codex Reference: <a href="http://codex.wordpress.org/Template_Tags">Template Tags</a></p>

<h3 id="body_class">body_class()</h3>
<div class="coderefdetail">
<p><code>body_class()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/body_class">body_class()</a></li></ul>

<p><code>body_class()</code> is added inside the HTML &lt;body&gt; tag, and outputs various CSS class
declarations, depending on which page is currently being displayed.</p>

<p>For the full list of CSS classes returned by body_class(), see the Codex.</p>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>page.php</li></ul>
</div>

<h3 id="category_description">category_description()</h3>
<div class="coderefdetail">
<p><code>category_description()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/category_description">category_description()</a></li></ul>

<p><code>category_description()</code> is used to display the description for the current category.</p>

<p><code>category_description( $cat )</code> accepts one argument:</p>
<ul><li><code>$cat</code>: category (ID) for which to display the description.<ul>
<li>(<em>optional</em>)(integer) Default: current category.</li></ul>

<p><code>category_description()</code> must be used within the Loop, unless given a category ID 
 using the <code>$cat</code> argument.</p>
 
<p>Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
</div>

<h3 id="comment_form">comment_form()</h3>
<div class="coderefdetail">
<p><code>comment_form()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/comment_form">comment_form()</a></li></ul>

<p><code>comment_form()</code> is used to output the comment reply form in the comments section
of a Post or Page.</p>

<p><code>comment_form()</code> accepts two arguments:</p>
<ul>
<li><code>$args</code>: ampersand (&) joined list of arguments.<ul>
<li>(<em>optional</em>)(array) Default: See the Codex reference for full list.</li>
</ul></li>
<li><code>$postid</code>: ID of the post to which the comment form should post comments.<ul>
<li>(<em>optional</em>)(integer) Default: current post.</li>
</ul>
<p>Example:</p>
<ul><li><code>comment_form();</code><br />
<small>Outputs the comment reply form markup.</small></li></ul>

<p><code>comment_form()</code> must be used from within the Loop, unless the $postid parameter is used.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="comments_link">comments_link()</h3>
<div class="coderefdetail">
<p><code>comments_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/comments_link">comments_link()</a></li></ul>

<p><code>comments_link()</code> is used to display the URL to the current post's comments. This tag
returns the URL only, rather than the full HTML anchor-tag link.</p>

<p><code>comments_link()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>&lt;a href="comments_link();"&gt;Comments&lt;/a&gt;</code></li></ul>

<p><code>comments_link()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="comments_number">comments_number()</h3>
<div class="coderefdetail">
<p><code>comments_number()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/comments_number">comments_number()</a></li></ul>

<p><code>comments_number()</code> is used to display the number of comments (including 
comments, trackbacks, and pingbacks) on the current post.</p>

<p><code>comments_number( $zero, $one, $more )</code> accepts three arguments:</p>
<ul>
<li><code>$zero</code>: text to display for 0 comments.<ul>
<li>(<em>optional</em>)(string) Default: <code>'No comments'</code></li>
</ul></li>
<li><code>$one</code>: text to display for 1 comment.<ul>
<li>(<em>optional</em>)(string) Default: <code>'1 comment'</code></li>
</ul></li>
<li><code>$more</code>: text to display for multiple comments.<ul>
<li>(<em>optional</em>)(string) Default: <code>'% comments'</code> (where <code>%</code> represents the number of comments)</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>comments_number('0','1','%'); </code>
<small>displays:<ul>
<li>'0' if 0 comments</li>
<li>'1' if 1 comment</li>
<li>'#' (actual number of comments) if multiple comments</li>
</ul></small></li></ul>

<p><code>comments_number()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php, post-header.php</li></ul>
</div>

<h3 id="edit_post_link">edit_post_link()</h3>
<div class="coderefdetail">
<p><code>edit_post_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/edit_post_link">edit_post_link()</a></li></ul>

<p><code>edit_post_link()</code> is used to display a link to edit the current post. This link only
displays if the current user is logged in and has the <code>edit_post</code> capability
(typically, Admins, Editors, and Authors). </p>

<p><code>edit_post_link()</code> returns the full HTML anchor tag, rather than just the URL of the edit-post
link. To retrieve just the URL, use <code>get_edit_post_link()</code>.</p>

<p><code>edit_post_link( $link, $before, $after, $id )</code> accepts four arguments:</p>
<ul>
<li><code>$link</code>: link text to display.<ul>
<li>(<em>optional</em>)(string) Default: <code>'Edit This'</code></li>
</ul></li>
<li><code>$before</code>: text to display before link.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text).</li>
</ul></li>
<li><code>$after</code>: text to display after link.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text).</li>
</ul></li>
<li><code>$id</code>: ID of post to be edited.<ul>
<li>(<em>optional</em>)(integer) Default: ID of current post.</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>edit_post_link( 'Edit' );</code><br />
<small>Displays: "&lt;a href='[link to post edit screen]'&gt;Edit&lt;/a&gt;"</small></li></ul>

<p><code>edit_post_link()</code> must be used within the Loop, unless the $id argument is specified.</p>

<p>Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="get_avatar">get_avatar()</h3>
<div class="coderefdetail">
<p><code>get_avatar()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_avatar">get_avatar()</a></li></ul>

<p><code>get_avatar()</code> is used to display the Post ID for the current post.

<p><code>get_avatar( $id_or_email, $size, $default, $alt )</code>  accepts four arguments:</p>
<ul>
<li><code>$id_or_email</code>: UserID or email address.<ul>
<li>(<em>required</em>)(mixed) Default: <code>none</code></li>
</ul></li>
<li><code>$size</code>: width/height (in pixels) of the displayed avatar.<ul>
<li>(<em>optional</em>)(integer) Default: <code>96</code></li>
</ul></li>
<li><code>$default</code>: URL for default image to display if the user has no defined avatar.<ul>
<li>(<em>optional</em>)(string) Defaults to "Mystery Man"</li>
</ul></li>
<li><code>$alt</code>: alt text to display for avatar image.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no alt text)</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>echo get_avatar( get_the_author_meta('email'), $size = '20');</code><br />
<small>Displays a 20x20px avatar for the post author.</small></li></ul>

<p>To get the Avatar without displaying it, omit "echo" in the function call to <code>get_avatar()</code>.</p>

<p>Used in the following template files:</p>
<ul><li>post-footer.php</li></ul>
</div>

<h3 id="get_bloginfo">get_bloginfo()/bloginfo()</h3>
<div class="coderefdetail">
<p><code>get_bloginfo()</code> and <code>bloginfo()</code> are WordPress template tags.  </p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_bloginfo">get_bloginfo()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/bloginfo">bloginfo()</a></li></ul>

<p><code>bloginfo()</code> can be used to print several useful WordPress-related parameters.</p>

<p><code>get_bloginfo()</code> returns, but does not print/display, the data requested.<br />
<code>bloginfo()</code> prints/displays the data requested.</p>

<p><code>bloginfo( $show )</code> accepts one argument;<br />
<code>get_bloginfo( $show, $filter )</code> accepts two arguments:</p>
<ul>
<li><code>$show</code>: parameter to be returned.<ul>
<li>(<em>optional</em>)(string) Default: <code>'name'</code></li>
<li><code>'charset'</code> = (character set defined for the blog (see wp-config.php); usually UTF-8)</li>
<li><code>'description'</code> =  (blog description, as defined on the General Settings page in the administration panel)</li>
<li><code>'html_type'</code> =  (HTML type, as defined on the General Settings page in the administration panel. Usually "text/html")</li>
<li><code>'name'</code> =  (blog name, as defined on the General Settings page in the administration panel)</li>
<li><code>'version'</code> = (version of WordPress installed)
<li>For the full list of parameters returned, see the Codex.</li>
</ul></li>
<li><code>$filter</code>: how to filter returned parameter.<ul>
<li>(<em>optional</em>)(string) Default: <code>'raw'</code></li>
<li><code>'Display'</code> = pass the returned value through <code>wptexturize()</code> before returning</li>
<li><code>'raw'</code> = display returned value as-is, with no filter</li>
</ul></li>
</ul>

<p><code>get_bloginfo()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>bloginfo()</code>: Used in the following template files:</p>
<ul><li>footer.php</li><li>functions.php</li><li>header.php</li><li>loop-header.php</li><li>site-header.php</li></ul>
</div>

<h3 id="get_category">get_category()/get_the_category()/the_category()/wp_get_post_categories()</h3>
<div class="coderefdetail">
<code>get_category()</code>/<code>get_the_category()</code>/<code>the_category()</code> are WordPress template tags.
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_category">get_category()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_category">get_the_category()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_category">the_category()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_get_post_categories">wp_get_post_categories()</a></li></ul>

<p><code>get_category()</code> returns an object that contains the data for the specified category.<br />
<code>get_the_category()</code> returns and object that contains data for categories for the specified post.<br />
<code>the_category()</code> displays a list of links to categories for the specified post.<br />
<code>wp_get_post_categories()</code> returns the list of category IDs for a post.</p>

<p><code>get_category()</code>/<code>get_the_category()</code>/<code>wp_get_post_categories()</code> return, 
 but do not print/display, the data requested.<br />
<code>the_category()</code> prints/displays the data requested.</p>

<p><code>get_tcategory()</code> returns an object or array of data for the specified category. The returned 
object includes the following variables:</p>
<ul>
<li><code>$cat->cat_ID</code>: the ID of the category</li>
<li><code>$cat->cat_name</code>: the name of the category</li>
<li><code>$cat->category_nicename</code>: the nicename (slug) of the category</li>
<li><code>$cat->category_description</code>: the description of the category</li>
<li><code>$cat->category_parent</code>: the name of the parent category of the category</li>
<li><code>$cat->category_count</code>: the count of posts included in the category</li>
</ul>

<p><code>get_the_category()</code> returns an object of categories. The returned 
object includes the following variables for each category:</p>
<ul>
<li><code>$cat[n]->cat_ID</code>: the ID of category 'n'</li>
<li><code>$cat[n]->cat_name</code>: the name of category 'n'</li>
<li><code>$cat[n]->category_nicename</code>: the nicename (slug) of category 'n'</li>
<li><code>$cat[n]->category_description</code>: the description of category 'n'</li>
<li><code>$cat[n]->category_parent</code>: the name of the parent category of category 'n'</li>
<li><code>$cat[n]->category_count</code>: the count of posts included in category 'n'</li>
</ul>

<p><code>wp_get_post_categories()</code> returns an array of Category IDs.</p>

<p><code>get_category( $category, $output, $filter )</code> accepts three arguments:</p>
<ul>
<li><code>$category</code>: category ID for which to return the category array.<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$output</code>: post ID for which to return the category array.<ul>
<li>(<em>optional</em>)(string) Default: <code>'OBJECT'</code></li>
<li><code>'OBJECT'</code> = return as an object</li>
<li><code>'ARRAY_A'</code> = return as an associative array</li>
<li><code>'ARRAY_N'</code> = return as a numerically indexed array</li>
</ul></li>
<li><code>$filter</code>: how to filter returned parameter.<ul>
<li>(<em>optional</em>)(string) Default: <code>'raw'</code></li>
<li><code>'raw'</code> = display returned value as-is, with no filter</li>
</ul></li>
</ul>

<p><code>get_the_category( $id )</code> accepts one argument:</p>
<ul>
<li><code>$id</code>: post ID for which to return the category array.<ul>
<li>(<em>optional</em>)(integer) Default: current post ID.</li>
</ul></li>
</ul>

<p><code>the_category( $separator, $parents, $id )</code> accepts three arguments:</p>
<ul>
<li><code>$separator</code>: string placed between categories.<ul>
<li>(<em>optional</em>)(string) Default: unordered list.</li>
</ul></li>
<li><code>$parents</code>: determines how to display links to child categories.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code></li>
<li><code>'single'</code>: Display link to each category, exhibiting parent/child relationship</li>
<li><code>'multiple'</code>: Display a link to child category only, exhibiting parent/child relationship</li>
<li><code>null</code>: Display link to each category, with no parent/child relationship exhibited</li>
</ul></li>
<li><code>$id</code>: post ID for which to return the category array.<ul>
<li>(<em>optional</em>)(integer) Default: current post ID</li>
</li></ul>
</ul>

<p><code>wp_get_post_categories( $id, $args )</code> accepts two arguments:</p>
<ul>
<li><code>$id</code>: PostID for which to retrieve the categories.<ul>
<li>(<em>optional</em>)(integer) Default: current post ID</li>
</ul></li>
<li><code>$args</code>: an array of arguments. See Codex.</li>
</ul>

<p>Examples:</p>
<ul><li><code>$cat = get_the_category(); $cat = $cat[0]; echo $cat->category_nicename;</code><br />
<small>displays the nicename (slug) of the first category returned in the category array.</small></li>
<li><code>the_category( ', ');</code><br />
<small>displays: "Category1, Category2, Category3"</small></li></ul>

<p><code>get_the_category()</code> must be used inside the loop, unless a post ID is passed 
using the <code>$id</code> argument.</p>

<p><code>get_category()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>get_the_category()</code>: Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
<p><code>the_category()</code>: Used in the following template files:</p>
<ul><li>functions/custom.php</li><li>post-header.php</li></ul>
<p><code>wp_get_post_categories()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="get_category_parents">get_category_parents()</h3>
<div class="coderefdetail">
<p><code>get_category_parents()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_category_parents">get_category_parents()</a></li></ul>

<p><code>get_category_parents()</code> is used to return a list of the parents of a category, 
including the category, sorted by ID.</p>

<p><code>get_category_parents( $category, $displaylink, $separator, $nicename )</code> accepts four arguments:</p>
<ul>
<li><code>$category</code>: category ID for which to return the list.<ul>
<li>(<em>optional</em>)(integer) Default: current category ID</li>
</ul></li>
<li><code>$displaylink</code>: whether to display the list as links to the categories.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: display list as links to categories</li>
<li><code>false</code>: display list as text-only</li>
</ul></li>
<li><code>$separator</code>: string to be used as separator between categories in the list.<ul>
<li>(<em>optional</em>)(string) Default: <code>'&amp;raquo;&amp;raquo;'</code></li>
</ul></li>
<li><code>$nicename</code>: whether to display the category nicename (slug)<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: Display the category nicename (e.g. "my-category")</li>
<li><code>false</code>: Display the category display name (e.g. "My Category")</li>
</ul></li>
</ul>
<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>
</div>

<h3 id="get_children">get_children()</h3>
<div class="coderefdetail">
<p><code>get_children()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_children">get_children()</a></li></ul>

<p><code>get_children()</code> is used to retrieve attachments, revisions of a given Post</p>

<p><code>get_children()</code> returns an associative array of posts (of variable type set 
by <code>$output</code> parameter) with post IDs as array keys, or an empty array if no 
posts are found.</p>

<p><code>get_children( $args[string] )</code> accepts multiple arguments. See the Codex for full list.</p>

<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>
</div>

<h3 id="get_comment_link">get_comment_link()</h3>
<div class="coderefdetail">
<p><code>get_comment_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_comment_link">get_comment_link()</a></li></ul>

<p><code>get_comment_link()</code> is used to get the permalink to a given comment</p>

<p><code>get_comment_link()</code> accepts two arguments:</p>
<ul>
<li><code>$comment</code>: ID for comment for which to output link.<ul>
<li>(<em>optional</em>)(integer) Default: current comment ID</li>
</ul></li>
<li><code>$args</code>: ampersand (&) linked array of options.<ul>
<li>(<em>optional</em>)(array) Default: <code>`array( 'page' => '0', 'type' => 'all', 'per_page' => '0', 'max_depth' => '' )`</code></li>
<li>See Codex for full list.</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>&lt;a href="echo get_comment_link();"&gt;Comment&lt;/a&gt;</code></li></ul>

<p><code>get_comment_link()</code> must be used from within the Loop, unless the <code>$comment</code> parameter is used.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="get_comments_number">get_comments_number()</h3>
<div class="coderefdetail">
<p><code>get_comments_number()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/get_comments_number">get_comments_number()</a></li></ul>

<p><code>get_comments_number()</code> is used to return the number (as a numeric value) of comments (including 
comments, trackbacks, and pingbacks) on the current post.</p>

<p><code>get_comments_number()</code> accepts no arguments</p>

<p><code>get_comments_number()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="get_comment_pages_count">get_comment_pages_count()</h3>
<div class="coderefdetail">
<p><code>get_comment_pages_count()</code> is a WordPress function.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>get_comment_pages_count()</code> is used to return the number of comment pages for a given post. Generally,
it is used as part a conditional, to display comment-page navigation links only if more than one comment
page exists.</p>

<p><code>get_comment_pages_count()</code> accepts no arguments.</p>

<p>Examples:</p>
<ul><li><code>get_comment_pages_count()</code><br />
<small>returns a number equal to the number of comment pages, e.g. '1', '2', etc.</small></li>
<li><code>if (get_comment_pages_count() > 1 )</code><br />
<small>will return true if more than one comment page exists.</small></li></ul>

<p><code>get_comment_pages_count()</code> must be used from within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="get_comment_type">get_comment_type()</h3>
<div class="coderefdetail">
<p><code>get_comment_type()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/comment_type">comment_type()</a></li></ul>

<p><code>get_comment_type()</code> is used to return (not output or print) the type of a given comment:
'comment', 'pingback', or 'trackback. To output this value, use comment_type().</p>

<p><code>get_comment_type()</code> accepts no arguments.</p>

<p>Examples:</p>
<ul><li><code>get_comment_type();</code><br />
<small>will return either 'comment', 'pingback', or 'trackback'</small></li>
<li><code>if ( get_comment_type() != "comment" )</code><br />
<small>will return true if the current comment type is 'pingback' or 'trackback'</small></li></ul>

<p><code>get_comment_type()</code> must be used from within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="get_month_link">get_month_link()</h3>
<div class="coderefdetail">
<p><code>get_month_link()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_month_link">get_month_link()</a></li></ul>

<p><code>get_month_link()</code> is used to return the monthly archive URL to a specific year and month</p>

<p><code>get_month_link()</code> returns, but does not display (print) the URL. Use echo get_month_link() to display the URL.</p>

<code>get_month_link( $year, $month )</code> accepts two arguments:
<ul>
<li><code>$year</code>: the year from which to retrieve the archive URL.<ul>
<li>(<em>optional</em>)(integer) Default: current year</li>
</ul></li>
<li><code>$month</code>: the month from which to retrive the archive URL.<ul>
<li>(<em>optional</em>)(integer) Default: current month</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="get_permalink">get_permalink()/the_permalink()</h3>
<div class="coderefdetail">
<code>get_permalink()</code>/<code>the_permalink()</code> are WordPress template tags.
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_permalink">get_permalink()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_permalink">the_permalink()</a></li></ul>

<p><code>get_permalink()</code>/<code>the_permalink()</code> are used to return/display the permalink URL for the current
 post. These tags return only the permalink URL, not a fully formed HTML anchor tag.</p>

<p><code>get_permalink()</code> returns, but does not display, the requested post permalink. To display/print the URL, use 
<code>the_permalink()</code>.</p>

<p><code>get_permalink( $id )</code> accepts one argument:</p>
<ul>
<li><code>$id</code>: ID of the post for which to return the permalink.<ul>
<li>(<em>required</em>)(integer) Default: current post ID</li>
</ul></li>
</ul>
<p><code>the_permalink()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>echo get_permalink($post->post_parent);</code><br />
<small>Displays the URL to the post parent of the current post.</small></li>
<li><code>&lt;a href="the_permalink();"&gt;Permalink&lt;/a&gt;</code></li></ul>

<p><code>get_permalink()</code> must be used within the Loop, unless the <code>$id</code> is passed.<br />
<code>the_permalink()</code> must be used within the Loop.</p>

<p><code>get_permalink()</code>: Used in the following template files:</p>
<ul><li>post-entry-image.php</li></ul>
<p><code>the_permalink()</code>: Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="get_post">get_post()/the_post()</h3>
<div class="coderefdetail">
<p><code>get_post()</code>/<code>the_post()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_post">get_post()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/User:Jefte/the_post">the_post()</a></li></ul>

<p><code>get_post()</code> is used to return an object or array containing the data for the specified post.</p>

<p><code>get_post()</code> returns, but does not display, the requested data.</p>

<p><code>the_post()</code> is used to output the content of each post. It is primarily used in conjunction
with <code>have_posts()</code> as part of the call to the Loop.</p>

<p><code>get_post( $post, $output )</code> accepts two arguments</p>
<ul>
<li><code>$post</code>: a variable containing the PostID interger value<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
<li>This argument <em>must</em> be passed as a <em>variable</em> containing an integer.</li>
</ul></li>
<li><code>$output</code>: <ul>
<li>(<em>optional</em>)(string) Default: <code>'OBJECT'</code></li>
<li><code>'OBJECT'</code>: returns an object</li>
<li><code>'ARRAY_A'</code>: returns an associative array</li>
<li><code>'ARRAY_N'</code>: returns a numerically indexed array</li>
</ul></li>
</ul>

<p>Example (the Loop):</p>
<ul><li><code>if ( have_posts() ) : while ( have_posts() ) : the_post();</code></li></ul>

<p><code>get_post()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>the_post()</code>: Used in the following template files:</p>
<ul><li>loop.php</li></ul>
</div>

<h3 id="get_post_format">get_post_format()</h3>
<div class="coderefdetail">
<p><code>get_post_format()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_post_format">get_post_format()</a></li></ul>

<p><code>get_post_format()</code> is used to retrieve the Post Format of the current Post</p>

<p><code>get_post_format()</code> returns the Post Format type, as a string, if the current Post
has a Post Format (other than "standard") selected; otherwise, it returns NULL.</p>

<p><code>get_post_format( $postid )</code> accepts one argument:</p>
<ul>
<li><code>$postid</code>: the ID of the post for which to return the Post Format type.<ul>
<li>(<em>optional</em>)(integer) Default: current post ID</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>loop.php</li></ul>
</div>

<h3 id="get_posts">get_posts()</h3>
<div class="coderefdetail">
<p><code>get_posts()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_posts">get_posts()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/WP_Query#Parameters">WP_Query() Parameters</a></li></ul>

<p><code>get_posts()</code> is used to create/output multiple Post Loops.</p>

<p><code>get_posts( $args )</code> accepts one argument:</p>
<ul>
<li><code>$args</code>: query arguments.<ul>
<li>(<em>required</em>)(object) Default: <br />
<code>array(<br />
'numberposts'     => 5,<br />
'offset'          => 0,<br />
'category'        => ,<br />
'orderby'         => 'post_date',<br />
'order'           => 'DESC',<br />
'include'         => ,<br />
'exclude'         => ,<br />
'meta_key'        => ,<br />
'meta_value'      => ,<br />
'post_type'       => 'post',<br />
'post_mime_type'  => ,<br />
'post_parent'     => ,<br />
'post_status'     => 'publish'<br />
)</code></li>
<li>See WP_Query Parameters Codex entry for the full list.</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="get_search_query">get_search_query()/the_search_query()</h3>
<div class="coderefdetail">
<p><code>get_search_query()</code>/<code>the_search_query()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_search_query">get_search_query()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_search_query">the_search_query()</a></li></ul>

<p><code>get_search_query()</code>/<code>the_search_query()</code> are used to return the string used in a search query.</p>

<p><code>get_search_query()</code> returns, but does not print/display, the search query string.<br />
<code>the_search_query()</code> prints/displays the search query string.</p>

<p><code>get_search_query()</code>/<code>the_search_query()</code> accept no arguments</p>

<p>Examples:</p>
<ul>
<li><code>get_search_query();</code><br />
<small>If e.g. "lorem ipsum" was entered as the search query, returns the string "lorem ipsum"</small></li>
<li>'Search results for "&lt;?php the_search_query(); ?&gt;" search'<br />
<small>will display (assuming the user entered 'lorem ipsum' as the search query): 'Search results for "lorem ipsum" search'</small></li>
</ul>

<p><code>get_search_query()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>the_search_query()</code>: Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
</div>

<h3 id="get_tag_feed_link">get_tag_feed_link()</h3>
<div class="coderefdetail">
<p><code>get_tag_feed_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>get_tag_feed_link()</code> returns the link for the RSS feed for the specified tag.</p>

<p><code>get_tag_feed_link( $tagid, $feed )</code> accepts two arguments:</p>
<ul>
<li><code>$tagid</code>: ID of the tag for which to display the RSS feed.<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$feed</code>: feed format.<ul>
<li>(<em>optional</em>)(string) Default: user-defined default</li>
<li><code>'rss'</code>: RSS 1.0 format</li>
<li><code>'rss2'</code>: RSS 2.0 format</li>
<li><code>'atom'</code>: ATOM 0.92 format</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>get_tag_feed_link( $wp_query->get( 'tag_id' ) );</code><br />
<small>returns the default RSS feed for the current tag (e.g. when on a tag page).</small></li></ul>

<p><code>get_tag_feed_link()</code> must be used outside the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
</div>

<h3 id="get_tags">get_tags()/get_the_tags()/the_tags()</h3>
<div class="coderefdetail">
<code>get_tags()</code>/<code>get_the_tags()</code>/<code>the_tags()</code> are WordPress template tags.
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_tags">get_tags()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_tags">get_the_tags()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_tags">the_tags()</a></li></ul>

<p><code>get_tags()</code> returns an object that contains tags as specified in the query argument.</p>

<p><code>get_the_tags()</code>/<code>the_tags()</code> are used to return/display a list of links to categories 
to which the post belongs.</p>
<p><code>get_the_tags()</code> returns, but does not print/display, the data requested.<br />
<code>the_tags()</code> prints/displays the data requested.</p>

<p><code>get_tags()</code>/<code>get_the_tags()</code> return an array of tags. The returned 
array includes the following variables:</p>
<ul>
<li><code>$tag[n]->tag_ID</code>: the ID of tag 'n'</li>
<li><code>$tag[n]->tag_name</code>: the name of tag 'n'</li>
<li><code>$tag[n]->tag_nicename</code>: the nicename (slug) of tag 'n'</li>
<li><code>$tag[n]->tag_description</code>: the description of tag 'n'</li>
<li><code>$tag[n]->tag_count</code>: the count of posts included in tag 'n'</li>
</ul>

<p><code>get_tags( $args )</code> accepts one argument:</p>
<ul>
<li><code>$args</code>: array of query arguments.<ul>
<li>(<em>required</em>)(array) Default: <br />
<code>array(<br />
'orderby' => 'name',<br />
'order' => 'ASC',<br />
'hide_empty' => true,<br />
'exclude' => '',<br />
'include' => '',<br />
'number' => ,<br />
'offset' => ,<br />
'fields' => 'all',<br />
'slug' => '',<br />
'hierarchical' => true,<br />
'search'  => '',<br />
'name__like' => '',<br />
'post_status'     => 'publish'<br />
)</code></li>
<li>Refer to the Codex for full list.</li>
</ul></li>
</ul>

<p><code>get_the_tags( $id )</code> accepts one argument:</p>
<ul>
<li><code>$id</code>: post ID for which to return the tag array.<ul>
<li>(<em>optional</em>)(integer) Default: current post ID.</li>
</ul></li>
</ul>

<p><code>the_tags( $before, $separator, $after )</code> accepts three arguments:</p>
<ul>
<li><code>$before</code>: string placed before tags.<ul>
<li>(<em>optional</em>)(string) Default: <code>'Tags: '</code>.</li>
</ul></li>
<li><code>$separator</code>: string placed between tags.<ul>
<li>(<em>optional</em>)(string) Default: <code>', '</code>.</li>
</ul></li>
<li><code>$after</code>: string placed after the last tag.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code>.</li>
</ul></li>
</ul>

<p><code>the_tags()</code> must be used within the Loop.</p>

<p><code>the_tags()</code>: Used in the following template files:</p>
<ul><li>post-header.php</li></ul>

</div>

<h3 id="get_the_author">get_the_author()/the_author()</h3>
<div class="coderefdetail">
<p><code>get_the_author()</code>/<code>the_author()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_author">get_the_author()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_author">the_author()</a></li></ul>

<p><code>get_the_author()</code>/<code>the_author()</code> are used to return the author of the current post.</p>

<p><code>get_the_author()</code> returns, but does not print/display, the author name.<br />
<code>the_author()</code> prints/displays the author name.</p>

<p><code>get_the_author()</code>/<code>the_author()</code> accept no arguments.</p>

<p><code>get_the_author()</code>/<code>the_author()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>post-footer.php</li></ul>
</div>

<h3 id="get_the_author_meta">get_the_author_meta()/the_author_meta()</h3>
<div class="coderefdetail">
<p><code>get_the_author_meta()</code>/<code>the_author_meta()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_author_meta">get_the_author_meta()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_author_meta">the_author_meta()</a></li></ul>

<p><code>get_the_author_meta()</code>/<code>the_author_meta()</code> are used to display metadata for the Author of the current post.</p>

<p><code>get_the_author_meta()</code> returns, but does not print/display, the author metadata.<br />
<code>the_author_meta()</code> prints/displays the author metadata.</p>

<p><code>get_the_author_meta( $field, $userID )</code>/<code>the_author_meta( $field, $userID )</code> accept two arguments:</p>
<ul>
<li><code>$field</code>: field name for data item to be displayed.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
<li>See the Codex for full list of fields.</li>
</ul></li>
<li><code>$userID</code>: ID for user for whom data item is displayed.<ul>
<li>(<em>optional</em>)(integer) Default: Post Author ID</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>get_the_author_meta( 'email' );</code><br />
<small>returns the Post Author's email address.</small></li></ul>

<p><code>get_the_author_meta()</code>/<code>the_author_meta()</code> must be used within the Loop, 
unless the <code>$userID</code> argument is used.</p>

<p>Used in the following template files:</p>
<ul><li>post-footer.php</li></ul>
</div>

<h3 id="get_the_content">get_the_content()/the_content()</h3>
<div class="coderefdetail">
<p><code>get_the_content()</code>/<code>the_content()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_content">get_the_content()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_content">the_content()</a></li></ul>

<p><code>get_the_content()</code>/<code>the_content()</code> are used to display the Post Content for the current post.</p>

<p><code>get_the_content()</code> returns, but does not print/display, the Post content.<br />
<code>the_content()</code> prints/displays the Post content.</p>

<p><code>the_content( $more_link_text, $strip_teaser )</code> accepts two arguments:</p>
<ul>
<li><code>$more_link_text</code>: string to display for the "read more" link, if <code>&lt;!--more--&gt;</code> is used in the post.<ul>
<li>(<em>optional</em>)(string) Default: <code>'(more...)'</code></li>
</ul></li>
<li><code>$strip_teaser:</code> whether to strip the "teaser" content (i.e. the content before 
<code>&lt;!--more--&gt;</code>) on the single post view.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>false</code>: displays the teaser content</li>
<li><code>true</code>: strips the teaser content</li>
</ul></li>
</ul>

<p><code>get_the_content()</code>/<code>the_content()</code> must be used within the Loop.</p>

<p><code>the_content()</code>: Used in the following template files:</p>
<ul><li>post-entry.php</li></ul>
</div>

<h3 id="get_the_date">get_the_date()/the_date()</h3>
<div class="coderefdetail">
<p><code>get_the_date()</code>/<code>the_date()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_date">get_the_date()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_date">the_date()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Formatting_Date_and_Time">Formatting Date and Time</a></li>
<li>PHP reference: <a href="http://php.net/manual/en/function.date.php">date()</a></li></ul>

<p><code>get_the_date()</code>/<code>the_date()</code> are used to display the publish date for the current post.</p>

<p><code>get_the_date()</code> returns, but does not print/display, the Post content.<br />
<code>the_date()</code> prints/displays the Post content.</p>

<p><code>get_the_date( $d )</code>/<code>the_date( $d )</code> accept one argument:</p>
<ul>
<li><code>$d</code>: date format.<ul>
<li>(<em>optional</em>)(string) Default: <code>get_option( 'date_format' )</code></li>
<li>Refer to Codex reference and PHP <code>date()</code> function reference for list of date-format strings</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>the_date( 'Y' );</code><br />
<small>displays the year the post was published, e.g. '2010'.</small></li></ul>

<p><code>get_the_date()</code>/<code>the_date()</code> must be used within the Loop.</p>

<p><code>the_date()</code>: Used in the following template files:</p>
<ul><li>post-footer.php</li></ul>
</div>

<h3 id="get_the_excerpt">get_the_excerpt()/the_excerpt()</h3>
<div class="coderefdetail">
<p><code>get_the_excerpt()</code>/<code>the_excerpt()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_excerpt">get_the_excerpt()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_excerpt">the_excerpt()</a></li></ul>

<p><code>get_the_excerpt()</code>/<code>the_excerpt()</code> are used to display the Post Excerpt for the current post.</p>

<p><code>get_the_excerpt()</code> returns, but does not print/display, the Post excerpt.<br />
<code>the_excerpt()</code> prints/displays the Post excerpt.</p>

<p><code>get_the_excerpt()</code>/<code>the_excerpt()</code> accept no arguments.</p>

<p><code>get_the_excerpt()</code>/<code>the_excerpt()</code> must be used within the Loop.</p>

<p><code>get_the_excerpt()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>the_excerpt()</code>: Used in the following template files:</p>
<ul><li>post-entry.php</li><li>post-entry-image.php</li></ul>
</div>

<h3 id="get_the_ID">get_the_ID()/the_ID()</h3>
<div class="coderefdetail">
<p><code>get_the_ID</code>/<code>the_ID()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_ID">get_the_ID</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_ID">the_ID</a></li></ul>

<p><code>get_the_ID</code>/<code>the_ID()</code> are used to return/display the Post ID for the current post.</p>
<p><code>get_the_ID</code> returns, but does not print/display, the Post ID.<br />
<code>the_ID()</code> prints/returns the Post ID.</p>

<p><code>get_the_ID</code>/<code>the_ID()</code> accept no arguments.</p>

<p><code>get_the_ID</code>/<code>the_ID()</code> must be used within the Loop.</p>

<p><code>the_ID()</code>: Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="get_the_post_thumbnail">get_the_post_thumbnail()/the_post_thumbnail()</h3>
<div class="coderefdetail">
<p><code>get_the_post_thumbnail()</code>/<code>the_post_thumbnail()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_post_thumbnail">get_the_post_thumbnail()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_post_thumbnail">the_post_thumbnail()</a></li></ul>

<p><code>get_the_post_thumbnail()</code>/<code>the_post_thumbnail()</code> are used to return/display the post thumbnail for the current post.</p>

<p>Post Thumbnails support must be defined and configured. Refer to functions.php for more information.</p>

<p><code>get_the_post_thumbnail( $id, $size, $attr )</code> accepts three arguments;<br />
<code>the_post_thumbnail( $size, $attr )</code> accepts two arguments:
<ul>
<li><code>$id:</code> ID of the Post for which to return the Post Thumbnail.<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$size</code>: size of the thumbnail image:<ul>
<li>(<em>optional</em>)(string/array) Default: <code>'thumbnail'</code></li>
<li><code>'thumbnail'</code></li>
<li><code>'medium'</code></li>
<li><code>'large'</code></li>
<li><code>'full'</code></li>
<li><code>array( 'W', 'H' , $crop )</code><ul>
<li><code>'W'</code>: width, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>'H'</code>: height, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$crop</code>: boolean (true/false) forced-cropping of image to specified dimensions.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: hard-crop</li>
<li><code>false</code>: box-resize</li>
</ul></li>
</ul></li>
</ul></li>
<li><code>$attr:</code> used to override default attributes, such as src, alt, title, or class<ul>
<li>(<em>optional</em>)(string/array) Default: <code>none</code></li>
</ul></li>
</ul>

<p><code>the_post_thumbnail()</code> must be used within the Loop.</p>

<p><code>the_post_thumbnail()</code>: Used in the following template files:</p>
<ul><li>post-entry.php</li><li>post-header.php</li></ul>
</div>

<h3 id="get_the_time">get_the_time()/the_time()</h3>
<div class="coderefdetail">
<p><code>get_the_time()</code>/<code>the_time()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_time">get_the_time()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_time">the_time()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Formatting_Date_and_Time">Formatting Date and Time</a></li>
<li>PHP reference: <a href="http://php.net/manual/en/function.date.php">date()</a></li></ul>

<p><code>get_the_time()</code>/<code>the_time()</code> are used to return/display the Post Time.</p>

<p><code>get_the_time()</code> returns, but does not print/display, the Post Time.<br />
<code>the_time()</code> prints/displays the Post Time.</p>

<p><code>get_the_time( $d )</code>/<code>the_time( $d )</code> accept one argument:</p>
<ul>
<li><code>$d</code>: time format.<ul>
<li>(<em>optional</em>)(string) Default: <code>get_option( 'time_format' )</code></li>
<li>Refer to Codex reference and PHP <code>date()</code> function reference for list of time-format strings</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>the_time( 'Y' );</code><br />
<small>displays the year the post was published, e.g. '2010'.</small></li></ul>

<p><code>get_the_time()</code>/<code>the_time()</code> must be used within the Loop.</p>

<p><code>get_the_time()</code>: Used in the following template files:</p>
<ul><li>functions.php</li></ul>
<p><code>the_time()</code>: Used in the following template files:</p>
<ul><li>post-footer.php</li><li>post-header.php</li></ul>

</div>

<h3 id="get_the_title">get_the_title()/the_title()</h3>
<div class="coderefdetail">
<p><code>get_the_title()</code>/<code>the_title()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_the_title">get_the_title()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_title">the_title()</a></li></ul>

<p><code>get_the_title()</code>/<code>the_title()</code> are used to display the Post Title of the current post.</p>

<p><code>get_the_title()</code> returns, but does not print/display, the Post Title.<br />
<code>the_title()</code> prints/displays the Post Title.</p>

<p><code>get_the_title( $id )</code> accepts one argument:</p>
<ul>
<li><code>$id</code>: ID of the post for which to return the Post Title.<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
</ul>
<p><code>the_title( $before, $after, $echo )</code> accepts three arguments:</p>
<ul>
<li><code>$before</code>: text string to display before the title.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
<li><code>$after</code>: text string to display after the title.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
<li><code>$echo</code>: whether to return or output the Title.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: prints/displays the Title</li>
<li><code>false</code>: returns, but does not print/display, the Title</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>echo get_the_title($post->post_parent); </code><br />
<small>Displays the Post Title of the current post's parent post.</small></li></ul>

<p><code>get_the_title()</code>/<code>the_title()</code> must be used within the Loop.</p>

<p><code>get_the_title()</code>: Used in the following template files:</p>
<ul><li>functions/custom.php</li><li>post-entry-image.php</li></ul>
<p><code>the_title()</code>: Used in the following template files:</p>
<ul><li>comments.php</li><li>post-header.php</li></ul>
</div>

<h3 id="get_trackback_url">get_trackback_url()</h3>
<div class="coderefdetail">
<p><code>get_trackback_url()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/trackback_url">trackback_url()</a></li></ul>

<p><code>get_trackback_url()</code> is used to display the URL to the current post's trackback URL. This tag
returns the URL only, rather than a full HTML anchor-tag link.</p>

<p><code>get_trackback_url()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>&lt;a href="get_trackback_url();"&gt;Trackback&lt;/a&gt;</code></li></ul>

<p><code>get_trackback_url()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="get_year_link">get_year_link()</h3>
<div class="coderefdetail">
<p><code>get_year_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_year_link">get_year_link()</a></li></ul>

<p><code>get_year_link()</code> is used to return (not print) the URL for the year-archive for the specified year.</p>

<p><code>get_year_link( $year )</code> accepts one argument:</p>
<ul>
<li><code>$year</code>: year for which to return the year-archive URL.<ul>
<li>(<em>optional</em>)(integer) Default: current year</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="language_attributes">language_attributes()</h3>
<div class="coderefdetail">
<p><code>language_attributes()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/language_attributes">language_attributes()</a></li></ul>

<p><code>language_attributes()</code> is added inside the HTML &lt;html&gt; tag, and outputs various HTML
language attributes, such as language and text-direction.</p>

<p>Used in the following template files:</p>
<ul><li>header.php</li></ul>
</div>

<h3 id="next_comments_link">next_comments_link()/previous_comments_link()</h3>
<div class="coderefdetail">
<p><code>next_comments_link()</code>/<code>previous_comments_link()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/next_comments_link">next_comments_link()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/previous_comments_link">previous_comments_link()</a></li></ul>

<p><code>next_comments_link()</code>/<code>previous_comments_link()</code> are used to display the next (older) 
and previous (newer) page of comments.</p>

<p><code>next_comments_link( $label, $maxpage )</code>/<code>previous_comments_link( $label, $maxpage )</code> accept two arguments:</p>
<ul>
<li><code>$label</code>: text label for the link text.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no label).</li>
</ul></li>
<li><code>$max_page</code>: maximum number of comment pages on which to place the link.<ul>
<li>(<em>optional</em>)(integer) Default: <code>0</code> (no limit)</li>
</ul></li>
</ul>
<p>Examples:</p>
<ul><li><code>next_comments_link( '&lt;span class="meta-nav"&gt;&amp;larr;&lt;/span&gt; Older Comments' );</code><br />
<small>returns "&larr; Older Comments" (with an ASCII left-arrow symbol)</small></li>
<li><code>next_comments_link( 'Newer Comments &lt;span class="meta-nav"&gt;&amp;rarr;&lt;/span&gt;' );</code><br />
<small>returns "Newer Comments ->" (with an ASCII right-arrow symbol)</small></li></ul>

<p><code>next_comments_link()</code>/<code>previous_comments_link()</code> must be used from within the Loop.</p>

<p><code>next_comments_link()</code>: Used in the following template files:</p>
<ul><li>comments.php</li></ul>
<p><code>previous_comments_link()</code>: Used in the following template files:</p>
<ul><li>comments.php</li></ul>

</div>

<h3 id="next_post_link">next_post_link()/previous_post_link()</h3>
<div class="coderefdetail">
<p><code>next_post_link()</code>/<code>previous_post_link()</code> are WordPress functions.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/next_post_link">next_post_link()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/previous_post_link">previous_post_link()</a></li></ul>

<p><code>next_post_link()</code>/<code>previous_post_link()</code> are used to display the next (older) 
and previous (newer) post.</p>

<p><code>next_post_link()</code>/<code>previous_post_link()</code> display a fully-formed HTML link.</p>

<p><code>next_post_link( $format, $link, $in_same_cat, $exclude_categories )</code>/<code>previous_post_link( $format, $link, $in_same_cat, $exclude_categories )</code> accept four arguments:</p>
<ul>
<li><code>$format</code>: format of the link, using the %link% placeholder for the HTML link.<ul>
<li>(<em>optional</em>)(string) Default: <code>"%link% &amp;raquo;"</code>/<code>"&amp;laquo; %link%"</code></li>
</ul></li>
<li><code>$link</code>: text to display within the HTML link.<ul>
<li>(<em>optional</em>)(string) Default: <code>"%title%"</code> (Post Title)</li>
</ul></li>
<li><code>$in_same_cat</code>: whether linked post must be in the same category as the
 current post.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: previous/next in same category</li>
<li><code>false</code>: previous/next post, chronologically</li>
</ul></li>
<li><code>$exclude_categories</code>: list of categories by ID, separated by 'and', to exclude.<ul>
<li>(<em>optional</em>)(string) Default: <code>none</code></li>
</ul></li>
</ul>
<p>Example:</p>
<ul><li><code>next_post_link( '%link', '&amp;lArr; ' );</code><br />
<small>Displays the link to the next post, with a left arrow as the link text.</small></li>
<li><code>previous_post_link( '%link', '&amp;rArr; ' );</code><br />
<small>Displays the link to the next post, with a right arrow as the link text.</small></li></ul>

<p><code>next_post_link()</code>/<code>previous_post_link()</code> must be used from within the Loop.</p>

<p><code>next_post_link()</code>: Used in the following template files:</p>
<ul><li>functions.php, infobar.php</li></ul>
<p><code>previous_post_link()</code>: Used in the following template files:</p>
<ul><li>functions.php, infobar.php</li></ul>
</div>

<h3 id="post_class">post_class()</h3>
<div class="coderefdetail">
<p><code>post_class()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/post_class">post_class()</a></li></ul>

<p><code>post_class()</code> is added inside the HTML &lt;div&gt; or &lt;span&gt; tag that contains the post, 
and outputs various CSS class declarations, depending on which post is currently 
being displayed.</p>

<p>For the full list of CSS classes returned by <code>post_class()</code>, see the Codex.</p>

<p>Used in the following template files:</p>
<ul><li>404.php, loop.php</li></ul>
</div>

<h3 id="posts_nav_link">posts_nav_link()</h3>
<div class="coderefdetail">
<p><code>posts_nav_link()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/posts_nav_link">posts_nav_link()</a></li></ul>

<p><code>posts_nav_link()</code> is used to display Previous/Next links for paginated lists of posts
(e.g. index.php, archive.php, category.php, tag.php).</p>

<p>Note: the "Previous" link indicates *newer* posts; the "Next" link indicates *older* posts.
Thus, "Previous" and "Next" indicate the reverse-chronological nature of blog posts;
i.e. Previous in time (more recent) and Next in time (older).</p>

<p><code>posts_nav_link( $sep, $prelabel, $nxtlabel )</code> accepts 3 arguments:</p>
<ul>
<li><code>$sep</code>: text displayed between "Previous" and "Next" links.<ul>
<li>(<em>optional</em>)(string) Default: <code>' :: '</code>.</li>
</ul></li>
<li><code>$prelabel</code>: Link text displayed for "Previous" link.<ul>
<li>(<em>optional</em>)(string) Default: <code>'&amp;lt;&amp;lt; Previous Page'</code>.</li>
</ul></li>
<li><code>$nxtlabel</code>:  Link text displayed for "Next" link.<ul>
<li>(<em>optional</em>)(string) Default: <code>'Next Page &amp;gt;&amp;gt;'</code>.</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>posts_nav_link('&amp;nbsp;&amp;diams;&amp;nbsp;','&amp;laquo;&amp;laquo; Newer Posts','Older Posts &amp;raquo;&amp;raquo;');</code><br />
<small>Displays '&laquo;&laquo; Newer Posts' and 'Older Posts &raquo;&raquo;', with &diams; as a separator.</small></li></ul>

<p><code>posts_nav_link()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php, loop-footer.php</li></ul>
</div>

<h3 id="single_cat_title">single_cat_title()</h3>
<div class="coderefdetail">
<p><code>single_cat_title()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/single_cat_title">single_cat_title()</a></li></ul>

<p><code>single_cat_title()</code> is used to display the title for the current category when displaying
the category page.</p>

<p><code>single_cat_title( $prefix, $display )</code> accepts one argument:</p>
<ul>
<li><code>$prefix</code>: string to display before the category title.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
<li><code>$display</code>: whether display or return the value.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: display/print the value</li>
<li><code>false</code>: return, but do not print/display, the value</li>
</ul></li>
</ul>

<p><code>single_cat_title()</code> must be used outside the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php, loop-header.php</li></ul>
</div>

<h3 id="single_tag_title">single_tag_title()</h3>
<div class="coderefdetail">
<p><code>single_tag_title()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/single_tag_title">single_tag_title()</a></li></ul>

<p><code>single_tag_title()</code> is used to display the title for the current tag when displaying
the tag page.</p>

<p><code>single_tag_title( $prefix, $display )</code> accepts one argument:</p>
<ul>
<li><code>$prefix</code>: string to display before the tag title.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
<li><code>$display</code>: whether display or return the value.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: display/print the value</li>
<li><code>false</code>: return, but do not print/display, the value</li>
</ul></li>
</ul>

<p><code>single_tag_title()</code> must be used outside the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php, loop-header.php</li></ul>
</div>

<h3 id="the_shortlink">the_shortlink()/wp_get_shortlink()</h3>
<div class="coderefdetail">
<p><code>the_shortlink()</code>/<code>wp_get_shortlink()</code> are WordPress template tags.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_shortlink">the_shortlink()</a></li>
<li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_get_shortlink">wp_get_shortlink()</a></li></ul>

<p><code>the_shortlink()</code>/<code>wp_get_shortlink()</code> are used to return/display the Shortlink for the current post.</p>

<p><code>wp_get_shortlink()</code> returns, but does not display/print the shortlink URL.<br />
<code>the_shortlink()</code> prints/displays a fully formed HTML anchor tag for the shortlink.</p>

<p><code>the_shortlink( $text, $title, $before, $after )</code> accepts four arguments:</p>
<ul>
<li><code>$text</code>: Link text to display.<ul>
<li>(<em>optional</em>)(string) Default: <code>'This is the shortlink'</code></li>
</ul></li>
<li><code>$title</code>: HTML anchor tag title attribute text (displays in tooltip on hover).<ul>
<li>(<em>optional</em>)(string) Default: Post Title</li>
</li></ul>
<li><code>$before</code>: string to display before the Shortlink.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
<li><code>$after</code>: string to display after the Shortlink.<ul>
<li>(<em>optional</em>)(string) Default: <code>''</code> (no text)</li>
</ul></li>
</ul>

<p><code>wp_get_shortlink( $id, $context, $allow_slugs )</code> accepts three arguments:</p>
<ul>
<li><code>$id</code>: ID of the post for which to get the shortlink.<ul>
<li>(<em>optional</em>)(integer) Default: <code>0</code> (current post)</li>
</ul></li>
<li><code>$context</code>: Context for shortlink:<ul>
<li>(<em>optional</em>)(string) Default: <code>post</code></li>
<li><code>'blog'</code>: shortlink for the site</li>
<li><code>'post'</code>: shortlink for a Post</li>
<li><code>'media'</code>: shortlink for attached media</li>
</ul></li>
<li><code>$allow_slugs</code>: whether to allow post slugs in the shortlink.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: allow post slugs (intended for Theme/Plugin implementation)</li>
<li><code>false</code>: do not allow post slugs</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>the_shortlink( 'Shortlink' );</code><br />
<small>displays: &lt;a href="[shortlink URL]" title="[Post Title]"&gt;Shortlink&lt;/a&gt;.</small></li></ul>

<p><code>the_shortlink()</code> must be used within the Loop.<br />
<code>wp_get_shortlink()</code> must be used within the Loop, unless the <code>$id</code> argument is used.</p>

<p>Used in the following template files:</p>
<ul><li>post-header.php</li></ul>
</div>

<h3 id="the_widget">the_widget()</h3>
<div class="coderefdetail">
<p><code>the_widget()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/the_widget">the_widget()</a></li></ul>

<p><code>the_widget()</code> is used to output a Widget anywhere within a Theme. This tag allows Widgets to be
displayed outside of a Widgetized sidebar. The tag can also be used to output "default" Widgets that will 
display in a defined Widgetized sidebar location if no Widgets are defined (by the user) to appear in
the sidebar.</p>

<p><code>the_widget( $widget, $instance, $args )</code> accepts 3 arguments:</p>
<ul>
<li><code>$widget</code>: name of the Widget to be output.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
<li>Can be a core Widget, such as WP_Widget_Calendar, or a custom, Theme-defined Widget</li>
</ul></li>
<li><code>$instance</code>: Widget instance settings (e.g. Title)<ul>
<li>(<em>optional</em>)(string/array) Default: <code>none</code></li>
</ul></li>
<li><code>$args</code>: Widget arguments<ul>
<li>(<em>optional</em>)(array) Default: <br />
<code>array( <br />
'before_widget' => '&lt;div class="widget {widget's classname}"&gt;',<br />
'after_widget' => '&lt;/div&gt;',<br />
'before_title' => '&lt;h2 class="widgettitle"&gt;',<br />
'after_title' => '&lt;/h2&gt;'<br />
)</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>the_widget( 'WP_Widget_Calendar' )</code> will display the Calendar Widget.</li></ul>

<p><code>the_widget()</code> can be used anywhere within a template.</p>

<p>Used in the following template files:</p>
<ul><li>sidebar-left.php, sidebar-right.php</li></ul>
</div>

<h3 id="wp_footer">wp_footer()</h3>
<div class="coderefdetail">
<p><code>wp_footer()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_footer">wp_footer</a></li></ul>

<p><code>wp_footer()</code> is used to fire the <code>wp_footer</code> action hook.</p>

<p><code>wp_footer()</code> is intended to be placed immediately before the closing <code>&lt;/body&gt;</code> tag.</p>

<p><code>wp_footer()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>page.php</li></ul>
</div>

<h3 id="wp_get_attachment_image">wp_get_attachment_image()</h3>
<div class="coderefdetail">
<p><code>wp_get_attachment_image()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_get_attachment_image">wp_get_attachment_image()</a></li></ul>

<p><code>wp_get_attachment_image()</code> is used to return an HTML image tag for an attachment image.</p>

<p><code>wp_get_attachment_image( $id, $size, $icon )</code> accepts arguments:</p>
<ul>
<li><code>$id</code>: the ID of the attachment<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$size</code>: size of the thumbnail image:<ul>
<li>(<em>optional</em>)(string/array) Default: <code>'thumbnail'</code></li>
<li><code>'thumbnail'</code></li>
<li><code>'medium'</code></li>
<li><code>'large'</code></li>
<li><code>'full'</code></li>
<li><code>array( 'W', 'H' , $crop )</code><ul>
<li><code>'W'</code>: width, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>'H'</code>: height, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$crop</code>: boolean (true/false) forced-cropping of image to specified dimensions.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: hard-crop</li>
<li><code>false</code>: box-resize</li>
</ul></li>
</ul></li>
</ul></li>
<li><code>$icon</code>: whether to return the media icon for the attachment<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: return media icon</li>
<li><code>false</code>: do nto return media icon</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="wp_get_attachment_link">wp_get_attachment_link()</h3>
<div class="coderefdetail">
<p><code>wp_get_attachment_link()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_get_attachment_link">wp_get_attachment_link()</a></li></ul>

<p><code>wp_get_attachment_link()</code> is used to return an HTML hyperlink to an attachment
page or file.</p>

<p><code>wp_get_attachment_link( $id, $size, $permalink, $icon )</code> accepts four arguments:</p>
<ul>
<li><code>$id</code>: the ID of the attachment</li>
<li><code>$size</code>: string ("thumbnail", "large", etc.), or array ( array('width','height') ). Default: "thumbnail"</li>
<li><code>$permalink</code>: boolean: return permalink (TRUE) or the file directly (FALSE). Default: TRUE</li>
<li><code>$icon</code>: boolean: return the media icon for the attachment (TRUE).  Default: FALSE</li>
</ul>
<ul>
<li><code>$id</code>: the ID of the attachment<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$size</code>: size of the thumbnail image:<ul>
<li>(<em>optional</em>)(string/array) Default: <code>'thumbnail'</code></li>
<li><code>'thumbnail'</code></li>
<li><code>'medium'</code></li>
<li><code>'large'</code></li>
<li><code>'full'</code></li>
<li><code>array( 'W', 'H' , $crop )</code><ul>
<li><code>'W'</code>: width, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>'H'</code>: height, in pixels<ul>
<li>(<em>required</em>)(integer) Default: <code>none</code></li>
</ul></li>
<li><code>$crop</code>: boolean (true/false) forced-cropping of image to specified dimensions.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: hard-crop</li>
<li><code>false</code>: box-resize</li>
</ul></li>
</ul></li>
</ul></li>
<li><code>$permalink</code>: whether to the attachment file or page<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: link to the attachment page</li>
<li><code>false</code>: link to the attachment file</li>
</ul></li>
<li><code>$icon</code>: whether to return the media icon for the attachment<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: return media icon</li>
<li><code>false</code>: do nto return media icon</li>
</ul></li>
<li><code>$text</code>: text to display for text link to attachment.<ul>
<li>(<em>optional</em>)(string) Default: <code>false</code></li>
<li></li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="wp_get_current_user">wp_get_current_user()</h3>
<div class="coderefdetail">
<p><code>wp_get_current_user()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_get_current_user">wp_get_current_user()</a></li></ul>

<p><code>wp_get_current_user()</code> is used to retrieve the information contained in the 
<code>$current_user</code> global variable.</p>

<p><code>wp_get_current_user()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>wp_get_current_user();<br />
echo $current_user->display_name;</code><br />
<small>will display e.g. "John Smith"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="wp_head">wp_head()</h3>
<div class="coderefdetail">
<p><code>wp_head()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_head">wp_head()</a></li></ul>

<p><code>wp_head()</code> is used to fire the <code>wp_footer</code> action hook.</p>

<p><code>wp_head()</code> is intended to be placed immediately before the closing <code>&lt;/head&gt;</code> tag 
in the HTML document head.</p>

<p><code>wp_head()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>header.php</li></ul>
</div>

<h3 id="wp_link_pages">wp_link_pages()</h3>
<div class="coderefdetail">
<p><code>wp_link_pages()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_link_pages">wp_link_pages()</a></li></ul>

<p><code>wp_link_pages()</code> is used to output page links for paginated posts.</p>

<p><code>wp_link_pages( '&arg1=value1&arg2=value2' )</code> accepts several arguments, in array format.</p>
<ul>
<li><code>'before'</code>: text string to display before the output. Default:'&lt;p&gt;Pages:'</li>
<li><code>'after'</code>:  text string to display after the output. Default: '&lt;/p&gt;'</li>
<li><code>'link_before'</code>: text string to output before each link. Default: NULL </li>
<li><code>'link_after'</code>: text string to output after each link. Default: NULL</li>
<li><code>'next_or_number'</code>: display either "Previous/Next" links ('next') or page numbers ('number'). Default: 'number'</li>
<li><code>'nextpagelink'</code>: text string to display for "Next" page link (if 'next_or_number' is 'next'. Default: 'Next page'</li>
<li><code>'previouspagelink'</code>:text string to display for "Previous" page link (if 'next_or_number' is 'next'. Default: 'Previous page'</li>
<li><code>'pagelink'</code>: text string to display for page numbers (if 'next_or_number' is 'number'), where % returns the page number. Default: '%'</li>
<li><code>'more_file'</code>: page to which the link points. Default: NULL (i.e. current post) </li>
<li><code>'echo'</code>: (boolean) output (print/display) or return (for use in PHP) the output. Default: 1 (i.e. TRUE; print/display output)</li>
</ul>

<p>Example:</p>
<ul><li><code>wp_link_pages( 'before=&lt;p class="link-pages"&gt;Page: ' ); </code><br />
<small>outputs e.g.: '&lt;p class="link-pages"&gt;Pages: 1 2 3&lt;/p&gt;'</small></li></ul>

<p><code>wp_link_pages()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>post-entry.php</li></ul>
</div>

<h3 id="wp_list_comments">wp_list_comments()</h3>
<div class="coderefdetail">
<p><code>wp_list_comments()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_list_comments">wp_list_comments()</a></li></ul>

<p><code>wp_list_comments()</code> is used to display the comments associated with a given post.</p>

<p><code>wp_list_comments( $args )</code> accepts one argument:</p>
<ul>
<li><code>$args</code>: query arguments.<ul>
<li>(<em>optional</em>)(array) Default: <br />
<code>array(<br />
'walker' => null,<br />
'max_depth' => ,<br />
'style' => 'ul',<br />
'callback' => null,<br />
'end-callback' => null,<br />
'type' => 'all',<br />
'page' => ,<br />
'per_page' => ,<br />
'avatar_size' => 32,<br />
'reverse_top_level' => null,<br />
'reverse_children'  =><br />
)</code></li>
<li><code>max_depth</code>: for threaded comments, the maximum thread depth.<ul>
<li>(<em>optional</em>)(integer) Default: user-configured setting in Settings -> Discussion.</li>
</ul></li>
<li><code>style</code>: HTML structure for the comment list.<ul>
<li>(<em>optional</em>)(string) Default: <code>'ul'</code></li>
<li><code>'ul'</code>: Unordered list</li>
<li><code>'ol'</code>: Ordered list</li>
<li><code>'div'</code>: DIV container</li>
<li>Note: if using <code>'div'</code> or <code>'ol'</code>, <code>wp_list_comments()</code> must be wrapped in a containing element of the specified type (i.e. &lt;div&gt;&lt;/div&gt; or &lt;ol&gt;&lt;/ol&gt;)</li>
</ul></li>
<li><code>type</code>: comment type to include.<ul>
<li>(<em>optional</em>)(string) Default: <code>'all'</code></li>
<li><code>'all'</code>: comments, trackbacks, and pingbacks</li>
<li><code>'comment'</code>: comments only</li>
<li><code>'trackback'</code>: trackbacks only</li>
<li><code>'pingback'</code>: pingbacks only</li>
<li><code>'pings'</code>: trackbacks and pingbacks</li>
</ul></li>
<li><code>avatar_size</code>: size (px) of the user avatar.<ul>
<li>(<em>optional</em>)(integer) Default: <code>32</code></li>
<li>Can be any interger value between '1' and '512'</li>
</ul></li>
<li><code>per_page</code>: number of comments to display per comments page.<ul>
<li>(<em>required</em>)(integer) Default: user-configured setting in Settings -> Discussion</li>
</ul></li>
<li><code>reverse_top_level</code>: whether to display the newest comments first.<ul>
<li>(<em>optional</em>)(boolean) Default: user-configured setting in Settings -> Discussion.</li>
<li><code>true</code>: display newest comments first</li>
<li><code>false</code>: display oldest comments first</li>
</ul></li>
</ul></li>
</ul>
 
<p>Example:</p>
<ul><li><code>wp_list_comments( 'type=comment&avatar_size=40' );</code><br />
<small>displays comments that are "comment" type (no pingbacks or trackbacks),
with an avatar size of 40px.</small></li></ul>

<p><code>wp_list_comments()</code> must be used from within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="wp_list_pages">wp_list_pages()</h3>
<div class="coderefdetail">
<p><code>wp_list_pages()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_list_pages">wp_list_pages()</a></li></ul>

<p><code>wp_list_pages()</code> is used to output a list of pages (as links). This function is
extremely powerful,  with several available arguments, including depth of
hierarchy to display, pages (or hierarchies) to include/exclude, display order
(ascending/descending/menu order).</p>

<p><code>wp_list_pages( $args )</code> accepts one argument:</p>
<ul>
<li><code>$args</code>: query arguments.<ul>
<li>(<em>optional</em>)(array) Default: <br />
<code>array(<br />
'depth' => 0,<br />
'show_date' => '',<br />
'date_format' => get_option('date_format'),<br />
'child_of' => 0,<br />
'exclude' => '',<br />
'include' => '',<br />
'title_li' => __('Pages'),<br />
'echo' => true,<br />
'authors' => '',<br />
'sort_column' => 'menu_order, post_title',<br />
'link_before' => '',<br />
'link_after'   => '',<br />
'walker => ''<br />
)</code></li>
<li>Refer to the Codex for the full parameter list</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>sidebar-left.php, site-navigation.php</li></ul>
</div>

<h3 id="wp_loginout">wp_loginout()</h3>
<div class="coderefdetail">
<p><code>wp_loginout()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_loginout">wp_loginout()</a></li></ul>

<p><code>wp_loginout()</code> displays a login link if user is logged out, or a logout link if user is logged in.</p>

<p><code>wp_loginout( $redirect, $echo )</code> accepts two arguments:</p>
<ul>
<li><code>$redirect</code>: redirect location after login/out.<ul>
<li>(<em>optional</em>)(string) Default: <code>none</code> (current location - no redirect)</li>
</ul></li>
<li><code>$echo</code>: whether to return or display the link.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: print/display the link</li>
<li><code>false</code>: return, but do not print/display, the link</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="wp_nav_menu">wp_nav_menu()</h3>
<div class="coderefdetail">
<p><code>wp_nav_menu()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_nav_menu">wp_nav_menu()</a></li></ul>

<p><code>wp_nav_menu( $menu )</code> is used to output a nav menu named $menu. This menu must be configured
in the Menus administration panel.</p>

<p><code>wp_nav_menu()</code> is used to output the default nav menu. This
menu must be configured in the Menus administration panel.</p>

<p><code>wp_nav_menu( $args )</code> accepts one argument:</p>
<ul>
<li><code>$args</code>: query arguments.<ul>
<li>(<em>optional</em>)(array) Default: <br />
<code>array(<br />
  'theme_location'  => ,<br />
  'menu'            => , <br />
  'container'       => 'div', <br />
  'container_class' => 'menu-{menu slug}-container', <br />
  'container_id'    => , <br />
  'menu_class'      => 'menu', <br />
  'menu_id'         => ,<br />
  'echo'            => true,<br />
  'fallback_cb'     => 'wp_page_menu',<br />
  'before'          => ,<br />
  'after'           => ,<br />
  'link_before'     => ,<br />
  'link_after'      => ,<br />
  'depth'           => 0,<br />
  'walker'          => <br />
)</code></li>
<li><code>'theme_location'</code>: (string) Theme-defined (via <code>register_nav_menu()</code>/<code>register_nav_menus()</code>) menu location</li>
<li><code>'menu'</code>:  (string) User-defined (via Dashboard -> Appearance -> Menus) menu ID, slug, or name</li>
<li><code>'container'</code>:  (string) container element to wrap around the menu</li>
<li><code>'container_class'</code>:  (string) CSS class for container element</li>
<li><code>'container_id'</code>:  (string) CSS ID for container element</li>
<li><code>'menu_class'</code>:  (string) CSS class for menu <code>&lt;ul&gt;</code></li>
<li><code>'menu_id'</code>:  (string) CSS ID for menu <code>&lt;ul&gt;</code></li>
<li><code>'echo'</code>: (boolean) whether to return (<code>false</code>) or display/print (<code>true</code>) the menu</li>
<li><code>'fallback_cb'</code>: (callback) function to use as a fallback if no menu is defined</li>
<li><code>'before'</code>: (string) text to output before the menu link opening anchor tag <code>&lt;a&gt;</code></li>
<li><code>'after'</code>: (string)  text to output after the menu link closing anchor tag <code>&lt;/a&gt;</code></li>
<li><code>'link_before'</code>: (string) text to output before the menu link text</li>
<li><code>'link_after'</code>: (string) text to output after the menu link text</li>
<li><code>'depth'</code>: (integer) how many levels of hierarchy to display.</li>
<li><code>'walker'</code>: (object) custom walker object, via <code>new Walker_Nav_Menu</code></li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>sidebar-left.php, site-navigation.php</li></ul>
</div>

<h3 id="wp_register">wp_register()</h3>
<div class="coderefdetail">
<p><code>wp_register()</code> is a WordPress function.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wp_register">wp_register()</a></li></ul>

<p><code>wp_register()</code> displays a registration link if user is logged out and user registration is 
permitted; otherwise, displays a link to site admin (Dashboard) if user is logged in.</p>

<p><code>wp_register( $before, $after, $echo )</code> accepts 3 arguments:</p>
<ul>
<li><code>$before</code>: string to display before link.<ul>
<li>(<em>optional</em>)(string) Default: <code>'&lt;li&gt;'</code></li>
</ul></li>
<li><code>$after</code>:  string to display after link.<ul>
<li>(<em>optional</em>)(string) Default: <code>'&lt;/li&gt;'</code></li>
</ul></li>
<li><code>$echo</code>: whether to return or print/display the result.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: print/display the result</li>
<li><code>false</code>: return, but do not print/display, the result</li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>wp_register( '' , '' );</code><br />
<small>returns the Registration or Site Admin link, without wrapping
in &lt;li&gt;&lt;/li&gt; tags.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="wp_title">wp_title</h3>
<div class="coderefdetail">
<p><code>wp_title()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Template_Tags/wp_title">wp_title()</a></li></ul>
	
<p><code>wp_title()</code> is a WordPress template tag used to display the title of a page:</p>
<ul>
<li>Post Name for single.php</li><li>Date for date-based archive</li><li>Category for category archive</li><li>etc.</li>
</ul>

<p><code>wp_title( $sep, $echo, $seplocation )</code> accepts 3 arguments:</p>
<ul>
<li><code>$sep</code>: string to display as separator.<ul>
<li>(<em>optional</em>)(string) Default: <code>'&amp;raquo;'</code></li>
</ul></li>
<li><code>$echo</code>: whether to return or print/display the result.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>true</code></li>
<li><code>true</code>: print/display the result</li>
<li><code>false</code>: return, but do not print/display, the result</li>
</ul></li>
<li><code>$seplocation</code>: separator location.<ul>
<li>(<em>optional</em>)(string) Default: <code>none</code></li>
<li><code>'right'</code>: separator will be placed to the right of the Post Title</li>
<li>Anything other than <code>'right'</code>: separator will be placed to the left of the Post Title</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>header.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_include_tags">WordPress Include Tags</h2>

<p>Codex Reference: <a href="http://codex.wordpress.org/Include_Tags">Include Tags</a></p>

<h3 id="comments_template">comments_template()</h3>
<div class="coderefdetail">
<p><code>comments_template()</code> is a WordPress include tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/comments_template">comments_template()</a></li></ul>

<p><code>comments_template()</code> is used to include the comments Theme template file (comments.php) within another. This function 
 ensures that all of the necessary/helper core functions and scripts are loaded appropriately for rendering comments and the comment
 reply form.</p>

<p><code>comments_template( $file, $separate_comments )</code> accepts two arguments.</p>
<ul>
<li><code>$file</code>: the template file to be included.<ul>
<li>(<em>optional</em>)(string) Default: <code>'comments.php'</code></li>
</ul></li>
<li><code>$separate_comments</code>: whether to separate comments by type.<ul>
<li>(<em>optional</em>)(boolean) Default: <code>false</code></li>
<li><code>true</code>: separate comments by type</li>
<li><code>false</code>: do not separate comments by type</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>single.php</li><li>page.php</li></ul>
</div>

<h3 id="get_footer">get_footer()</h3>
<div class="coderefdetail">
<p><code>get_footer()</code> is a WordPress include tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_footer">get_footer()</a></li></ul>

<p><code>get_footer()</code> is used to include the footer Theme template file (footer.php) within another. This function facilitates
re-use of Theme template files, and also facilitates child Theme template files to take precedence
over parent Theme template files.</p>

<p><code>get_footer( $foo )</code> will attempt to include footer-foo.php. If it doesn't exist, the default footer.php will be used.</p>

<p><code>get_footer( $name )</code> accepts one argument:
<ul>
<li><code>$name</code>: name of the footer, as "footer-$name.php", to include.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code> (include "footer.php")</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>page.php</li></ul>
</div>

<h3 id="get_header">get_header()</h3>
<div class="coderefdetail">
<p><code>get_header()</code> is a WordPress include tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_header">get_header()</a></li></ul>

<p><code>get_header()</code> is used to include the header Theme template file (header.php) within another. This function facilitates
re-use of Theme template files, and also facilitates child Theme template files to take precedence
over parent Theme template files.</p>

<p><code>get_header( $foo )</code> will attempt to include header-foo.php. If it doesn't exist, the default header.php will be used.</p>

<p><code>get_header( $name )</code> accepts one argument:
<ul>
<li><code>$name</code>: name of the header, as "header-$name.php", to include.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code> (include "header.php")</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>page.php</li></ul>
</div>

<h3 id="get_search_form">get_search_form()</h3>
<div class="coderefdetail">
<p><code>get_search_form()</code> is a WordPress include tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_search_form">get_search_form()</a></li></ul>

<p><code>get_search_form()</code> is used to display the search form. If the Theme includes a
searchform.php template file, it will be used. Otherwise, the built-in search form
will be used.</p>

<p><code>get_search_form()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="get_sidebar">get_sidebar()</h3>
<div class="coderefdetail">
<p><code>get_sidebar()</code> is a WordPress include tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_sidebar">get_sidebar()</a></li></ul>

<p><code>get_sidebar()</code> is used to include a sidebar template file within another. This function facilitates
re-use of Theme template files, and also facilitates child Theme template files to take precedence
over parent Theme template files.</p>

<p><code>get_sidebar( $name )</code> will attempt to include sidebar-name.php. The function will attempt to 
include files in the following order, until it finds one that exists:</p>
<ul>
<li>the Theme's sidebar-name.php</li>
<li>the Theme's sidebar.php</li>
<li>the parent Theme's sidebar-name.php</li>
<li>the parent Theme's sidebar.php</li>
</ul>

<p><code>get_sidebar()</code> with no argument passed will attempt to include sidebar.php. The function will
attempt to include files in the following order, until it finds one that exists:</p>
<ul>
<li>the Theme's sidebar.php</li>
<li>the parent Theme's sidebar.php</li>
</ul>

<p><code>get_sidebar( $name )</code> accepts one argument:
<ul>
<li><code>$name</code>: name of the sidebar, as "sidebar-$name.php", to include.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code> (include "sidebar.php")</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>page.php</li></ul>
</div>

<h3 id="get_template_part">get_template_part()</h3>
<div class="coderefdetail">
<p><code>get_template_part()</code> is a WordPress template tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/get_template_part">get_template_part()</a></li></ul>

<p><code>get_template_part()</code> is used to include a Theme template file within another. This function facilitates
re-use of Theme template files, and also facilitates child Theme template files to take precedence
over parent Theme template files.</p>

<p><code>get_template_part( $file )</code> will attempt to include file.php. The function will attempt to 
include files in the following order, until it finds one that exists:</p>
<ul>
<li>the Theme's file.php</li>
<li>the parent theme's file.php</li>
</ul>

<p><code>get_template_part( $file , $foo )</code> will attempt to include file-foo.php. The function will
attempt to include files in the following order, until it finds one that exists:</p>
<ul>
<li>the Theme's file-foo.php</li>
<li>the Theme's file.php</li>
<li>the parent theme's file-foo.php</li>
<li>the parent theme-s file.php</li>
</ul>

<p><code>get_template_part( $slug, $name )</code> accepts two arguments:
<ul>
<li><code>$slug</code>: slug of the template part, as "$slug.php", to include.<ul>
<li>(<em>required</em>)(string) Default: <code>none</code></li>
</ul></li>
<li><code>$name</code>: name of the template part, as "$slug-$name.php", to include.<ul>
<li>(<em>optional</em>)(string) Default: <code>null</code> (include "$slug.php")</li>
</ul></li>
</ul>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>index.php</li><li>loop.php</li><li>page.php</li><li>post-entry.php</li><li>site-header.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_conditional_tags">WordPress Conditional Tags</h2>

<p>Codex Reference: <a href="http://codex.wordpress.org/Conditional_Tags">Conditional Tags</a></p>

<h3 id="comments_open">comments_open()</h3>
<div class="coderefdetail">
<p><code>comments_open()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/comments_open">comments_open</a></li></ul>

<p><code>comments_open()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
comments are open for the current post.</p>

<p><code>comments_open( $postid )</code> accepts one argument:</p>
<ul><li><code>$postid</code>: PostID of the post being checked. Defaults to the current post.</li></ul>

<p><code>comments_open()</code> must be used from within the Loop, unless the $postid parameter is used.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php, loop.php</li></ul>
</div>

<h3 id="has_nav_menu">has_nav_menu()</h3>
<div class="coderefdetail">
<p><code>has_nav_menu()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/has_nav_menu">has_nav_menu()</a></li></ul>

<p><code>has_nav_menu( $menu )</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a nav_menu named $menu has been configured by the user; otherwise it returns false.</p>

<p><code>has_nav_menu()</code> is useful for defining a fallback option for a navigation menu, in case the
user does not define a particular nav menu in the Menus administration panel.</p>

<p>Used in the following template files:</p>
<ul><li>sidebar-left.php, site-navigation.php</li></ul>
</div>

<h3 id="have_comments">have_comments()</h3>
<div class="coderefdetail">
<p><code>have_comments()</code> is a WordPress conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/have_comments">have_comments()</a></li></ul>

<p><code>have_comments()</code> is a conditional that returns <code>TRUE</code> if the current post has comments
associated with it; otherwise, it returns <code>FALSE</code>. The most typical use of this conditional
is within the comments template, as part of the comments "Loop".</p>

<p><code>have_comments()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>if ( have_comments() )</code><br />
<small>is used to begin the comments "Loop", which displays only if the current
post has comments.</small></li></ul>

<p><code>have_comments()</code> must be used from within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="have_posts">have_posts()</h3>
<div class="coderefdetail">
<p><code>have_posts()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/User:Samsm/have_posts">have_posts()</a></li></ul>

<p><code>have_posts()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
the current query has posts available. It is primarily used in conjunction with <code>the_post()</code> 
as part of the call to the Loop.</p>

<p>Example (the Loop):</p>
<ul><li><code>if ( have_posts() ) : while ( have_posts() ) : the_post();</code><br />
<small>used to begin the Posts "Loop"</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>loop.php</li></ul>
</div>

<h3 id="is_404">is_404()</h3>
<div class="coderefdetail">
<p><code>is_404()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_404">is_404()</a></li></ul>

<p><code>is_404()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a 404 error page is currently displayed.</p>

<p>A 404 error page corresponds to the 404.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
page will have <code>class="error404"</code>.</p>

<p><code>is_404()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="is_archive">is_archive()</h3>
<div class="coderefdetail">
<p><code>is_archive()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_archive">is_archive()</a></li></ul>

<p><code>is_archive()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
an archive page is currently displayed.</p>

<p>An archive page corresponds to the archive.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
archive page will have <code>class="archive"</code>.</p>

<p><code>is_archive()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
</div>

<h3 id="is_attachment">is_attachment()</h3>
<div class="coderefdetail">
<p><code>is_attachment()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_attachment">is_attachment()</a></li></ul>

<p><code>is_attachment()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
an attachment post ("attachment" post-type) is currently displayed.</p>

<p>An attachment post corresponds to the attachment.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
attachment post will have <code>class="attachment"</code>.</p>

<p><code>is_attachment()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>post-entry.php</li></ul>
</div>

<h3 id="is_author">is_author()</h3>
<div class="coderefdetail">
<p><code>is_author()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_author">is_author()</a></li></ul>

<p><code>is_author()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
an author archive page is currently displayed.</p>

<p>An author archive page corresponds to the author.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
author page will have <code>class="author"</code>.</p>

<p><code>is_author()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="is_category">is_category()</h3>
<div class="coderefdetail">
<p><code>is_category()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_category">is_category()</a></li></ul>

<p><code>is_category()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a category page is currently displayed.</p>

<p>A category page corresponds to the category.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of a
category page will have <code>class="category"</code>.</p>

<p><code>is_category( $category )</code> accepts one optional argument:</p>
<ul>
<li><code>$category</code>: category ID, slug, or nicename. If used, will return <code>TRUE</code> if the current
  page corresponds to the indicated category.</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>loop-header.php</li></ul>
</div>

<h3 id="is_day">is_day()</h3>
<div class="coderefdetail">
<p><code>is_day()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_day">is_day()</a></li></ul>

<p><code>is_day()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a date (day) archive page is currently displayed.</p>

<p>A date (day) archive page corresponds to the archive.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of a
date (day) page will have <code>class="date"</code>.</p>

<p><code>is_day()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="is_feed">is_feed()</h3>
<div class="coderefdetail">
<p><code>is_feed()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_feed">is_feed()</a></li></ul>

<p><code>is_feed()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a feed is currently displayed.</p>

<p>A feed does not correspond to any template files in the Theme hierarchy.</p>

<p><code>is_feed()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="is_home">is_home()</h3>
<div class="coderefdetail">
<p><code>is_home()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_home">is_home()</a></li></ul>

<p><code>is_home()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
the home page (i.e. the blog posts index) is currently displayed.</p>

<p>The home page, or blog post index page, corresponds to the index.php and/or home.php Theme template files in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
page will have <code>class="blog"</code>.</p>

<p><code>is_home()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>post-entry.php</li></ul>
</div>

<h3 id="is_month">is_month()</h3>
<div class="coderefdetail">
<p><code>is_month()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_month">is_month()</a></li></ul>

<p><code>is_month()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a date (month) archive page is currently displayed.</p>

<p>A date (month) archive page corresponds to the archive.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of a
date (month) page will have <code>class="date"</code>.</p>

<p><code>is_month()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="is_page">is_page()</h3>
<div class="coderefdetail">
<p><code>is_page()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_page">is_page()</a></li></ul>

<p><code>is_page()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a page ("Page" post-type) or an attachment ("Attachment" post-type) is currently displayed.</p>

<p>A Page corresponds to the page.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
page will have <code>class="page"</code>.</p>

<p><code>is_page( $page )</code> accepts one optional argument:</p>
<ul>
<li><code>$page</code>: page ID, slug, or nicename. If used, will return TRUE if the current
  page corresponds to the indicated page.</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>loop.php</li><li>post-entry.php</li><li>post-footer.php</li><li>post-header.php</li><li>sidebar-left.php</li></ul>
</div>

<h3 id="is_search">is_search()</h3>
<div class="coderefdetail">
<p><code>is_search()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_search">is_search()</a></li></ul>

<p><code>is_search()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a search results page is currently displayed.</p>

<p>A search results page corresponds to the search.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
page will have <code>class="search"</code>.</p>

<p><code>is_search()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>loop-header.php</li></ul>
</div>

<h3 id="is_single">is_single()</h3>
<div class="coderefdetail">
<p><code>is_single()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_single">is_single()</a></li></ul>

<p><code>is_single()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a single post ("post" post-type, i.e. a single blog post) is currently displayed.</p>

<p>A single post corresponds to the single.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of a 
single post will have <code>class="single"</code>.</p>

<p><code>is_single()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>loop.php</li><li>post-entry.php</li><li>post-footer.php</li><li>post-header.php</li></ul>
</div>

<h3 id="is_singular">is_singular()</h3>
<div class="coderefdetail">
<p><code>is_singular()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_singular">is_singular()</a></li></ul>

<p><code>is_singular()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if any of the following are true:</p>
<ul>
<li><code>is_single()</code> - a single post ("post" post-type, i.e. a single blog post) is displayed</li>
<li><code>is_page()</code> - a page ("page" post-type) is displayed</li>
<li><code>is_attachment()</code> - an attachment </li>
</ul>

<p><code>is_singular()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>header.php</li><li>loop-footer.php</li></ul>
</div>

<h3 id="is_tag">is_tag()</h3>
<div class="coderefdetail">
<p><code>is_tag()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_tag">is_tag()</a></li></ul>

<p><code>is_tag()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a tag page is currently displayed.</p>

<p>A tag page corresponds to the tag.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of an
page will have <code>class="tag"</code>.</p>

<p><code>is_tag( $tag )</code> accepts one optional argument:</p>
<ul>
<li><code>$tag</code>: tag ID, slug, or nicename. If used, will return TRUE if the current
  page corresponds to the indicated tag.</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>loop-header.php</li></ul>
</div>

<h3 id="is_user_logged_in">is_user_logged_in()</h3>
<div class="coderefdetail">
<p><code>is_user_logged_in()</code> is a WordPress conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_user_logged_in">is_user_logged_in()</a></li></ul>

<p><code>is_user_logged_in()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns
true if the current user is logged in; otherwise it returns false.</p>

<p><code>is_user_logged_in()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="is_year">is_year()</h3>
<div class="coderefdetail">
<p><code>is_year()</code> is a WordPress template conditional tag.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_year">is_year()</a></li></ul>

<p><code>is_year()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
a date (year) archive page is currently displayed.</p>

<p>A date (year) archive page corresponds to the archive.php Theme template file in the
Theme hierarchy, and if the <code>body_class()</code> hook is used, the <code>&lt;body&gt;</code> tag of a
date (year) page will have <code>class="date"</code>.</p>

<p><code>is_year()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="post_password_required">post_password_required()</h3>
<div class="coderefdetail">
<p><code>post_password_required()</code> is a WordPress conditional tag.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>post_password_required()</code> is a conditional that returns TRUE if the current post is password-protected; 
otherwise, it returns FALSE. The most typical use of this conditional is within the comments template, as 
part of the comments "Loop".</p>

<p><code>post_password_required()</code> accepts no arguments.</p>

<p>Example:</p>
<ul><li><code>if ( post_password_required() )</code><br />
<small>is used to display a "password required" message, and prevents post
comments from displaying, if the post is password-protected.</small></li></ul>

<p><code>post_password_required()</code> must be used from within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>comments.php</li></ul>
</div>

<h3 id="wp_attachment_is_image">wp_attachment_is_image()</h3>
<div class="coderefdetail">
<p><code>wp_attachment_is_image()</code> is a WordPress template conditional tag</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/is_attachment">wp_attachment_is_image()</a></li></ul>

<p><code>wp_attachment_is_image()</code> is a boolean (returns TRUE or FALSE) conditional tag that returns true if 
the current post's attachment is an image.</p>

<p>Used in the following template files:</p>
<ul><li>post-entry.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_hooks">WordPress Hooks</h2>

<p>Codex References:</p>
<ul>
<li><a href="http://codex.wordpress.org/Plugin_API">Plugin API</a></li>
<li><a href="http://codex.wordpress.org/Plugin_API/Filter_Reference">Plugin API/Filter Hook Reference</a></li>
<li><a href="http://codex.wordpress.org/Plugin_API/Action_Reference">Plugin API/Action Hook Reference</a></li>
</ul>

<h3 id="hook_after_setup_theme">after_setup_theme</h3>
<div class="coderefdetail">
<p><code>after_setup_theme</code> is a WordPress action hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>after_setup_theme</code> is used by Themes/Plugins, usually to define Theme setup parameters and to 
add Theme support for various features.</p>

<p>Used in the following template files:</p>
<ul><li>functions/theme-setup.php</li></ul>

</div>

<h3 id="hook_get_comments_number">get_comments_number</h3>
<div class="coderefdetail">
<p><code>get_comments_number</code> is a WordPress filter hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>get_comments_number</code> is used to modify the output of the <code>comments_number()</code> function.</p>

<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>

</div>

<h3 id="hook_widgets_init">widgets_init</h3>
<div class="coderefdetail">
<p><code>widgets_init</code> is a WordPress action hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>widgets_init</code> is used by Themes/Plugins, usually to define and register custom Widgets and to 
register dynamic sidebars.</p>

<p>Used in the following template files:</p>
<ul><li>functions/widgets.php</li></ul>

</div>

<h3 id="hook_wp_enqueue_scripts">wp_enqueue_scripts</h3>
<div class="coderefdetail">
<p><code>wp_enqueue_scripts</code> is a WordPress action hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>wp_enqueue_scripts</code> is used by Themes/Plugins, to output enqueued scripts on the front end of the site.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="hook_wp_footer">wp_footer</h3>
<div class="coderefdetail">
<p><code>wp_footer</code> is a WordPress action hook.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Plugin_API/Action_Reference/wp_footer">wp_footer</a></li></ul>

<p><code>wp_footer</code> is used by Themes/Plugins, usually to insert scripts 
(or, although incorrect: content) into the WordPress Theme footer.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="hook_wp_head">wp_head</h3>
<div class="coderefdetail">
<p><code>wp_head</code> is a WordPress action hook.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Hook_Reference/wp_head">wp_head</a></li></ul>

<p><code>wp_head</code> is used by themes/plugins, usually to insert scripts into the HTML document head.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>
</div>

<h3 id="hook_wp_list_categories">wp_list_categories</h3>
<div class="coderefdetail">
<p><code>wp_list_categories</code> is a WordPress filter hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>wp_list_categories</code> is used to modify the output of the <code>wp_list_categories()</code> function.</p>

<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>

</div>

<h3 id="hook_wp_title">wp_title</h3>
<div class="coderefdetail">
<p><code>wp_title</code> is a WordPress filter hook.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>wp_title</code> is used to modify the output of the <code>wp_title()</code> function.</p>

<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>

</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_global_variables">WordPress Global Variables</h2>

<h3 id="var_page">$page</h3>
<div class="coderefdetail">
<p><code>$page</code> is a WordPress global variable.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>$page</code> <em>(string)</em> stores the current page number of a multi-page single blog Post or static Page.</p>

<p><code>$page</code> applies <em>only</em> to single Posts or Pages, <em>not</em> to archive pages.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="var_page">$pages</h3>
<div class="coderefdetail">
<p><code>$page</code> is a WordPress global variable.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>$pages</code> <em>(array)</em> is an array that stores the number of pages into which a multi-page single 
blog Post or static Page has been split.</p>

<p><code>$pages</code> applies <em>only</em> to single blog Posts or static Pages, <em>not</em> to archive index pages.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="var_paged">$paged</h3>
<div class="coderefdetail">
<p><code>$page</code> is a WordPress global variable.</p>
<ul><li>Codex reference: N/A</li></ul>

<p><code>$paged</code> <em>(string)</em> stores the current page number of an archive index page.</p>

<p><code>$paged</code> applies <em>only</em> to archive index pages, <em>not</em> to single blog Posts or static Pages.</p>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="var_post">$post</h3>
<div class="coderefdetail">
<p><code>$post</code> is a WordPress global variable.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Database_Description#Table:_wp_posts">Database Description: wp_posts table</a></li></ul>

<p><code>$post</code> <em>(object)</em> is an object that stores data for the currently queried Post.</p>

<p><code>$post</code> is used to return Post data, such as:</p>
<ul>
<li><code>$post->ID</code>: ID of the current Post</li>
<li><code>$post->post_title</code>: title of the current Post</li>
<li><code>$post->post_content</code>: content of the current Post</li>
<li><code>$post->post_excerpt</code>: excerpt of the current Post</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>(TBD)</li></ul>

</div>

<h3 id="var_wpdb">$wpdb</h3>
<div class="coderefdetail">
<p><code>$wpdb</code> is a WordPress global variable.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/wpdb_Class">wpdb Class</a></li></ul>

<p><code>$wpdb</code> <em>(object)</em> is an instance of the wpdb Class.</p>

<p><code>$wpdb</code> is used to return custom query data.</p>

<p>Used in the following template files:</p>
<ul><li>functions/custom.php</li></ul>

</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_wordpress_constants">WordPress Constants</h2>

<h3 id="const_header_image_height">HEADER_IMAGE_HEIGHT</h3>
<div class="coderefdetail">
<p><code>HEADER_IMAGE_HEIGHT</code> is a WordPress constant.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_image_header">add_custom_image_header()</a></li></ul>

<p><code>HEADER_IMAGE_HEIGHT</code> is defined in functions/theme-setup.php.</p>

<p><code>HEADER_IMAGE_HEIGHT</code> defines the height, in pixels, of the custom header image.</p>

<p>Example:</p>
<ul><li><code>define( 'HEADER_IMAGE_HEIGHT', '198' );</code><br />
<small>Defines the custom header image height as 198px.</small></li></ul>

</div>

<h3 id="const_header_image_width">HEADER_IMAGE_WIDTH</h3>
<div class="coderefdetail">
<p><code>HEADER_IMAGE_WIDTH</code> is a WordPress constant.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_image_header">add_custom_image_header()</a></li></ul>

<p><code>HEADER_IMAGE_WIDTH</code> is defined in functions/theme-setup.php.</p>

<p><code>HEADER_IMAGE_WIDTH</code> defines the width, in pixels, of the custom header image.</p>

<p>Example:</p>
<ul><li><code>define( 'HEADER_IMAGE_WIDTH', '1000' );</code><br />
<small>Defines the custom header image width as 1000px.</small></li></ul>

</div>

<h3 id="const_header_textcolor">HEADER_TEXTCOLOR</h3>
<div class="coderefdetail">
<p><code>HEADER_TEXTCOLOR</code> is a WordPress constant.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_image_header">add_custom_image_header()</a></li></ul>

<p><code>HEADER_TEXTCOLOR</code> is defined in functions/theme-setup.php.</p>

<p><code>HEADER_TEXTCOLOR</code> defines the color, in hexadecimal units, of the custom header image.<br />
Note: omit the octothorpe (#) prefix when defining this constant. For example, for black, use '000000' rather 
than '#000000'.</p>

<p>Example:</p>
<ul><li><code>define( 'HEADER_TEXTCOLOR', '000000' );</code><br />
<small>Defines the custom header text color as #000000 (i.e. black).</small></li></ul>

</div>

<h3 id="const_no_header_text">NO_HEADER_TEXT</h3>
<div class="coderefdetail">
<p><code>NO_HEADER_TEXT</code> is a WordPress constant.</p>
<ul><li>Codex reference: <a href="http://codex.wordpress.org/Function_Reference/add_custom_image_header">add_custom_image_header()</a></li></ul>

<p><code>NO_HEADER_TEXT</code> is defined in functions/theme-setup.php.</p>

<p><code>NO_HEADER_TEXT</code> defines the ability for the user to change the header text color.</p>
<ul><li><code>true</code>: User <em>cannot</em> change the header text color</li>
<li><code>false</code>: User <em>can</em> change the header text color</li></ul>

<p>Example:</p>
<ul><li><code>define( 'NO_HEADER_TEXT', false );</code><br />
<small>Allows changing of the header text color.</small></li></ul>

</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_php_functions">PHP Functions</h2>

<h3 id="_server">$_SERVER[]</h3>
<div class="coderefdetail">
<p><code>$_SERVER[]</code> is a PHP function that returns various server variables.</p>
<ul>
<li>PHP reference: <a href="http://php.net/manual/en/reserved.variables.server.php">$_SERVER</a></li>
</ul>

<p>Example:</p>
<ul>
<li><code>$_SERVER['PHP_SELF']</code><br />Returns the name of the current file</li>
</ul>

<p>Used in the following template files:</p>
<ul>
<li>(tbd)</li>
</ul>
</div>

<h3 id="array_map">array_map()</h3>
<div class="coderefdetail">
<p><code>array_map()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.array-map.php">array_map()</a></li></ul>

<p><code>array_map()</code> is used to apply a callback to the elements of the given array(s)</p>

<p><code>array_map()</code> returns an array containing all the elements of arr1 after applying the callback function to each one. 
The number of parameters that the callback function accepts should match the number of arrays passed to the array_map()</p>

<p><code>array_map( $callback, $array )</code> accepts two arguments:</p>
<ul>
<li><code>$callback</code>: the function to apply to the array</li>
<li><code>$array</code>: the array to which to apply the function</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="array_reverse">array_reverse()</h3>
<div class="coderefdetail">
<p><code>array_reverse()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.array-reverse.php">array_reverse()</a></li></ul>

<p><code>array_reverse()</code> is used to reverse the order of elements in an array</p>

<p><code>array_reverse()</code> will take an array containing elements array[0] = A, array[1] = B, array[2] = C,
and reverse the array, such that array[0] = C, array[1] = B, array[2] = A.</p>

<p><code>array_reverse( $array, $preserve_keys )</code> accepts two arguments:</p>
<ul>
<li><code>$array</code>: the array to reverse</li>
<li><code>$preserve_keys</code>: (boolean) set to TRUE to preserve keys</li>
</ul>

<p>Example:</p>
<ul><li><code>$breadcrumbs = array_reverse($breadcrumbs);</code><br />
<small>Reverses the order of elements in the <code>$breadcrumb</code> array (containing a list of Parent Categories)</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="array_values">array_values()</h3>
<div class="coderefdetail">
<p><code>array_values()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.array-values.php">array_values()</a></li></ul>

<p><code>array_values()</code> is used to return an array of indexed values</p>

<p><code>array_values()</code> will take an array containing elements "size" => "XL", "color" => "black", "sleeve" => "long",
and return an array containing elements array[0] = "XL", array[1] = "black", array[3] = "long"</p>

<p><code>array_values( $array )</code> accepts one argument:</p>
<ul>
<li><code>$array</code>: array for which to return values</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="basename">basename()</h3>
<div class="coderefdetail">
<p><code>basename()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.basename.php">basename()</a></li></ul>

<p><code>basename()</code> is used to return the filename component of a "\path\to\filename.ext" string</p>

<p><code>basename( $path, $ext )</code> accepts two arguments:</p>
<ul>
<li><code>$path</code>: string containing a filepath</li>
<li><code>$ext</code>: file extension, e.g. ".php". If included, the indicated extension will omitted from the returned value</li>
</ul>
<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="count">count()</h3>
<div class="coderefdetail">
<p><code>count()</code> is a PHP function.</p>
PHP reference: <a href="http://php.net/manual/en/function.count.php">count()</a>

<p><code>count()</code> is used to count the number of elements in an array.</p>

<p><code>count()</code> will take an array containing elements array[0] = "red", array[1] = "green", array[2] = "blue",
and return the value "3".</p>

<p><code>count( $array, $mode )</code> accepts two arguments:</p>
<ul>
<li><code>$array</code>: the array for which to count the elements.</li>
<li><code>$mode</code>: count normally, or count recursively. Default: count_normal.</li>
</ul>

<p>Example:</p>
<ul><li><code>count($comments_by_type['comment']);</code><br />
<small>Returns the number of comments of type 'comment' (rather than 'trackback' or 'pingback') for the current <code>Post->$ID</code>.</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="create_function">create_function()</h3>
<div class="coderefdetail">
<p><code>create_function()</code> is a WordPress function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.create-function.php">create_function()</a></li></ul>

<p><code>create_function()</code> is used to create an anonymous function from the parameters passed, 
and return a unique name for it. </p>

<p><code>create_function( $args, $code )</code> accepts two arguments:</p>
<ul>
<li><code>$args</code>: the arguments to pass to the function</li>
<li><code>$code</code>: the function code</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="date">date()</h3>
<div class="coderefdetail">
<p><code>date()</code> is a PHP function that returns the current date.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.date.php">date()</a></li></ul>

<p><code>date()</code> accepts one argument: a string indicating the date format.</p>

<p>Used in the following template files:</p>
<ul><li>footer.php</li></ul>
</div>

<h3 id="define">define()</h3>
<div class="coderefdetail">
<p><code>define()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.define.php">define()</a></li></ul>

<p><code>define()</code> is used to define a named constant.</p>

<p><code>define( $name, $value, $case_insensitive )</code> accepts arguments:</p>
<ul>
<li><code>$name</code>: name of the constant. Default: none.</li>
<li><code>$value</code>: value of the constant. Default: none.</li>
<li><code>$case_insensitive</code>: (boolean) determines if constant name is case-sensitive or not.<ul>
<li><code>TRUE</code>: name is case-sensitive ("CONSTANT" and "constant" are two different constants)</li>
<li><code>FALSE</code>: name is case-insensitive ("CONSTANT" and "constant" are the same constant)</li>
<li>Default: <code>FALSE</code></li>
</ul></li>
</ul>

<p>Example:</p>
<ul><li><code>define( 'HEADER_TEXTCOLOR', '000000' );</code><br />
<small>Defines the "HEADER_TEXTCOLOR" constant, with a value of "000000" (the HEX value for black)</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="max">max()</h3>
<div class="coderefdetail">
<p><code>max()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.max.php">max()</a></li></ul>

<p><code>max()</code></p> is used to determine the highest numerical value of a given group of inputs.</p>

<p><code>max()</code> returns the highest numerical value of the given inputs. String values can be passed to the function,
but are evaluated as a numerical value of zero.</p>

<p><code>max( $arg1, $arg2, etc )</code> accepts multiple arguments:</p>
<ul><li><code>$arg1, $arg2, etc</code>: a list of values</li></ul>

<p><code>max( $array )</code> accepts one argument:</p>
<ul>
<li><code>$array</code>: an array, for which each array value will be evaluated.
<ul><li>If used, an array MUST be the FIRST and ONLY value passed to the function, in order for the function
 to evaluate each array value</li></ul>
</li>
</ul>

<p>Example:</p>
<ul><li><code>max( $paged, $page ) );</code><br />
<small>Will return the higher value between $paged (index page number) and $page (single-post page number)</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="number_format">number_format()</h3>
<div class="coderefdetail">
<p><code>number_format()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://us.php.net/manual/en/function.number-format.php">number_format()</a></li></ul>

<p><code>number_format()</code> is used to format a number with grouped thousands.</p>

<p><code>number_format( $number, $decimals, $dec_point, $thousands_sep )</code> accepts one, two, our four arguments:</p>
<ul>
<li><code>$number</code>: the number to be formatted</li>
<li><code>$decimals</code>: (optional) the number of decimal places. Default: 0</li>
<li><code>$dec_point / $thousands_sep</code>: (optional, but must be in tandem if used) string value to use for 
 decimal place and thousands separator. Defaults: dot (".") for decimal place, and comma (",") for 
 thousands separator.</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="preg_replace">preg_replace()</h3>
<div class="coderefdetail">
<p><code>preg_replace()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://us.php.net/manual/en/function.preg-replace.php">preg_replace()</a></li></ul>

<p><code>preg_replace()</code> is used to perform a regular-expression search-and-replace.</p>

<p><code>preg_replace()</code> returns an array if the subject parameter is an array, or a string otherwise. If matches are 
found, the new subject will be returned, otherwise subject will be returned unchanged or NULL if an error occurred.</p>

<p><code>preg_replace( $pattern, $replacement, $subject )</code> accepts arguments:</p>
<ul>
<li><code>$pattern</code>: the pattern for which to search</li>
<li><code>$replacement</code>: the string with which to replace found instances of <code>$pattern</code></li>
<li><code>$subject</code>: the string on which to perform the search (for <code>$pattern</code>)-and-replace (with <code>$replacement</code>)</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="require_once">require_once()</h3>
<div class="coderefdetail">
<p><code>require_once()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.require-once.php">require_once()</a></li></ul>

<p><code>require_once( $file )</code> will include the file specified by the <code>$file</code> argument.</p>

<p><code>require_once()</code> will return a fatal error if the specified file cannot be included. Also, if theme
specified file has already been included, <code>require_once()</code> will not attempt to include it again.</p>

<p><code>require_once( $file )</code> accepts one argument:</p>
<ul><li><code>$file</code> (string): file to be included.</li></ul>

<p>Example:</p>
<ul><li><code>require_once( 'foo.php' )</code><br />
<small>will include the file "foo.php"</small></li></ul>
 
<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>functions/options.php</li><li>functions/options-init.php</li></ul>
</div>

<h3 id="sprintf">sprintf()</h3>
<div class="coderefdetail">
<p><code>sprintf()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://us.php.net/manual/en/function.sprintf.php">sprintf()</a></li></ul>

<p><code>sprintf()</code> is used to return a string formatted according to the
defined formatting string format. See the PHP reference for more information.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="str_replace">str_replace()</h3>
<div class="coderefdetail">
<p><code>str_replace()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.str-replace.php">str_replace()</a></li></ul>

<p><code>str_replace()</code> is used to replace all occurrences of the search string with
the replacement string.</p>

<p><code>str_replace()</code> returns a string or array (depending on what arguments are passed)
that contains the replaced strings.</p>

<p>str_replace( $search, $replace, $subject, $count ) accepts arguments:</p>
<ul>
<li><code>$search</code>: string to be replaced. Can be a string, or an array of strings</li>
<li><code>$replace</code>: string with which to replace. Can be a string, or an array of strings.</li>
<li><code>$subject</code>: string from within to search/replace. Can be a string, or an arrya of strings.</li>
<li><code>$count</code>: integer. If passed, holds the number of replacements performed.</li>
</ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="trim">trim()</h3>
<div class="coderefdetail">
<p><code>trim()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.trim.php">trim()</a></li></ul>

<p><code>trim()</code> is used to strip whitespace or characters from the beginning
and end of a string.</p>

<p><code>trim( $string )</code> accepts one argument:</p>
<ul><li><code>$string</code>: string to be trimmed</li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="urldecode">urldecode()</h3>
<div class="coderefdetail">
<p><code>urldecode()</code> is a PHP function.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.urlencode.php">urldecode()</a></li></ul>

<p><code>urldecode()</code> is used to URL-encode a string.</p>

<p><code>urldecode()</code> returns a string in which all non-alphanumeric characters except -_. 
have been replaced with a percent (%) sign followed by two hex digits and spaces 
encoded as plus (+) signs. It is encoded the same way that the posted data from a 
WWW form is encoded, that is the same way as in application/x-www-form-urlencoded 
media type.</p>

<p><code>urldecode( $string )</code> accepts one argument:</p>
<ul><li><code>$string</code>: string to URL-encode</li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_php_conditionals">PHP Conditionals</h2>

<h3 id="file_exists">file_exists()</h3>
<div class="coderefdetail">
<p><code>file_exists()</code> is a PHP conditional.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.file-exists.php">file_exists()</a></li></ul>

<p><code>file_exists()</code> is a boolean (returns TRUE or FALSE) conditional function that returns true if 
the specified file exists.</p>

<p><code>file_exists( $filepath )</code> accepts one argument:</p>
<ul><li><code>$filepath</code>: (string) the filepath and filename, e.g. <code>'/path/to/my/file.ext'</code></li></ul>

<p>Example:</p>
<ul><li><code>file_exists( get_theme_root() . '/twentyten/style.css' )</code><br />
<small>returns TRUE if the file is found</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="filesize">filesize()</h3>
<div class="coderefdetail">
<p><code>filesize()</code> is a PHP conditional.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.filesize.php">filesize()</a></li></ul>

<p><code>filesize()</code> is used to return the size, in bytes, of the specified file </p>

<p><code>filesize( $file )</code> accepts one argument:</p>
<ul><li><code>$file</code>: string containing full path to file for which to return the size.</li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="function_exists">function_exists()</h3>
<div class="coderefdetail">
<p><code>function_exists()</code> is a PHP conditional.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.function-exists.php">function_exists()</a></li></ul>

<p><code>function_exists( 'foo' )</code> returns TRUE if a function named foo() is found; otherwise, it returns FALSE.</p>

<p>Used in the following template files:</p>
<ul><li>404.php</li><li>functions.php</li><li>loop-footer.php</li><li>post-entry.php</li></ul>
</div>

<h3 id="is_array">is_array()</h3>
<div class="coderefdetail">
<p><code>is_array()</code> is a PHP conditional.</p>
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.is-array.php">is_array()</a></li></ul>

<p><code>is_array()</code> is a boolean (returns TRUE or FALSE) conditional function that returns true if
a variable is an array.</p>

<p><code>is_array()</code> accepts one argument: the variable to be evaluated</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<h3 id="isset">isset()</h3>
<div class="coderefdetail">
<code>isset()</code> is a PHP conditional.
<ul><li>PHP reference: <a href="http://php.net/manual/en/function.isset.php">isset()</a></li></ul>

<p><code>isset()</code> is used to determine if a specified variable is set, and is not NULL.</p>

<p><code>isset()</code> returns TRUE if the specified veriable is set, and is not NULL. Otherwise, it
returns false. Note: a zero-value ("0") is *not* equivalent to a NULL value.</p>

<p><code>isset( $arg )</code> accepts arguments:</p>
<ul>
<li><code>$arg</code>: variable to evaluate</li>
</ul>
<p><code>isset()</code> can take multiple variables. In this case, variables ae evaluated as defined 
 from left to right, and the function returns true only if ALL variables return true. Upon
 the first occurrence of a NULL-value variable, the function stops evaluating, and returns false.</p>

<p>Example:</p>
<ul><li><code>if ( ! isset( $content_width ) ) {<br />
  $content_width = 640;<br />
}</code><br />
<small>This conditional will determine if the <code>$content_width</code> variable is set. If <code>$content_width</code> is not already
set, then it is set to a value of "640".</small></li></ul>

<p>Used in the following template files:</p>
<ul><li>functions.php</li></ul>
</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_oenology_custom_functions">Oenology Custom Functions</h2>

<h3 id="oenology_404_handler">oenology_404_handler()</h3>
<div class="coderefdetail">
<p><code>oenology_404_handler()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_404_handler()</code> is used to generate suggested site content when a user is sent to
the 404 page due to a server 404 "file not found" error.</p>

<p><code>oenology_404_handler()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>404.php</li></ul>
</div>

<h3 id="oenology_admin_header_style">oenology_admin_header_style()</h3>
<div class="coderefdetail">
<p><code>oenology_admin_header_style()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/theme-setup.php</li></ul>

<p><code>oenology_admin_header_style()</code> is used to define the CSS to apply to the header image displayed
on the Custom Header admin option page, as part of the Custom Image Header feature.</p>

</div>

<h3 id="oenology_breadcrumb">oenology_breadcrumb()</h3>
<div class="coderefdetail">
<p><code>oenology_breadcrumb()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_breadcrumb()</code> is used to output breadcrumb links.</p>

<p><code>oenology_breadcrumb()</code> outputs a home link, followed by appropriate breadcrumb links,
including categories (hierarchical), tags, search query, etc.</p>

<p><code>oenology_breadcrumb()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>infobar.php</li></ul>
</div>

<h3 id="oenology_comment_count">oenology_comment_count()</h3>
<div class="coderefdetail">
<p><code>oenology_comment_count()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_comment_count()</code> is used to return only the number of comment-type 
comments (excluding trackbacks/pingbacks)</p>

<p><code>oenology_comment_count()</code> hooks into the get_comments_number() filter hook.</p>

</div>

<h3 id="oenology_copyright">oenology_copyright()</h3>
<div class="coderefdetail">
<p><code>oenology_copyright()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_copyright()</code> is used to output the copyright date range, in the format 'XXXX - YYYY',
where 'XXXX' is the year the oldest post was published, and'YYYY' is the current year.</p>

<p><code>oenology_copyright()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>footer.php</li></ul>
</div>

<h3 id="oenology_filter_wp_title">oenology_filter_wp_title()</h3>
<div class="coderefdetail">
<p><code>oenology_filter_wp_title()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_filter_wp_title()</code> is used to display more accurate information in <code>wp_title()</code>,
according to current location (search query, single post, etc.)</p>

<p><code>oenology_filter_wp_title()</code> hooks into the <code>wp_title</code> filter hook.</p>

</div>

<h3 id="oenology_gallery_image_meta">oenology_gallery_image_meta()</h3>
<div class="coderefdetail">
<p><code>oenology_gallery_image_meta()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_gallery_image_meta()</code> is used to output various metadata related to
gallery images.</p>

<p><code>oenology_gallery_image_meta()</code> outputs an array containing the
following values:</p>
<ul>
<li><code>$image_meta['image']</code>: image output, using wp_get_attachment_image()</li>
<li><code>$image_meta['url']</code>: image attachment url, using wp_get_attachment_url()</li>
<li><code>$image_meta['width']</code>: image width, in px</li>
<li><code>$image_meta['height']</code>: image height, in px</li>
<li><code>$image_meta['dimensions']</code>: image width/height dimensions, in px, displayed as "# x # px"</li>
<li><code>$image_meta['filesize']</code>: image filesize, converted to human-readable size format, displayed as e.g. "### kb"</li>
<li><code>$image_meta['created_timestamp']</code>: image metadata - date/time image taken, displayed as "D MMM YYYY"</li>
<li><code>$image_meta['copyright']</code>: image metadata - copyright statement</li>
<li><code>$image_meta['credit']</code>: image metadata - photographer</li>
<li><code>$image_meta['aperture']</code>: image metadata - camera aperture setting</li>
<li><code>$image_meta['focal_length']</code>: image metadata - camera focal length setting, displayed as "f/###"</li>
<li><code>$image_meta['iso']</code>: image metadata - camera ISO setting</li>
<li><code>$image_meta['shutter_speed']</code>: image metadata - camera shutter speed setting, displayed as e.g. "1/### sec"</li>
<li><code>$image_meta['camera']</code>: image metadata - camera type</li>
<li><code>$image_meta['caption']</code>: the image caption, as defined in image settings</li>
</ul>
<p><code>oenology_gallery_image_meta()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>post-entry-image.php</li></ul>
</div>

<h3 id="oenology_gallery_links">oenology_gallery_links()</h3>
<div class="coderefdetail">
<p><code>oenology_gallery_links()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_gallery_links()</code> is used to output "previous" and "next" links with both text and
thumbnail images, for use with gallery images.</p>

<p><code>oenology_gallery_links()</code> outputs an array containing the
following values:</p>
<ul>
<li><code>$links['prevlink']</code>: text link to previous gallery image</li>
<li><code>$links['prevthumb']</code>: thumbnail of previous gallery image</li>
<li><code>$links['nextlink']</code>: text link to next gallery image</li>
<li><code>$links['nextthumb']</code>: thumbnail of next gallery image</li>
</ul>

<p><code>oenology_gallery_links()</code> accepts no arguments.</p>

<p>Used in the following template files:</p>
<ul><li>post-entry-image.php</li></ul>
</div>

<h3 id="oenology_header_style">oenology_header_style()</h3>
<div class="coderefdetail">
<p><code>oenology_header_style()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/theme-setup.php</li></ul>

<p><code>oenology_header_style()</code> is used to define the CSS to apply to the header image, as part
of the Custom Image Header feature.</p>

</div>

<h3 id="oenology_load_widgets">oenology_load_widgets()</h3>
<div class="coderefdetail">
<p><code>oenology_load_widgets()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_load_widgets()</code> is used to register the custom Theme Widgets.</p>

<p><code>oenology_load_widgets()</code> hooks into the <code>widgets_init</code> action hook.</p>

</div>

<h3 id="oenology_setup">oenology_setup()</h3>
<div class="coderefdetail">
<p><code>oenology_setup()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/theme-setup.php</li></ul>

<p><code>oenology_setup()</code> is used to define and setup all of the custom Theme features, including
Theme support for optional WordPress features. This function is designed to be over-ridden
by a Child Theme, if necessary.</p>

<p><code>oenology_setup()</code> hooks into the <code>after_setup_theme</code> action hook.</p>

</div>

<h3 id="oenology_setup_widgets">oenology_setup_widgets()</h3>
<div class="coderefdetail">
<p><code>oenology_setup_widgets()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_setup_widgets()</code> is used to define all of the custom Theme Widgets. This function is
designed to be over-ridden by a Child Theme, if necessary.</p>

<p><code>oenology_setup_widgets()</code> hooks into the <code>after_theme_setup</code> action hook.</p>

</div>

<h3 id="oenology_show_current_cat_on_single">oenology_show_current_cat_on_single()</h3>
<div class="coderefdetail">
<p><code>oenology_show_current_cat_on_single()</code> is a custom Theme function.</p>
<ul><li>Defined in: functions/custom.php</li></ul>

<p><code>oenology_show_current_cat_on_single()</code> is used to add a "current-cat" CSS class, analogous to the
"current-page" CSS class, for use in styling the output of <code>wp_list_categories()</code>.</p>

<p><code>oenology_show_current_cat_on_single()</code> hooks into the <code>wp_list_categories</code> filter hook.</p>

</div>

<h3 id="oenology_widget_archives">oenology_widget_archives()</h3>
<div class="coderefdetail">
<p><code>oenology_widget_archives()</code> is a custom Theme Widget.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_widget_archives()</code> outputs the default "Archives" Widget, but adds a "show/hide" 
toggle to the Widget output.</p>

</div>

<h3 id="oenology_widget_categories">oenology_widget_categories()</h3>
<div class="coderefdetail">
<p><code>oenology_widget_categories()</code> is a custom Theme Widget.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_widget_categories()</code> outputs the default "Categories" Widget, but adds a "show/hide" 
toggle to the Widget output.</p>

</div>

<h3 id="oenology_widget_linkrollbycat">oenology_widget_linkrollbycat()</h3>
<div class="coderefdetail">
<p><code>oenology_widget_linkrollbycat()</code> is a custom Theme Widget.</p>
<ul><li>vDefined in: functions/widgets.php</li></ul>

<p><code>oenology_widget_linkrollbycat()</code> outputs the default "Linkroll" Widget, but adds a "show/hide" 
toggle to the Widget output.</p>

</div>

<h3 id="oenology_widget_recentposts">oenology_widget_recentposts()</h3>
<div class="coderefdetail">
<p><code>oenology_widget_recentposts()</code> is a custom Theme Widget.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_widget_recentposts()</code> outputs the default "Recent Posts" Widget, but adds a "show/hide" 
toggle to the Widget output.</p>

</div>

<h3 id="oenology_widget_tags">oenology_widget_tags()</h3>
<div class="coderefdetail">
<p><code>oenology_widget_tags()</code> is a custom Theme Widget.</p>
<ul><li>Defined in: functions/widgets.php</li></ul>

<p><code>oenology_widget_tags()</code> outputs the default "Tags" Widget, but adds a "show/hide" 
toggle to the Widget output.</p>

</div>

<!-- ====================================================================================================================================== -->
<hr />
<h2 id="section_other_custom_functions">Other Custom Functions</h2>

<h3 id="wp_paginate">wp_paginate()</h3>
<div class="coderefdetail">
<p><code>wp_paginate()</code> is a custom function for the WP-Paginate plugin</p>
<ul><li>Plugin reference: <a href="http://wordpress.org/extend/plugins/wp-paginate">WP-Paginate</a></li></ul>

<p><code>wp_paginate()</code> accepts one argument, that can be used to override default settings.
Refer to the plugin reference for more information.</p>

<p><code>wp_paginate()</code> is used to output page numbers, in place of Previous/Next Post links.</p>

<p><code>wp_paginate()</code> must be used within the Loop.</p>

<p>Used in the following template files:</p>
<ul><li>functions.php</li><li>loop-footer.php</li></ul>
</div>

</div> <!-- #oenologycoderef -->

<?php }
?>