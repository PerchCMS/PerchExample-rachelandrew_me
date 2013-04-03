<?php include('perch/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'title'=>'Trying not to come last, the personal fitness blog of Rachel Andrew'
)); ?>
	
		
		<div class="primary-content">		
	 		<h1><?php perch_content('Homepage heading');?></h1>

    		<?php perch_content('Homepage content');?>

    		<?php 
				$opts = array(
		                  'sort'=>'postDateTime',
		                  'sort-order'=>'DESC',
		                  'template'=>'blog/homepage_post.html',
		                  'count'=>1
		          );

				perch_blog_custom($opts); ?>
		</div>

		<div class="sidebar">
			<?php perch_layout('global.ads'); ?>
		</div>
	
	
<?php perch_layout('global.footer'); ?>