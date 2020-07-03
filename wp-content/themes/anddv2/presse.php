<?php
	$id = 16;
	$billet = get_post($id);
	$title = $billet->post_title;
	$date = $billet->post_date;
	$contenu = $billet->post_content;
	$contenu = apply_filters('the_content', $contenu);
	$contenu = str_replace(']]>', ']]>', $contenu);
?>

<div id="billet">
	<?php echo "<p>$contenu</p>"; ?>
</div>

