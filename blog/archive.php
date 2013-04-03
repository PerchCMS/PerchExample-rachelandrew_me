<?php include('../perch/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'title'=>'Blog Archive - trying not to come last'
)); ?>
	
		<div class="primary-content">


		   
		    <?php 
		        // CHANGE MODE DEPENDING ON WHAT OPTIONS ARE PASSED IN ON THE QUERYSTRING
		        
		        // Default mode
		        $mode = 'date';
		        $date_from  = date('Y-01-01 00:00:00');
		        $date_to    = date('Y-12-31 23:59:59');
		        
		        
		        // Category?
		        if (perch_get('cat')) {
		            $mode = 'category';
		            $categorySlug = perch_get('cat');
		            $categoryTitle = perch_blog_category($categorySlug, true);
		            echo '<h1>Archive of: '.$categoryTitle.'</h1>';
		        }
		        
		        // Tag?
		        if (perch_get('tag')) {
		            $mode = 'tag';
		            $tagSlug = perch_get('tag');
		        }
		        
		        // Year?
		        if (perch_get('year')) {
		            $mode = 'date';
		            $year = intval(perch_get('year'));
		            $date_from  = $year.'-01-01 00:00:00';
		            $date_to    = $year.'-12-31 23:59:59';
		            
		            
		            // Month and Year?
		            if (perch_get('month')) {
		                $month = intval(perch_get('month'));
		                $date_from  = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
		                $date_to    = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
		            }
		        }
		        
		        
		        // NOW WE KNOW WHAT MODE, LET'S DO THE PERCH STUFF
		        
		        
		        switch($mode) 
		        {
		            case 'category':
		                $opts = array(
		                    'category'=>rtrim($categorySlug, '/')
		                    );
		                break;
		                
		            case 'tag':
		                $opts = array(
		                    'tag'=>rtrim($tagSlug, '/')
		                    );
		                break;
		                
		            case 'date':
		                $opts = array(
		                    'filter'=>'postDateTime',
		                    'match'=>'eqbetween',
		                    'value'=>$date_from.','.$date_to
		                    );
		                break;
		                
		            
		            
		        }
		        
		        // show 10 items per page
		        $opts['count'] = 10;
		        
		        // order by date, newest to oldest
		        $opts['sort'] = 'postDateTime';
		        $opts['sort-order'] = 'DESC';
		        
		        $opts['template'] = 'post_in_list.html';
		        
		        perch_blog_custom($opts);
		    ?>
	    </div>
		<div class="sidebar">
		    <h2>Filter archive</h2>
		   
		    <?php perch_blog_categories(); ?>

			<?php perch_layout('global.ads'); ?>
		</div>
		
<?php perch_layout('global.footer'); ?>