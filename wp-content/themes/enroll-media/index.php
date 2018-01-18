<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<main id="main" class="site-main" role="main" id="primary" class="content-area col-sm-12 col-md-12 col-lg-8 ">
		<section class="summary-statement bg-light main-1">
			<div class="container">
				<div class="row justify-content-center flex-column">
					<h2> We're higher education experts that make a difference.</h2>
					<p>
					We know that our success is dependent on the success of our clients. Our team will work with you to understand campaign objectives, establish target goals and analyze conversion performance constantly. SMS also allows fully customizable prospect targeting, ensuring that you will receive students who are most likely to succeed at your school.
					</p>
				</div>
			</div>
		</section><!--main-1 -->
		<section class="main-2 ">
			<div class="container">
				<h2>Testing</h2>
				<p>
					 Speed to lead is one of the most critical drivers of conversion. We have built our own custom dialing solution that allows us to get to prospects within minutes of them requesting information. This helps both contact and conversion rates and allows us to get to your leads before your competition.
				</p>
				<div class="row justify-content-center">
					<a class="basic-btn white" href="#">Testing</a>
				</div>
			</div>
		</section><!--main-2 -->
		<section class="main-3 services">
			<div class="container ">
				<h2 class="text-center">Here are some of the services we provide</h2>
				<div class="row ">
					<div class="col-md-4">
						<!-- <span class="fa fa-cogs icon"></span> -->
						<a href="#" class="circle-icon">
							<i class="fa fa-cogs icon"></i>
						</a>
						<h3>
							Easy customization to meet your key metrics
						</h3>
						<div class="linear-layer">
							<p >
								Our reps go through extensive training and are efficient in qualifying every lead. We will transfer these highly qualified contacts directly to your center. We will customize our script tailored to your business and include additional qualifying questions to increase conversions.
							</p>
						</div>
						<a class="more" href="#">Read More</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="circle-icon">
							<span class="fa fa-graduation-cap icon"></span>
						</a>
						<h3>
							Speed to succeed
						</h3>
						<div class="linear-layer">
							<p >
								Speed to lead is one of the most critical drivers of conversion. We have built our own custom dialing solution that allows us to get to prospects within minutes of them requesting information. This helps both contact and conversion rates and allows us to get to your leads before your competition.
							</p>
						</div>
						<a class="more" href="#">Read More</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="circle-icon">
							<span class="fa fa-trophy icon"></span>
						</a>
						<h3>
							Performance-Based Process Automation
						</h3>
						<div class="linear-layer">
							<p >
								Put the best prospects in the hands of your best converters by automating processes, including inquiry distribution and nurturing, based on custom metrics and predictive data. Boost efficiency and effectiveness by focusing on inquiries with the greatest likelihood to convert.
							</p>
						</div>
						<a class="more " href="#">Read More</a>
					</div>
				</div>
			</div>
		</section><!-- main-3-->
		<section  class="main-4">
			<div class="container">
				<!-- <h2 >Our professional call center will</h2> -->
				<p>
					Our reps go through extensive training and are efficient in qualifying every lead.
					We will transfer these highly qualified contacts directly to your center.
					<!-- We will customize our script tailored to your business and include additional qualifying questions to increase conversions. -->
				</p>
				<div class="row">
					<div class="col-md-3">
						<span class="fa fa-users icon"></span>
						<h4>lead generation</h4>
					</div>
					<div class="col-md-3">
						<span class="fa fa-bullseye icon"></span>
						<h4>targeted metrics</h4>
					</div>
					<div class="col-md-3">
						<span class="fa fa-list-alt icon"></span>
						<h4>compliance driven</h4>
					</div>
					<div class="col-md-3">
						<span class="fa fa-line-chart icon"></span>
						<h4>performance optimization</h4>
					</div>
				</div>
			</div>
		</section><!-- main-4-->
	</main><!-- #primary&main -->

<?php
//get_sidebar();
get_footer();
