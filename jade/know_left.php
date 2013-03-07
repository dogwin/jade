<?php
/**
 * @author dogwin
 * @date 2013-03-07
 */

// use wp_list_pages to display parent and all child pages all generations (a tree with parent)
$parent = 57;
$args=array(
		'child_of' => $parent
);
$pages = get_pages($args);
if ($pages) {
	$pageids = array();
	foreach ($pages as $page) {
		$pageids[]= $page->ID;
	}

	$args=array(
			'title_li' => 'Tree of Parent Page ' . $parent,
			'include' =>  $parent . ',' . implode(",", $pageids)
	);
	wp_list_pages($args);
}

?>
<p>了解玉佛寺</p>
<ul class="know_nav">
	<li><a href="#">简介</a></li>
	<li><a href="#">历史</a></li>
	<li><a href="#">住持</a></li>
</ul>
<?php 
/*End the file know_left.php*/
/*Location /themes/jade/know_left.php*/