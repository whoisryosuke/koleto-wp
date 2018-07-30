<?php
/**
 * Template Name: About
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

             <section class="container-fluid split-rows">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 text">
                            <h2>Innovative Packaging Solutions</h2>
                            <p>Koleto Packaging Solutions will be able to provide child-resistant packaging and state-of-the-art solutions for nearly any product or device.</p>
                        </aside>
                        <aside class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Isometric/LaptopSearch.png" alt="" />
                        </aside>
                    </div>
                    <div class="row">
                        <aside class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Isometric/LaptopSearch.png" alt="" />
                        </aside>
                        <aside class="col-md-6 text">
                            <h2>Comprehensive catalog</h2>
                            <p>Koleto Packaging Solutions will be able to provide child-resistant packaging and state-of-the-art solutions for nearly any product or device.</p>
                        </aside>
                    </div>
                    <div class="row">
                        <aside class="col-md-6 text">
                            <h2>Custom packaging solutions</h2>
                            <p>Koleto Packaging Solutions will be able to provide child-resistant packaging and state-of-the-art solutions for nearly any product or device.</p>
                        </aside>
                        <aside class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Isometric/LaptopSearch.png" alt="" />
                        </aside>
                    </div>
                </div>
                <div class="stripe">
                    <svg viewBox="0 0 1920 818" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs></defs>
                        <g id="Sketching" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Koleto---Round-1---Sample-1" transform="translate(0.000000, -2602.000000)" fill="#FFFFFF">
                                <polygon id="Path-2" points="0 2845.39117 1961.42187 2596.54688 1961.42187 3424 0 3221.55386"></polygon>
                            </g>
                        </g>
                    </svg>
                </div>
            </section>


            <!-- CTA - STRIPES (RIGHT) ++ BOX w/ -->
            <section class="hero hero--stripes right purple">
                <div class="stripes primary">
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
                <section class="container">
                    <div class="row">
                        <section class="col-md-6">
                            <aside class="segment padded">
                                <h3>Effective Packaging</h3>
                                <p>With tens of billions of dollars poured into pharmaceutical research, and new products coming to market every day, it can be challenging for companies to keep up with effective and appropriate packaging. </p>
                                <div class="list">
                                    <div class="item icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Icon/Pill/Colored.png" alt="Pill" class="icon" />
                                        <p>New products coming to market every day</p>
                                    </div>
                                    <div class="item icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Icon/Bottle/Colored.png" alt="Bottle" class="icon" />
                                        <p>Challenging for companies to keep up</p>
                                    </div>
                                    <div class="item icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Icon/Dropper/Colored.png" alt="Dropper" class="icon" />
                                        <p>Effective and appropriate packaging.</p>
                                    </div>
                                </div>
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