<?php
/**
 * Template Name: Leadership
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

           

            <!-- 3x3 GRID - Leadership -->
            <section id="leadership" class="container segment basic padded not-animated">
                <div class="row centered">
                    <section class="col-sm-12">
                        <h2>Leadership</h2>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Leadership/nick-kovacevich-ceo.jpg" alt="Nick Kovacevich in profile" />
                            <h3>
                                Nick Kovacevich
                                <span class="subtitle">Chief Executive Officer</span>
                            </h3>
                            <p>In his role as CEO for Kush Bottles, Nick directs all business relations and financial strategy for the company. Nick also oversees the organization’s senior management team. Nick has been integral in making critical strategic, growth, and financial decisions since the company’s inception.</p>
                        </div>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Leadership/jim_ir.jpg" alt="Rodrigo de Oliveira" />
                            <h3>
                                Jim McCormick
                                <span class="subtitle">Chief Financial Officer & Chief Operating Officer</span>                                
                            </h3>
                            <p>Jim McCormick has extensive CFO and general management experience and has demonstrated financial and strategic leadership in his previous roles in the cannabis and tobacco industries. Mr. McCormick spent the majority of his career at British American Tobacco.</p>
                        </div>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Leadership/edd_pratt_ir.jpg" alt="Edd Pratt in profile" />
                            <h3>
                                Edd Pratt
                                <span class="subtitle">Executive Vice President</span>
                            </h3>
                            <p>Edd brings more than 30 years of sales, business development, and operations experience with several engineering and high-tech professional services companies. He most recently served as Chief Operating Officer at Wizard International, a provider of innovative and affordable solutions to the custom framing industry.</p>
                        </div>
                    </section>
                    <section class="col-sm-12">
                        <p>Koleto’s procurement and production operates with the mission to ensure uninterrupted supply of services and goods through reliable, safe, and efficient processes. We want to maintain a vision to leverage our talent and resources to provide sustainable competitive advantage through our innovative solutions and partnerships.</p>
                    </section>
                </div>
            </section>


            <section id="solutions" class="hero hero--stripes left primary-g not-animated">
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
                        <section class="offset-sm-4 col-sm-8 offset-lg-6 col-lg-6">
                            <aside class="segment">
                                <h3>Prepared for the industry ahead</h3>
                                <p>The markets change and fluctuate but the needs of your consumer and product are unique and need to be addressed. Koleto Packaging Solutions will be the innovator in CBD, Cannabis and Modern Medicine Packaging.</p>
                            </aside>
                        </section>
                    </div>
                </section>
            </section>

        
            <?php get_template_part( 'contact' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();