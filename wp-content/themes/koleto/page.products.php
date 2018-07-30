<?php
/**
 * Template Name: Products
 *
 * @package Koleto
 */

 get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site--stripes right">
            <!-- Stripes for site BG -->
            <div class="stripes primary animated fadeInDown">
                <div class="stripes__row">a
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
                        <h2>Products</h2>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment basic">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/small-palm-n-turn-glass-base-2.jpg" alt="Palm N Turn" />
                            <h3>
                                Palm N Turn
                            </h3>
                        </div>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment basic">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/mini-grip-n-glide.jpg" alt="Grip N Glide" />
                            <h3>
                                Grip N Glide
                            </h3>
                        </div>
                    </section>
                    <section class="col-lg-4">
                        <div class="segment basic">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/small-palm-n-turn-glass-base-2.jpg" alt="Palm N Turn" />
                            <h3>
                                Palm N Turn
                            </h3>
                        </div>
                    </section>
                    <section class="col-sm-12">
                        <p>Koleto’s procurement and production operates with the mission to ensure uninterrupted supply of services and goods through reliable, safe, and efficient processes. We want to maintain a vision to leverage our talent and resources to provide sustainable competitive advantage through our innovative solutions and partnerships.</p>
                    </section>
                </div>
            </section>


            <!-- SIMPLE TEXT w/ IMG -->
            <section id="featured" class="hero centered container not-animated">
                <div class="segment basic padded">
                    <h1>
                        Featured Products
                    </h1>

                    <section class="products-slider slider">
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/small-palm-n-turn-glass-base-2.jpg" alt="" />
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/mini-grip-n-glide.jpg" alt="" />
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Products/small-palm-n-turn-glass-base-2.jpg" alt="" />
                        </div>
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

        
            <section id="contact" class="container container--stripes not-animated">
                <div class="stripes purple fade twist">
                    <div class="stripes__row">
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                        <div class="stripe"></div>
                    </div>
                </div>
                <div class="row">
                    <section class="col-md-6">
                        <div class="segment basic">
                            <h2>Let’s get started</h2>
                            <p>Don’t know where to get started? Get in contact with our elite team to see what we find best for your product and our premier solutions.</p>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="segment basic">
                            <script type="text/javascript" id="aoform-script-1317fbb9-aa39-44d8-b0ad-fef19611414b:d-0001">!function(o,t,e,a){o._aoForms=o._aoForms||[],o._aoForms.push(a);var n=function(){var o=t.createElement(e);o.src=("https:"==t.location.protocol?"https://":"http://")+"mktg.kushbottles.com/acton/content/form_embed.js",o.async=!0;for(var a=t.getElementsByTagName(e)[0],n=a.parentNode,c=document.getElementsByTagName("script"),r=!1,s=0;s<c.length;s++){if(c[s].getAttribute("src")==o.getAttribute("src"))r=!0;}r?typeof(_aoFormLoader)!="undefined"?_aoFormLoader.load({id:"1317fbb9-aa39-44d8-b0ad-fef19611414b:d-0001",accountId:"29794",domain:"mktg.kushbottles.com",isTemp:false,noStyle:false,prefill:false}):"":n.insertBefore(o,a)};window.attachEvent?window.attachEvent("onload",n):window.addEventListener("load",n,!1),n()}(window,document,"script",{id:"1317fbb9-aa39-44d8-b0ad-fef19611414b",accountId:"29794",domain:"mktg.kushbottles.com",isTemp:false,noStyle:false,prefill:false});</script>
                        </div>
                    </section>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();