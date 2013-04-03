<?php include('../perch/runtime.php'); ?>
<?php 
	$title = perch_blog_post_field(perch_get('s'), 'postTitle', true) .' - trying not to come last';
	
	perch_layout('global.header', array(
	'title'=>$title
)); ?>
		<div class="primary-content">
		   
		    
		    <div class="post">
		    	<?php perch_blog_post(perch_get('s')); ?>
		    	
		    	<div class="meta">
		            <div class="cats">
		                <?php perch_blog_post_categories(perch_get('s')); ?>
		            </div>
		            <div class="tags">
		                <?php perch_blog_post_tags(perch_get('s')); ?>
		            </div>
		        </div>
		    	
		    	<?php perch_blog_post_comments(perch_get('s'), array(
		    			'count'=>10
		    	)); ?>
		    	
		    	<?php perch_blog_post_comment_form(perch_get('s')); ?>
		        
		    </div>
		</div>
		
		<div class="sidebar">
		    <h2>Archive</h2>
		    
		    <?php perch_blog_categories(); ?>

			<?php perch_layout('global.ads'); ?>
		    
    	</div>
<?php perch_layout('global.footer'); ?>