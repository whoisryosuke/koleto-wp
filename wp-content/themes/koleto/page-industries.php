<?php
/**
 * Template Name: Industries
 *
 * @package Koleto
 */

 get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site--stripes right">
            <!-- Stripes for site BG -->
            <div class="stripes primary animated fadeInDown">
                <div class="stripes__row">
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                </div>
                <div class="stripes__row">
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                    <div class="stripe"></div>
                </div>
            </div>

            <!-- SIMPLE TEXT -->
            <section id="team" class="hero centered container not-animated">
                <section class="segment basic padded">
                    <h1>
                        Effective Solutions for your Demanding Needs
                    </h1>
                    <p>
                        Our dedicated team of engineers, designers and developers are here to bring you effective solutions for your demanding needs.
                    </p>
                </section>
            </section>

            <!-- TWO COLUMN IMAGE GRID -->
            <section id="industries" style="position:relative;" class="image-grid container not-animated">

                <h1 class="centered">Industries</h1>
                <div class="row right">
                    <section class="col-lg-6 text">
                        <aside class="segment padded">
                            <h3>Cannabis + CBD</h3>
                            <p>
                                Broadly applicable products, capable of being transformed into a multitude of balms, food and more- we are prepared to handle any nuanced components of your project.
                            </p>
                        </aside>
                    </section>
                    <section class="col-lg-8 image right">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Photos/veterinary.jpg" alt="" />
                    </section>
                </div>
                <div class="row">
                    <section class="col-lg-8 image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Photos/bottles.jpg" alt="" />
                    </section>
                    <section class="col-lg-6 text right">
                        <aside class="segment padded">
                            <h3>Pharmaceuticals</h3>
                            <p>It can be challenging for companies to keep up with effective and appropriate paths for their products. The industry is pouring tens of billions of dollars into the research that our team understands to provide effective and appropriate packaging for your product.</p>
                        </aside>
                    </section>
                </div>
                <div class="row right">
                    <section class="col-lg-6 text">
                        <aside class="segment padded">
                            <h3>Veterinary</h3>
                            <p>By consistently delivering the highest standards of quality, professionalism and integrity, our goal is to become the partner of choice for veterinarians, producers and animal owners.</p>
                            <p>
                                Our products and services enable pets and people to enjoy their time together and will help keep livestock healthy to ensure a safe and wholesome experience.
                            </p>
                        </aside>
                    </section>
                    <section class="col-lg-8 image right">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Photos/veterinary.jpg" alt="" />
                    </section>
                </div>
            </section>



            <section id="safety" class="hero hero--stripes left primary-g not-animated">
                <div class="stripes primary">
                    <div class="stripes__row">
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                    </div>
                    <div class="stripes__row">
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                    </div>
                </div>
                <section class="container">
                    <div class="row">
                        <section class="offset-md-4 col-md-8 offset-lg-6 col-lg-6">
                            <aside class="segment">
                                <h3>Patient Safety is Our Focus</h3>
                                <p>While innovation is the forethought in the development of a unique product and technology the patient must also be accounted for. </p>

                                <p>While we take all measures to provide safe and effective products- at Koleto, our team is constantly working to push the capabilities of our production to remove any possible risks. We want to ensure that you feel confident in the release once your product reaches your audience.</p>
                            </aside>
                        </section>
                    </div>
                </section>
            </section>

        
            <?php get_template_part( 'contact' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/frontpage.js" type="text/javascript"></script>
<?php
get_footer();