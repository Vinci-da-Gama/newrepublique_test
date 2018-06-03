<?php
/*
	Template Name: Home Page
 */

header('X-Frame-Options: GOFORIT');

// get date from wp default customer field.
// 11 is post page number, pre_launch_price is key in wp default customer field, true return SingleValue / false return array
$plp = get_post_meta( 11, 'pre_launch_price', true);
$lp = get_post_meta( 11, 'launch_price', true);
$fp = get_post_meta( 11, 'final_price', true);

$plpt = get_post_meta( 11, 'plp_title', true);
$lpt = get_post_meta( 11, 'lp_title', true);
$fpt = get_post_meta( 11, 'fp_title', true);

$techUrl = get_post_meta( 11, 'technology_url', true);
$btn_Text = get_post_meta( 11, 'btn_text', true);

$subscribeText = get_post_meta( 11, 'subscribe_text', true);
$subscribeBtnText = get_post_meta( 11, 'subscribe_button_text', true);

// Advanced Custom Fields
// Income Section
// $variableName = get_field('Field_Name');
$incomeImage 		 = get_field('income_feild_image');
$incomeTitle 		 = get_field('income_section_title');
$incomeDesc 		 = get_field('income_section_description');
$incomeResson1 		 = get_field('income_reason_1');
$incomeR1Description = get_field('income_reason1_description');
$incomeReason2 		 = get_field('income_reason_2');
$incomeR2Description = get_field('income_reason2_description');

// Advanced Custom Fields
// who course Section
$whoCourseImg = get_field('who_section_image');
$whoCourseTitle = get_field('who_section_title');
$whoCourseDesc = get_field('who_section_description');

// Advanced Custom Fields
// Course Feature Section
$courseFeatureImg = get_field('course_feature_image');
$courseFeatureTitle = get_field('course_feature_title');
$courseFeatureDesc = get_field('course_feature_description');

// Advanced Custom Fields
// Final Project Feature Section
$pjFeatureTitle = get_field('project_feature_title');
$pjFeatureDesc = get_field('project_feature_desc');

// Advanced Custom Fields
// Vedio Feature Section
$vedioBlock = get_field('vedio_block');

// Advanced Custom Fields
// Instructor Section
$instructorTitle = get_field('instructor_title');
$instructorName  = get_field('instructor_name');
$tLink 			 = get_field('tlink_name');
$fLink 			 = get_field('flink_name');
$gLink 			 = get_field('glink_name');
$bioExpert 		 = get_field('bio_expert');
$fullBio 		 = get_field('full_bio');
$textNum 		 = get_field('text_number');
$donotLie 		 = get_field('donot_lie');
$studentStr 	 = get_field('student_title');
$studentNum 	 = get_field('student_number');
$reviewStr 	 	 = get_field('review_title');
$reviewNum 	 	 = get_field('review_number');
$courseStr 	 	 = get_field('course_title');
$courseNum 	 	 = get_field('course_number');

// Advanced Custom Fields
// Tesmonial Section
$testimonialTitle = get_field('testimonial_title');

