<?php
/**
 * WP List Table Example admin page view
 *
 * @package   WPListTableExample
 * @author    Matt van Andel
 * @copyright 2016 Matthew van Andel
 * @license   GPL-2.0+
 */
// Display form to add data
?>

<h1 class="title">
    <?php echo esc_html(get_admin_page_title()); ?>
</h1>
<!-- Forms are NOT created automatically, so you need to wrap the table in one to use features like bulk actions -->
<!-- Forms are NOT created automatically, so you need to wrap the table in one to use features like bulk actions -->
<form id="movies-filter" method="get">
    <!-- For plugins, we also need to ensure that the form posts back to our current page -->
    <input type="hidden" name="page" value="<?php echo $_REQUEST["page"]; ?>" />
    <!-- Now we can render the completed list table -->
    <?php $guru->display(); ?>
</form>



<!-- epiz_33906872_websekolah -->
<!-- epiz_33906872 -->
<!-- 	sql303.epizy.com -->
<!-- %J6BjxJOrQ -->