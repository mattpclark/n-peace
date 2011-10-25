<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>
<div id="page-wrapper">
<div id="page">
	<div id="left-hand-side">
		<div id="header">
		<div class="section clearfix">
		<?php if ($logo): ?>
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	    <?php endif; ?>
	    </div> <!-- /.section -->
	    <?php print $messages; ?>
		</div> <!-- /.header -->
		<div id="navigation">

	        <?php print theme('links__system_main_menu', array(
	          'links' => $main_menu,
	          'attributes' => array(
	            'id' => 'main-menu',
	            'class' => array('links', 'inline', 'clearfix'),
	          ),
	        )); ?>
			<?php if ($page['navigation'] || $main_menu): ?>
				<?php print render($page['navigation']); ?>
		    <?php endif; ?>
	      </div><!-- /#navigation -->
		<div id="content-area">
			<?php if ($node->type != 'page'): ?>
				<h1><?php print $title; ?></h1>
			<?php endif; ?>
			<?php if ($tabs = render($tabs)): ?>
		        <div class="tabs"><?php print $tabs; ?></div>
		      <?php endif; ?>
		<?php print render($page['content']); ?>
		</div> <!-- /.content-area -->
	</div> <!-- /.left-hand-side -->
	<div id="right-hand-side">
		<?php print render($page['sidebar_right']); ?>
	</div> <!-- /.right-hand-side -->
	<div class="clearfix"></div>
	<div id="footer"><?php print render($page['footer']); ?></div> <!-- /.footer -->
	<div class="clearfix"></div>
	<div id="supporters">
	<img name="supporters" src="/sites/all/themes/npeace/images/background/supporters.png" width="1024" height="136" border="0" id="supporters" usemap="#m_supporters" alt="" /><map name="m_supporters" id="m_supporters">
	<area shape="rect" coords="656,68,763,119" href="http://www.sfcg.org/" target="_blank" title="The Search for Common Ground" alt="The Search for Common Ground" />
	<area shape="rect" coords="462,77,626,119" href="http://www.huntalternatives.org/pages/20_about_inclusive_security.cfm" target="_blank" title="The Institute for Inclusive Security" alt="The Institute for Inclusive Security" />
	<area shape="rect" coords="315,77,428,136" href="http://www.ausaid.gov.au" target="_blank" title="Australian Aid" alt="Australian Aid" />
	<area shape="rect" coords="0,15,282,119" href="http://www.undp.org" target="_blank" title="United Nations Development Programme" alt="United Nations Development Programme" />
	</map>
	</div <!-- /.supporters -->
</div> <!-- /.page -->
</div> <!-- /.page-wrapper -->