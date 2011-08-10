	<?php foreach($_["breadcrumb"] as $crumb): ?>
		<div class="crumb svg" data-dir='<?php echo $crumb["dir"];?>' style='background-image:url("<?php echo image_path('core','breadcrumb.png');?>")'>
			<a href="<?php echo link_to("files", "index.php?dir=".$crumb["dir"]); ?>"><?php echo htmlspecialchars($crumb["name"]); ?></a>
		</div>
	<?php endforeach; ?>
