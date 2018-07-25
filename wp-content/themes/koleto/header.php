<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Koleto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'koleto' ); ?></a>

	<header id="SiteHeader" class="header">
		<div id="logo" class="logo">
			<?php
			// the_custom_logo();
				?>
			<? /* <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> */ ?>
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/Logo/koleto-logo.svg" alt="" /> -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg width="177px" height="70px" viewBox="0 0 747 296" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
						<linearGradient x1="78.0244173%" y1="15.9913596%" x2="44.1796696%" y2="80.6833802%" id="linearGradient-1">
							<stop stop-color="#EF486C" offset="0%"></stop>
							<stop stop-color="#6C4099" offset="100%"></stop>
						</linearGradient>
						<linearGradient x1="57.3424961%" y1="24.5934416%" x2="39.0860002%" y2="60.0075524%" id="linearGradient-2">
							<stop stop-color="#EF486C" offset="0%"></stop>
							<stop stop-color="#6C4099" offset="100%"></stop>
						</linearGradient>
					</defs>
					<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="koleto-logo" fill-rule="nonzero">
							<path d="M150.55,0.94 C145.347372,0.939999324 140.357975,3.00741962 136.680099,6.6871711 C133.002223,10.3669226 130.937347,15.3573722 130.94,20.56 L130.94,106.1 L25.38,106.1 C32.4698504,108.148322 39.449151,110.561537 46.29,113.33 C62.95,120.07 98.61,132.43 122.05,153.01 L122.84,153.71 L154.74,153.71 L178.55,106 L178.55,1 L150.55,0.94 Z" id="Shape" fill="url(#linearGradient-1)"></path>
							<path d="M111.61,153.77 L110.96,153.24 C91.7017129,136.542967 69.808134,123.154734 46.17,113.62 C39.019427,110.715756 31.7151545,108.205329 24.29,106.1 L24.18,106.1 L0.38,153.71 C4.25,153.71 14.85,155.27 30.02,160.93 C46.2844836,167.034318 61.5926956,175.43262 75.48,185.87 C92.09,198.44 105.2,213.19 114.48,229.72 C122.823982,244.729432 128.093257,261.25116 129.98,278.32 C131.103015,288.165138 139.431021,295.602702 149.34,295.61 L178.57,295.61 C178.57,263.16 170.98,233.16 156.02,206.45 C144.59675,186.298274 129.539397,168.43695 111.61,153.77 Z" id="Shape" fill="url(#linearGradient-2)"></path>
							<path d="M260.61,114.42 L264.07,114.42 C267.276667,114.42 269.586667,113.42 271,111.42 L292,80.91 C293.024146,79.4639512 294.401109,78.3038599 296,77.54 C297.707597,76.8795379 299.529901,76.5667544 301.36,76.62 L320.2,76.62 L292.51,114.37 C290.848872,116.703912 288.681491,118.631992 286.17,120.01 C287.769382,120.597641 289.262289,121.442045 290.59,122.51 C292.027287,123.706744 293.280705,125.108416 294.31,126.67 L322.53,170 L303.17,170 C302.10732,170.018837 301.045408,169.93174 300,169.74 C299.204862,169.602356 298.435781,169.342622 297.72,168.97 C297.103831,168.648233 296.543356,168.229565 296.06,167.73 C295.564361,167.201124 295.112853,166.632559 294.71,166.03 L273.56,133.53 C272.87155,132.405138 271.851428,131.521265 270.64,131 C269.112487,130.448472 267.492817,130.197203 265.87,130.26 L260.61,130.26 L260.61,170 L239,170 L239,76.61 L260.66,76.61 L260.61,114.42 Z" id="Shape" fill="#6C4099"></path>
							<path d="M419.63,123.27 C419.683571,129.715521 418.498781,136.111353 416.14,142.11 C411.641377,153.660011 402.53026,162.810993 391,167.36 C378.21653,172.239832 364.08347,172.239832 351.3,167.36 C339.74177,162.822423 330.598417,153.671822 326.07,142.11 C321.416307,129.97762 321.416307,116.55238 326.07,104.42 C328.314958,98.7559253 331.69414,93.610585 336,89.3 C340.379667,84.9356798 345.602534,81.509343 351.35,79.23 C357.669973,76.734539 364.415729,75.4947602 371.21,75.58 C377.985132,75.496694 384.710158,76.7506275 391,79.27 C396.725444,81.5668715 401.926591,84.999152 406.29,89.36 C410.556152,93.6886362 413.903191,98.8350492 416.13,104.49 C418.488477,110.468123 419.676671,116.843633 419.63,123.27 Z M397.45,123.27 C397.505948,119.045507 396.902009,114.838178 395.66,110.8 C394.598861,107.350648 392.842811,104.155046 390.5,101.41 C388.242543,98.8369996 385.423075,96.8182052 382.26,95.51 C378.73344,94.1113436 374.962978,93.4313684 371.17,93.51 C367.347751,93.4308855 363.547768,94.1106678 359.99,95.51 C356.816644,96.815154 353.986751,98.8340621 351.72,101.41 C349.377189,104.155046 347.621139,107.350648 346.56,110.8 C344.173319,118.962446 344.173319,127.637554 346.56,135.8 C347.625811,139.247372 349.381365,142.442072 351.72,145.19 C353.982996,147.760382 356.81481,149.766964 359.99,151.05 C363.549135,152.444498 367.348145,153.124106 371.17,153.05 C374.962575,153.123549 378.732043,152.443753 382.26,151.05 C385.42438,149.762906 388.245551,147.756588 390.5,145.19 C392.838635,142.442072 394.594189,139.247372 395.66,135.8 C396.904035,131.741699 397.507949,127.514299 397.45,123.27 Z" id="Shape" fill="#6C4099"></path>
							<polygon id="Shape" fill="#6C4099" points="488.66 152.69 488.66 170 432.38 170 432.38 76.61 454.05 76.61 454.05 152.69"></polygon>
							<polygon id="Shape" fill="#6C4099" points="521.48 93.27 521.48 115.06 550.83 115.06 550.83 131.06 521.48 131.06 521.48 153.3 559.8 153.3 559.8 170 499.68 170 499.68 76.61 559.8 76.61 559.8 93.27"></polygon>
							<polygon id="Shape" fill="#6C4099" points="645.37 93.78 619.09 93.78 619.09 170 597.43 170 597.43 93.78 571.15 93.78 571.15 76.61 645.37 76.61"></polygon>
							<path d="M745.8,123.27 C745.85856,129.715957 744.673595,136.112733 742.31,142.11 C740.076255,147.770237 736.730315,152.925161 732.47,157.27 C728.119082,161.646138 722.91459,165.080626 717.18,167.36 C704.39653,172.239832 690.26347,172.239832 677.48,167.36 C665.921471,162.826353 656.779902,153.67391 652.26,142.11 C647.606307,129.97762 647.606307,116.55238 652.26,104.42 C654.490204,98.7626159 657.848339,93.6182391 662.13,89.3 C666.511435,84.937857 671.733827,81.5118317 677.48,79.23 C683.803236,76.7337542 690.552415,75.4939704 697.35,75.58 C704.138608,75.4908917 710.877841,76.7449397 717.18,79.27 C722.906735,81.5644068 728.10835,84.9969964 732.47,89.36 C736.736152,93.6886362 740.083191,98.8350492 742.31,104.49 C744.66939,110.467553 745.854343,116.843889 745.8,123.27 Z M723.63,123.27 C723.687824,119.044648 723.080395,114.836515 721.83,110.8 C720.776799,107.347293 719.019899,104.150144 716.67,101.41 C714.414435,98.8393091 711.598774,96.8207916 708.44,95.51 C704.913218,94.1121222 701.142914,93.4321756 697.35,93.51 C693.524419,93.4298244 689.72096,94.1096207 686.16,95.51 C682.986644,96.815154 680.156751,98.8340621 677.89,101.41 C675.546769,104.153163 673.793679,107.349575 672.74,110.8 C670.339843,118.960511 670.339843,127.639489 672.74,135.8 C673.798412,139.248428 675.550998,142.443919 677.89,145.19 C680.152996,147.760382 682.98481,149.766964 686.16,151.05 C689.722327,152.44554 693.524813,153.125162 697.35,153.05 C701.142511,153.122753 704.911824,152.442985 708.44,151.05 C711.600777,149.761557 714.418401,147.755327 716.67,145.19 C719.015863,142.447063 720.772278,139.250797 721.83,135.8 C723.082404,131.743353 723.689807,127.515153 723.63,123.27 Z" id="Shape" fill="#6C4099"></path>
							<path d="M248.23,186.67 C250.008643,186.636005 251.782152,186.872024 253.49,187.37 C254.848546,187.773199 256.108505,188.454257 257.19,189.37 C258.152833,190.221436 258.902863,191.286547 259.38,192.48 C259.875014,193.778985 260.119326,195.160026 260.1,196.55 C260.11676,197.945353 259.851453,199.32971 259.32,200.62 C258.808487,201.834921 258.029082,202.918567 257.04,203.79 C255.958016,204.728936 254.695501,205.436761 253.33,205.87 C251.682234,206.396269 249.959513,206.64961 248.23,206.62 L243.12,206.62 L243.12,218.53 L238.83,218.53 L238.83,186.67 L248.23,186.67 Z M248.23,203.18 C249.332316,203.199166 250.430287,203.037004 251.48,202.7 C252.357904,202.409176 253.167601,201.94309 253.86,201.33 C254.499724,200.749866 254.999003,200.031725 255.32,199.23 C255.655833,198.37348 255.822243,197.459924 255.81,196.54 C255.907326,194.755117 255.220711,193.016667 253.93,191.78 C252.683333,190.64 250.783333,190.07 248.23,190.07 L243.12,190.07 L243.12,203.18 L248.23,203.18 Z" id="Shape" fill="#6C4099"></path>
							<path d="M288.3,218.52 L285,218.52 C284.665054,218.539603 284.334438,218.436508 284.07,218.23 C283.828213,218.039088 283.641791,217.787073 283.53,217.5 L280.53,209.81 L266.23,209.81 L263.23,217.5 C263.131642,217.780697 262.9546,218.027167 262.72,218.21 C262.457934,218.422847 262.12736,218.533038 261.79,218.52 L258.46,218.52 L271.19,186.67 L275.55,186.67 L288.3,218.52 Z M279.3,206.7 L274.3,193.7 C274.16,193.31 274,192.86 273.84,192.35 C273.68,191.84 273.52,191.3 273.37,190.72 C273.10499,191.741492 272.770887,192.7438 272.37,193.72 L267.37,206.66 L279.3,206.7 Z" id="Shape" fill="#6C4099"></path>
							<path d="M314,211.94 C314.241679,211.942701 314.470781,212.048161 314.63,212.23 L316.34,214.08 C315.033864,215.589871 313.412427,216.794855 311.59,217.61 C309.458743,218.506267 307.161287,218.93917 304.85,218.88 C302.714318,218.907686 300.595121,218.502896 298.62,217.69 C296.806197,216.931219 295.176214,215.792276 293.84,214.35 C292.483472,212.860807 291.442554,211.112337 290.78,209.21 C290.031649,207.091146 289.66267,204.856959 289.69,202.61 C289.666615,200.356682 290.049396,198.117583 290.82,196 C291.526763,194.086561 292.611668,192.335069 294.01,190.85 C295.417827,189.393153 297.118562,188.251377 299,187.5 C301.014456,186.690067 303.168956,186.285673 305.34,186.31 C307.392425,186.2727 309.431838,186.643194 311.34,187.4 C313.036087,188.113748 314.588059,189.130323 315.92,190.4 L314.5,192.4 C314.412647,192.545378 314.29286,192.668587 314.15,192.76 C313.98224,192.864199 313.787383,192.916393 313.59,192.91 C313.218253,192.873807 312.867837,192.719624 312.59,192.47 C312.105412,192.109191 311.601315,191.775352 311.08,191.47 C307.884144,189.819035 304.133498,189.618758 300.78,190.92 C299.4394,191.479261 298.237821,192.325828 297.26,193.4 C296.231201,194.56442 295.448816,195.925089 294.96,197.4 C294.388489,199.097137 294.111166,200.87945 294.14,202.67 C294.109919,204.476138 294.397633,206.2735 294.99,207.98 C295.501463,209.4353 296.296847,210.774536 297.33,211.92 C298.296842,212.988289 299.488875,213.828518 300.82,214.38 C302.196108,214.946842 303.671771,215.232454 305.16,215.22 C306.019374,215.227579 306.878202,215.174111 307.73,215.06 C308.44895,214.95765 309.155822,214.783444 309.84,214.54 C310.472063,214.30894 311.075914,214.007014 311.64,213.64 C312.228384,213.249681 312.783597,212.811532 313.3,212.33 C313.478451,212.119576 313.72716,211.981009 314,211.94 Z" id="Shape" fill="#6C4099"></path>
							<path d="M325.67,200.63 L327.29,200.63 C327.752534,200.64662 328.214022,200.575361 328.65,200.42 C329.015371,200.256941 329.334825,200.006186 329.58,199.69 L340.18,187.69 C340.425433,187.352539 340.74764,187.078321 341.12,186.89 C341.499248,186.730294 341.908762,186.655217 342.32,186.67 L346,186.67 L333.87,200.38 C333.608788,200.697173 333.321086,200.991567 333.01,201.26 C332.742008,201.486526 332.446304,201.678062 332.13,201.83 C332.526504,201.958011 332.896012,202.15802 333.22,202.42 C333.597317,202.706239 333.933761,203.042683 334.22,203.42 L346.89,218.51 L343.15,218.51 C342.910329,218.527766 342.669671,218.527766 342.43,218.51 C342.248739,218.475971 342.073509,218.415314 341.91,218.33 C341.766398,218.253114 341.634973,218.155387 341.52,218.04 C341.400801,217.920809 341.293618,217.79018 341.2,217.65 L330.2,205 C329.932597,204.662525 329.590202,204.392033 329.2,204.21 C328.700029,204.032118 328.170034,203.953978 327.64,203.98 L325.69,203.98 L325.69,218.56 L321.4,218.56 L321.4,186.67 L325.69,186.67 L325.67,200.63 Z" id="Shape" fill="#6C4099"></path>
							<path d="M379.39,218.52 L376.06,218.52 C375.724826,218.541485 375.393556,218.438186 375.13,218.23 C374.888213,218.039088 374.701791,217.787073 374.59,217.5 L371.59,209.81 L357.32,209.81 L354.32,217.5 C354.217818,217.778689 354.041476,218.024185 353.81,218.21 C353.547934,218.422847 353.21736,218.533038 352.88,218.52 L349.54,218.52 L362.28,186.67 L366.64,186.67 L379.39,218.52 Z M370.39,206.7 L365.39,193.7 C365.24,193.31 365.09,192.86 364.93,192.35 C364.77,191.84 364.61,191.3 364.46,190.72 C364.19499,191.741492 363.860887,192.7438 363.46,193.72 L358.46,206.66 L370.39,206.7 Z" id="Shape" fill="#6C4099"></path>
							<path d="M407.78,203.21 L407.78,215.43 C406.22241,216.566866 404.489602,217.441714 402.65,218.02 C400.706061,218.613221 398.682306,218.903293 396.65,218.88 C394.28316,218.913621 391.930435,218.5102 389.71,217.69 C387.738487,216.952725 385.940816,215.815562 384.43,214.35 C382.954433,212.895399 381.805612,211.143191 381.06,209.21 C380.260205,207.10266 379.863325,204.86385 379.89,202.61 C379.861421,200.342372 380.247776,198.088634 381.03,195.96 C381.743861,194.033899 382.85453,192.279316 384.29,190.81 C385.744365,189.351013 387.493302,188.219147 389.42,187.49 C391.580768,186.681256 393.873021,186.281129 396.18,186.31 C397.355716,186.306483 398.529711,186.400135 399.69,186.59 C400.713011,186.76137 401.717495,187.029233 402.69,187.39 C403.583868,187.726172 404.441543,188.15166 405.25,188.66 C406.033908,189.150473 406.770423,189.712902 407.45,190.34 L406.23,192.34 C406.060052,192.617082 405.792469,192.820446 405.48,192.91 C405.131983,192.978247 404.771166,192.902475 404.48,192.7 C404.12,192.49 403.72,192.24 403.26,191.94 C402.725565,191.608741 402.163468,191.324347 401.58,191.09 C400.824076,190.782669 400.040515,190.54827 399.24,190.39 C398.193561,190.178931 397.127357,190.081698 396.06,190.1 C394.394877,190.073737 392.740631,190.372657 391.19,190.98 C389.781371,191.529041 388.513655,192.386715 387.48,193.49 C386.425834,194.627196 385.621865,195.972822 385.12,197.44 C384.007045,200.878859 384.007045,204.581141 385.12,208.02 C385.647894,209.510023 386.48254,210.872711 387.57,212.02 C388.650802,213.13484 389.965829,213.995585 391.42,214.54 C393.049,215.139531 394.77435,215.434433 396.51,215.41 C397.843541,215.428344 399.173091,215.260046 400.46,214.91 C401.628061,214.563553 402.757348,214.097763 403.83,213.52 L403.83,206.52 L398.83,206.52 C398.580053,206.524593 398.33745,206.4354 398.15,206.27 C397.984437,206.115135 397.893383,205.896606 397.9,205.67 L397.9,203.23 L407.78,203.21 Z" id="Shape" fill="#6C4099"></path>
							<polygon id="Shape" fill="#6C4099" points="418.69 218.52 414.38 218.52 414.38 186.67 418.69 186.67"></polygon>
							<path d="M451.74,186.67 L451.74,218.52 L449.59,218.52 C449.293072,218.529541 448.998178,218.467819 448.73,218.34 C448.46378,218.189878 448.232101,217.985456 448.05,217.74 L429.63,193.74 C429.63,194.11 429.68,194.47 429.69,194.83 C429.7,195.19 429.69,195.52 429.69,195.83 L429.69,218.52 L425.91,218.52 L425.91,186.67 L428.13,186.67 C428.29313,186.658487 428.45687,186.658487 428.62,186.67 C428.741615,186.68851 428.859661,186.72561 428.97,186.78 C429.085737,186.843188 429.193218,186.92044 429.29,187.01 C429.409415,187.121017 429.519767,187.2414 429.62,187.37 L448.05,211.37 C448.05,210.98 447.99,210.61 447.97,210.24 C447.95,209.87 447.97,209.54 447.97,209.24 L447.97,186.67 L451.74,186.67 Z" id="Shape" fill="#6C4099"></path>
							<path d="M485.75,203.21 L485.75,215.43 C484.194811,216.564836 482.465634,217.439557 480.63,218.02 C478.685681,218.611515 476.662191,218.901549 474.63,218.88 C472.263232,218.912706 469.910673,218.509314 467.69,217.69 C465.720231,216.955161 463.925356,215.817612 462.42,214.35 C460.937885,212.900775 459.788071,211.147052 459.05,209.21 C458.242379,207.104543 457.841952,204.864864 457.87,202.61 C457.84309,200.356402 458.225978,198.116676 459,196 C459.717581,194.075742 460.827787,192.321889 462.26,190.85 C463.718243,189.391023 465.470425,188.259264 467.4,187.53 C469.557074,186.720446 471.846207,186.320272 474.15,186.35 C475.325716,186.346483 476.499711,186.440135 477.66,186.63 C478.683139,186.80078 479.687678,187.068657 480.66,187.43 C481.550668,187.766224 482.405021,188.191725 483.21,188.7 C483.995652,189.187951 484.732397,189.750557 485.41,190.38 L484.19,192.38 C484.026258,192.658486 483.761056,192.862764 483.45,192.95 C483.102002,193.015947 482.742073,192.940362 482.45,192.74 C482.1,192.53 481.69,192.28 481.23,191.98 C480.695565,191.648741 480.133468,191.364347 479.55,191.13 C478.79706,190.823955 478.016941,190.589584 477.22,190.43 C476.170177,190.218986 475.100665,190.121758 474.03,190.14 C472.364961,190.114761 470.710911,190.413645 469.16,191.02 C467.752786,191.571734 466.485628,192.42903 465.45,193.53 C464.399365,194.669838 463.595865,196.014679 463.09,197.48 C461.970193,200.917775 461.970193,204.622225 463.09,208.06 C463.614397,209.549419 464.445661,210.912146 465.53,212.06 C466.61454,213.17504 467.932853,214.0357 469.39,214.58 C471.018763,215.180416 472.744279,215.475347 474.48,215.45 C475.810212,215.467673 477.136368,215.299379 478.42,214.95 C479.588061,214.603553 480.717348,214.137763 481.79,213.56 L481.79,206.56 L476.79,206.56 C476.542452,206.568191 476.301675,206.478349 476.12,206.31 C475.947324,206.159415 475.851797,205.938966 475.86,205.71 L475.86,203.27 L485.75,203.21 Z" id="Shape" fill="#6C4099"></path>
							<path d="M520,191.65 C519.887952,191.844204 519.738382,192.01417 519.56,192.15 C519.395279,192.261915 519.198983,192.317999 519,192.31 C518.671715,192.283704 518.360173,192.154187 518.11,191.94 C517.77,191.69 517.34,191.41 516.83,191.1 C516.24184,190.763735 515.622229,190.485748 514.98,190.27 C514.137016,189.999803 513.255032,189.871391 512.37,189.89 C511.507294,189.874292 510.648253,190.006192 509.83,190.28 C509.148792,190.506375 508.519775,190.866785 507.98,191.34 C507.491198,191.766524 507.107845,192.300481 506.86,192.9 C506.597519,193.533553 506.468172,194.214328 506.48,194.9 C506.448657,195.689496 506.680848,196.466986 507.14,197.11 C507.603266,197.727494 508.193093,198.238905 508.87,198.61 C509.648831,199.050355 510.469539,199.412137 511.32,199.69 L514.12,200.63 C515.12,200.96 516.01,201.33 516.92,201.73 C517.804111,202.125765 518.62603,202.647885 519.36,203.28 C520.092252,203.91467 520.684756,204.69446 521.1,205.57 C521.561886,206.617764 521.783957,207.75545 521.75,208.9 C521.756926,210.242507 521.516235,211.574782 521.04,212.83 C520.588981,214.017607 519.89404,215.097491 519,216 C518.040161,216.930882 516.900157,217.655721 515.65,218.13 C514.202056,218.670966 512.665489,218.93554 511.12,218.91 C509.181386,218.934875 507.259398,218.549796 505.48,217.78 C503.846058,217.082488 502.369865,216.062078 501.14,214.78 L502.39,212.78 C502.504751,212.613449 502.650795,212.470801 502.82,212.36 C502.989495,212.250357 503.188206,212.194579 503.39,212.2 C503.623626,212.215769 503.848449,212.295323 504.04,212.43 C504.29,212.59 504.56,212.78 504.88,213.02 C505.2,213.26 505.54,213.52 505.94,213.8 C507.509728,214.861159 509.36534,215.419238 511.26,215.4 C512.18715,215.414604 513.110114,215.272609 513.99,214.98 C514.729177,214.720298 515.409114,214.315736 515.99,213.79 C516.546087,213.277649 516.983021,212.649556 517.27,211.95 C517.580238,211.195508 517.733357,210.385676 517.72,209.57 C517.756453,208.733177 517.525267,207.906512 517.06,207.21 C516.603375,206.576934 516.017003,206.048518 515.34,205.66 C514.563816,205.222212 513.742319,204.870142 512.89,204.61 L510.09,203.72 C509.09,203.41 508.21,203.06 507.29,202.66 C506.399596,202.276034 505.575964,201.752826 504.85,201.11 C504.117093,200.439012 503.528472,199.62583 503.12,198.72 C502.252358,196.529453 502.252358,194.090547 503.12,191.9 C503.563735,190.84625 504.216949,189.893647 505.04,189.1 C505.93043,188.251435 506.98083,187.588561 508.13,187.15 C509.472946,186.635825 510.902212,186.3846 512.34,186.41 C513.995651,186.386867 515.640893,186.675208 517.19,187.26 C518.626594,187.807612 519.939042,188.637243 521.05,189.7 L520,191.65 Z" id="Shape" fill="#6C4099"></path>
							<path d="M557.28,202.61 C557.305253,204.848054 556.91883,207.07168 556.14,209.17 C555.437989,211.085756 554.352523,212.838154 552.95,214.32 C551.537126,215.775456 549.83346,216.916912 547.95,217.67 C543.821486,219.243353 539.258514,219.243353 535.13,217.67 C533.263297,216.912883 531.57677,215.771496 530.18,214.32 C528.772076,212.838588 527.679966,211.08645 526.97,209.17 C525.463927,204.907389 525.474523,200.255706 527,196 C527.712252,194.081703 528.804011,192.326727 530.21,190.84 C531.605813,189.382438 533.292221,188.234317 535.16,187.47 C539.283567,185.869996 543.856433,185.869996 547.98,187.47 C549.864538,188.230297 551.568082,189.378486 552.98,190.84 C554.379907,192.327676 555.464932,194.082763 556.17,196 C556.944451,198.116031 557.320783,200.357069 557.28,202.61 Z M552.86,202.61 C552.885229,200.821274 552.614926,199.040657 552.06,197.34 C551.580641,195.882299 550.808137,194.538074 549.79,193.39 C548.799125,192.312765 547.583859,191.466176 546.23,190.91 C543.233083,189.760663 539.916917,189.760663 536.92,190.91 C535.564105,191.467755 534.345895,192.314018 533.35,193.39 C532.328741,194.537519 531.552856,195.881706 531.07,197.34 C530.003191,200.76553 530.003191,204.43447 531.07,207.86 C531.555113,209.314286 532.330823,210.654766 533.35,211.8 C534.344281,212.872942 535.563333,213.712961 536.92,214.26 C539.916917,215.409337 543.233083,215.409337 546.23,214.26 C547.584982,213.715208 548.801235,212.874764 549.79,211.8 C550.805824,210.654049 551.578124,209.313581 552.06,207.86 C552.614178,206.166048 552.88449,204.39213 552.86,202.61 Z" id="Shape" fill="#6C4099"></path>
							<polygon id="Shape" fill="#6C4099" points="581.51 214.9 581.51 218.52 563.44 218.52 563.44 186.67 567.73 186.67 567.73 214.9"></polygon>
							<path d="M597.4,215.1 C598.610345,215.12326 599.81235,214.895118 600.93,214.43 C601.937477,214.009597 602.839139,213.37092 603.57,212.56 C604.305794,211.728345 604.863877,210.755102 605.21,209.7 C605.601114,208.516477 605.793714,207.276398 605.78,206.03 L605.78,186.67 L610.07,186.67 L610.07,206 C610.088282,207.742549 609.790115,209.473946 609.19,211.11 C608.640828,212.627182 607.786593,214.015741 606.68,215.19 C605.55363,216.363958 604.190012,217.2844 602.68,217.89 C599.274325,219.196439 595.505675,219.196439 592.1,217.89 C590.590563,217.283316 589.227161,216.363019 588.1,215.19 C586.987128,214.016863 586.126128,212.628373 585.57,211.11 C584.977946,209.472084 584.683316,207.741557 584.7,206 L584.7,186.67 L589,186.67 L589,206 C588.988106,207.242214 589.177214,208.478174 589.56,209.66 C589.90708,210.719822 590.468751,211.69679 591.21,212.53 C591.943108,213.340863 592.843971,213.982388 593.85,214.41 C594.973807,214.879983 596.181966,215.114808 597.4,215.1 Z" id="Shape" fill="#6C4099"></path>
							<polygon id="Shape" fill="#6C4099" points="640.23 190.29 629.92 190.29 629.92 218.52 625.63 218.52 625.63 190.29 615.29 190.29 615.29 186.67 640.23 186.67"></polygon>
							<polygon id="Shape" fill="#6C4099" points="650.15 218.52 645.83 218.52 645.83 186.67 650.15 186.67"></polygon>
							<path d="M687.71,202.61 C687.733511,204.847039 687.350634,207.069757 686.58,209.17 C685.869771,211.084029 684.781484,212.835489 683.38,214.32 C681.967126,215.775456 680.26346,216.916912 678.38,217.67 C674.251486,219.243353 669.688514,219.243353 665.56,217.67 C663.67541,216.919054 661.971322,215.777315 660.56,214.32 C659.151637,212.840799 658.062422,211.087844 657.36,209.17 C655.839737,204.925352 655.839737,200.284648 657.36,196.04 C658.063763,194.119844 659.152735,192.363876 660.56,190.88 C661.970366,189.416637 663.674331,188.268165 665.56,187.51 C669.683567,185.909996 674.256433,185.909996 678.38,187.51 C680.264538,188.270297 681.968082,189.418486 683.38,190.88 C684.779594,192.369779 685.86754,194.124092 686.58,196.04 C687.351613,198.143449 687.734501,200.369624 687.71,202.61 Z M683.29,202.61 C683.315229,200.821274 683.044926,199.040657 682.49,197.34 C682.010641,195.882299 681.238137,194.538074 680.22,193.39 C679.231522,192.310024 678.0156,191.462978 676.66,190.91 C673.663083,189.760663 670.346917,189.760663 667.35,190.91 C665.994105,191.467755 664.775895,192.314018 663.78,193.39 C662.758741,194.537519 661.982856,195.881706 661.5,197.34 C660.433191,200.76553 660.433191,204.43447 661.5,207.86 C661.985113,209.314286 662.760823,210.654766 663.78,211.8 C664.774281,212.872942 665.993333,213.712961 667.35,214.26 C670.346917,215.409337 673.663083,215.409337 676.66,214.26 C678.016439,213.71792 679.233256,212.877085 680.22,211.8 C681.235824,210.654049 682.008124,209.313581 682.49,207.86 C683.044178,206.166048 683.31449,204.39213 683.29,202.61 Z" id="Shape" fill="#6C4099"></path>
							<path d="M719.67,186.67 L719.67,218.52 L717.52,218.52 C717.222969,218.53073 716.927795,218.468949 716.66,218.34 C716.39378,218.189878 716.162101,217.985456 715.98,217.74 L697.56,193.74 C697.56,194.11 697.61,194.47 697.62,194.83 C697.63,195.19 697.62,195.52 697.62,195.83 L697.62,218.52 L693.85,218.52 L693.85,186.67 L696.07,186.67 C696.23313,186.658487 696.39687,186.658487 696.56,186.67 C696.681615,186.68851 696.799661,186.72561 696.91,186.78 C697.025737,186.843188 697.133218,186.92044 697.23,187.01 C697.349415,187.121017 697.459767,187.2414 697.56,187.37 L715.99,211.37 C715.99,210.98 715.93,210.61 715.91,210.24 C715.89,209.87 715.91,209.54 715.91,209.24 L715.91,186.67 L719.67,186.67 Z" id="Shape" fill="#6C4099"></path>
							<path d="M745.1,191.65 C744.991326,191.843592 744.845143,192.013572 744.67,192.15 C744.500505,192.259643 744.301794,192.315421 744.1,192.31 C743.772197,192.281722 743.461239,192.152447 743.21,191.94 C742.87,191.69 742.44,191.41 741.93,191.1 C741.34538,190.763642 740.729077,190.485635 740.09,190.27 C739.247016,189.999803 738.365032,189.871391 737.48,189.89 C736.613973,189.873543 735.751519,190.005447 734.93,190.28 C734.251778,190.506343 733.626028,190.86683 733.09,191.34 C732.615979,191.773175 732.243739,192.305922 732,192.9 C731.740941,193.534275 731.615003,194.215024 731.63,194.9 C731.595751,195.688346 731.824393,196.46573 732.28,197.11 C732.749468,197.725476 733.34207,198.23634 734.02,198.61 C734.794422,199.052174 735.612002,199.414053 736.46,199.69 L739.26,200.63 C740.26,200.96 741.15,201.33 742.06,201.73 C742.947022,202.126036 743.772205,202.64809 744.51,203.28 C745.236336,203.917799 745.824994,204.697004 746.24,205.57 C746.710269,206.615399 746.93599,207.754261 746.9,208.9 C746.906926,210.242507 746.666235,211.574782 746.19,212.83 C745.72595,214.026359 745.017541,215.112814 744.11,216.02 C743.146354,216.950918 742.003088,217.675667 740.75,218.15 C739.305506,218.690881 737.772228,218.955473 736.23,218.93 C734.288052,218.955986 732.362572,218.57089 730.58,217.8 C728.949096,217.102285 727.476216,216.081814 726.25,214.8 L727.49,212.8 C727.604751,212.633449 727.750795,212.490801 727.92,212.38 C728.089495,212.270357 728.288206,212.214579 728.49,212.22 C728.726473,212.236932 728.95422,212.316298 729.15,212.45 C729.39,212.61 729.67,212.8 729.98,213.04 C730.29,213.28 730.65,213.54 731.05,213.82 C731.480235,214.118348 731.935231,214.379301 732.41,214.6 C732.973596,214.848456 733.559575,215.042666 734.16,215.18 C734.881021,215.348135 735.619686,215.428717 736.36,215.42 C737.28715,215.434604 738.210114,215.292609 739.09,215 C739.827943,214.737666 740.507389,214.333396 741.09,213.81 C741.642963,213.294933 742.079388,212.667572 742.37,211.97 C742.670842,211.213058 742.820329,210.404469 742.81,209.59 C742.845279,208.754737 742.617965,207.929412 742.16,207.23 C741.699797,206.596478 741.110076,206.068115 740.43,205.68 C739.657343,205.242163 738.839153,204.890073 737.99,204.63 L735.19,203.74 C734.19,203.43 733.3,203.08 732.38,202.68 C731.49085,202.293667 730.667574,201.770684 729.94,201.13 C729.207055,200.461298 728.621302,199.647374 728.22,198.74 C727.339048,196.552012 727.339048,194.107988 728.22,191.92 C728.656271,190.864672 729.306627,189.91127 730.13,189.12 C731.023806,188.275777 732.073296,187.613477 733.22,187.17 C734.563145,186.656545 735.992271,186.405345 737.43,186.43 C739.08891,186.4068 740.737441,186.695123 742.29,187.28 C743.72539,187.830016 745.037387,188.659361 746.15,189.72 L745.1,191.65 Z" id="Shape" fill="#6C4099"></path>
						</g>
					</g>
				</svg>
			</a>
		</div><!-- .logo -->

		<nav id="site-navigation" class="header__menu">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'koleto' ); ?></button> -->
			<div id="mobileMenuBtn" class="mobile-menu-btn">
				<input type="checkbox" />
				<div class="ham">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
			<?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id'        => 'primary-menu',
			// ) );
			?>
			<div id="primary-menu" class="menu">
				<ul>
					<li><a href="/about/" name="about">About</a></li>
					<li><a href="/about/" name="services">Services</a></li>
					<li><button name="solutions">Solutions</button></li>
					<li><a href="/about/" name="safety">Safety</a></li>
					<li><a href="/leadership/" name="leadership">Leadership</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- .header -->
	<nav id="mobileMenu" class="mobile-menu">
		<?php
		// wp_nav_menu( array(
		// 	'theme_location' => 'menu-1',
		// 	'menu_id'        => 'mobile-menu',
		// ) );
		?>
		<div id="mobile-menu" class="menu">
			<ul>
				<li><a href="/about/" name="about">About</a></li>
				<li><a href="/about/" name="services">Services</a></li>
				<li><button name="solutions">Solutions</button></li>
				<li><a href="/about/" name="safety">Safety</a></li>
				<li><a href="/leadership/" name="leadership">Leadership</a></li>
			</ul>
		</div>
	</nav>

	<div id="content" class="site-content">
