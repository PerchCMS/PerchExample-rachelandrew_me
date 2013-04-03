<?php include('../perch/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'title'=>'Blog - trying not to come last'
)); ?>
	
		<div class="primary-content">
		    <h1>Blog</h1>
			
		    <?php 
		        perch_blog_recent_posts(10);
		    ?>
		    
		    
		</div>
		
		<div class="sidebar">
			<h2>Archive</h2>
		    
		    <?php perch_blog_categories(); ?>
		    <?php perch_layout('global.ads'); ?>
		</div>
		
<?php perch_layout('global.footer'); ?>