get_header(); ?>
	
    <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<img src="<?php bloginfo('template_directory') ?>/asserts/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1>

			            	<!-- settings -- General -- Site Title -->
			    			<?php bloginfo('name'); ?>
			    		</h1>
			            <p class="lead">
			            	<!-- settings -- General -- Tagline -->
			            	<?php bloginfo('description') ?>
			            </p>

			            <div id="price-timeline">
			            	<div class="price active">
			            		<h4><?php echo $plpt; ?><small>Ends soon!</small></h4>
			            		<span><?php echo $plp; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4><?php echo $lpt; ?><small>Coming soon!</small></h4>
			            		<span><?php echo $lp; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4><?php echo $fpt; ?><small>Coming soon!</small></h4>
			            		<span><?php echo $fp; ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->

			            <p>
			            	<a class="btn btn-lg btn-danger" href="<?php echo $techUrl; ?>" role="button">
			            		<?php echo $btn_Text; ?>
			            	</a>
			            </p>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	
	
	<!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead">
						<?php echo $subscribeText; ?>
					</p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						<?php echo $subscribeBtnText; ?>
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->
    
    
    <!-- BOOST YOUR INCOME
	================================================== -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
			<?php if (!empty($incomeImage)) { ?>
				<img src="<?php echo $incomeImage['url']; ?>" alt="<?php echo $incomeImage['alt']; ?>" />
			<?php }; ?>
			<?php if (!empty($incomeImage)) : ?>
				<img src="<?php echo $incomeImage['url']; ?>" alt="<?php echo $incomeImage['alt']; ?>" />
			<?php endif; ?>
				<!-- <img src="<?php bloginfo('template_directory') ?>/asserts/img/icon-boost.png" alt="Chart" /> -->
				<h2><?php echo $incomeTitle; ?></h2>
			</div><!-- section-header -->
			
			<p class="lead">
				<?php echo $incomeDesc; ?>
			</p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $incomeResson1; ?></h3>
					<p>
						<?php echo $incomeR1Description; ?>
					</p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3>Create a full-time income</h3>
					<p>WordPress developers have options. Many developers make a generous living off of creating custom WordPress themes and selling them on websites like ThemeForest. Freelance designers and developers can also take on WordPress projects and make an extra $1,000 - $5,000+ per month.</p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
	
	
	<!-- WHO BENEFITS
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
			<?php if (!empty($whoCourseImg)) : ?>
				<img src="<?php echo $whoCourseImg['url']; ?>" alt="<?php echo $whoCourseImg['alt']; ?>" />
			<?php endif; ?>
				<!-- <img src="<?php bloginfo('template_directory') ?>/asserts/img/icon-boost.png" alt="Pad and pencil"> -->
				<h2>
					<?php echo $whoCourseTitle; ?>
				</h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $whoCourseDesc; ?>

					<!-- <h3>Graphic &amp; Web Designers</h3>
					<p>Graphic designers are extremely talented, but ask them to code their designs and they'll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.</p>
					<p>If you&rsquo;re a designer, learning to code your own WordPress websites can change your business entirely! Now, not only are you a great designer, but you're a skillful developer, too! This puts you in a position to <strong>make an extra $1,000 - $5,000 per project.</strong></p>

					<h3>Entrepreneurs</h3>
					<p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the cut-throat world of the Startup company, it&rsquo;s a necessity to have a world-class website.  However, world-class websites come with a large price tag.</p>
					<p>If you can learn how to build a high-quality startup website by yourself, then you&rsquo;ve just saved yourself a lot of cash, <strong>tens of thousands of dollars in many cases.</strong></p>

					<h3>Employees</h3>
					<p>Any company knows the education &amp; training of their employees is key to a thriving team.</p>
					<p>Depending on the type of company you work for, if you understand how to code, and can develop CMS driven websites, that gives you <strong>negotiating power for a better position, or a higher salary.</strong></p>

					<h3>Code Hobbyists</h3>
					<p>It&rsquo;s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal of tools to play with &mdash; you can even <strong>sell WordPress themes and plugins for cash!</strong> The possibilities are truly endless.</p>

					<h3>People Looking for a New Career</h3>
					<p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work almost anywhere in the world? Becoming a Web Developer might be the answer for you.</p>
					<p><strong>Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</strong> They get to work at amazing companies that are changing the world, or they enjoy the ability to start their own companies, become location-independent and work from home, from coffee shops, in an airplane, on the beach, or wherever they want!</p> -->
					
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- who-benefits -->
    

	<!-- COURSE FEATURES
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">
			<?php if (!empty($courseFeatureImg)) : ?>
				<img src="<?php echo $courseFeatureImg['url']; ?>" alt="<?php echo $courseFeatureImg['alt']; ?>" />
			<?php endif; ?>
				<h2>
					<?php echo $courseFeatureTitle; ?>
				</h2>
			<?php if (!empty($courseFeatureDesc)) : ?>
				<p>
					<?php echo $courseFeatureDesc; ?>
				</p>
			<?php endif; ?>
			</div><!-- section-header -->
			
			<div class="row">
			<?php 
				$spritesArr = array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' );
				$cssSpritesloop = new WP_Query($spritesArr);
				// var_dump($spritesArr);
				// var_dump($cssSpritesloop);
			?>
			<?php while ($cssSpritesloop->have_posts()) : $cssSpritesloop->the_post(); /*var_dump($cssSpritesloop);*/ ?>
				
				<div class="col-sm-2">
					<!-- course_feature_icon = course_feature post type key ci ci-computer -->
					<i class="<?php the_field('course_feature_icon'); ?>"></i>
					<h4>
						<?php the_title(); ?>
					</h4>
				</div><!-- end col -->
			<?php endwhile; wp_reset_query(); ?>
			</div><!-- row -->
		</div><!-- container -->
		<!-- <p>
			This is pj template_directory: <?php echo get_template_directory(); ?>
		</p> -->
		<p>
			<p>
				when you need to modify default path of css or js imported, you should use followd path and modified it in wp-includes/theme.php
			</p>
			This is pj template_directory_url: <?php echo get_template_directory_uri(); ?>
		</p>
	</section><!-- course-features -->
	
	
	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
			<h2><?php echo $pjFeatureTitle; ?></h2>
			<p class="lead">
				<?php echo $pjFeatureDesc; ?>
			</p>
			
			<div class="row">
			<?php $pjFeatureAry = array(
				'post_type' => 'project_features', 
				'orderby' => 'post_id', 
				// 'order' => 'ASC'
				'order' => 'DESC' 
			); 
				$pjFeaturesLoop = new WP_Query($pjFeatureAry);
			?>
			<?php while ($pjFeaturesLoop->have_posts()) : $pjFeaturesLoop->the_post(); ?>
				<div class="col-sm-4">
					<?php 
						if (has_post_thumbnail()) {
							the_post_thumbnail();
						}
					?>
					<h3><?php echo the_title(); ?></h3>
					<p><?php echo the_content(); ?></p>
				</div><!-- col -->
			<?php endwhile; wp_reset_query(); ?>
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->
	
	
	<!-- VIDEO FEATURETTE
	================================================== -->
	<?php echo $vedioBlock; ?>
	
	
	<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructorTitle; ?> <small><?php echo $instructorName; ?></small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com/<?php echo $tLink; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://facebook.com/<?php echo $fLink; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.linkedin.com/<?php echo $gLink; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead">
						<?php echo $bioExpert; ?>
					<p>
					
					<?php echo $fullBio; ?>

					<!-- <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
					
					<p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
					
					<p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p> -->
					
					<hr>
					
					<h3><?php echo $textNum; ?> 
						<small><?php echo $donotLie; ?></small>
					</h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $studentNum; ?> <span><?php echo $studentStr; ?></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $reviewNum; ?> <span><?php echo $reviewStr; ?></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $courseNum; ?> <span><?php echo $courseStr; ?></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
	
	
	<!-- TESTIMONIALS
	================================================== -->
	<section id="kudos">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h2>
						<?php echo $testimonialTitle; ?>
					</h2>
				<?php 
					$testimonyAry = array(
						'post_type' => 'testimonial_section', 
						'orderby' => 'post_id', 
						'order' => 'ASC'
					);
					$testimonialLoop = new WP_Query($testimonyAry);
				?>
				<?php while ($testimonialLoop->have_posts()) : $testimonialLoop->the_post(); ?>
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
						<?php 
							if (has_post_thumbnail()) {
								$imgAryTesti = array( 200, 200 );
								the_post_thumbnail($imgAryTesti);
							}
						?>
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								<?php the_content();?>
								<cite>
									<?php the_title();?>
								</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
				<?php endwhile; wp_reset_query(); ?>
					
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->

<?php get_footer(); ?>
