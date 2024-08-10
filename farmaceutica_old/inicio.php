<?php 
	//Llamamos archivo XML
	$xmlFile = "data-xml/datos-productos.xml";
	$xml = simplexml_load_file($xmlFile);
	$item_list = $xml->xpath('/itemList/item');
?>

<div id="pro-home-slider"><!-- START REVOLUTION SLIDER 4.6.0 fullwidth mode -->
		<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
				<ul>	<!-- SLIDE  -->
					<li data-transition="zoomin" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
						<!-- MAIN IMAGE -->
						<img src="images/dummy.png"  alt="slide-main-1" data-lazyload="images/banner/banner-1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption renovation-headline sfb fadeout tp-resizeme"
							 data-x="150"
							 data-y="center" data-voffset="120"
							data-speed="300"
							data-start="750"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"

							>PRODUCTOS VETERINARIOS<br />
							IDEALES PARA EL GANADO
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption renovation-button sfb fadeout tp-resizeme"
							 data-x="190"
							 data-y="center" data-voffset="225"
							data-speed="300"
							data-start="1000"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"
							>
							<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela.html">Ver productos →</a>
						</div>
					</li>
					
					<!-- SLIDE  -->
					<li data-transition="zoomin" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
						<!-- MAIN IMAGE -->
						<img src="images/dummy.png"  alt="slide-main-2" data-lazyload="images/banner/banner-2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption renovation-headline sfb fadeout tp-resizeme"
							 data-x="150"
							 data-y="center" data-voffset="120"
							data-speed="300"
							data-start="750"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"
							>
							CONÓZCA NUESTRA LÍNEA<br />
							DE PRODUCTOS CANINOS
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption renovation-button sfb fadeout tp-resizeme"
							 data-x="190"
							 data-y="center" data-voffset="225"
							data-speed="300"
							data-start="1000"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"
							>
							<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/linea-canina.html">Ver productos →</a>
						</div>
					</li>
					
					<!-- SLIDE  -->
					<li data-transition="zoomin" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
						<!-- MAIN IMAGE -->
						<img src="images/dummy.png"  alt="slide-main-3" data-lazyload="images/banner/banner-3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption renovation-headline sfb fadeout tp-resizeme"
							 data-x="150"
							 data-y="center" data-voffset="120"
							data-speed="300"
							data-start="750"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"
							>
							PRODUCTOS VETERINARIOS<br />
							DE ALTA CALIDAD
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption renovation-button sfb fadeout tp-resizeme"
							 data-x="190"
							 data-y="center" data-voffset="225"
							data-speed="300"
							data-start="1000"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							 data-endspeed="300"
							>
							<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela.html">Ver productos →</a>
						</div>
					</li>
				</ul>
			<div class="tp-bannertimer tp-bottom"></div>
		</div>

			<script type="text/javascript">

				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
				

				var setREVStartSize = function() {
					var	tpopt = new Object();
						tpopt.startwidth = 1700;
						tpopt.startheight = 750;
						tpopt.container = jQuery('#rev_slider_1_1');
						tpopt.fullScreen = "off";
						tpopt.forceFullWidth="on";

					tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
				};

				/* CALL PLACEHOLDER */
				setREVStartSize();


				var tpj=jQuery;
				tpj.noConflict();
				var revapi1;

				tpj(document).ready(function() {

				if(tpj('#rev_slider_1_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_1_1');
				else
				   revapi1 = tpj('#rev_slider_1_1').show().revolution(
					{
						dottedOverlay:"none",
						delay:9000,
						startwidth:1700,
						startheight:750,
						hideThumbs:200,
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						simplifyAll:"off",
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",
						touchenabled:"off",
						onHoverStop:"on",
						nextSlideOnWindowFocus:"off",
						keyboardNavigation:"on",
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:30,
						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:0,
						soloArrowLeftVOffset:0,
						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:0,
						soloArrowRightVOffset:0,
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",
						spinner:"spinner3",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						forceFullWidth:"on",
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"on",
						hideThumbsUnderResolution:0,
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0					
					});
				});	

			</script>

			</style>
		</div><!-- END REVOLUTION SLIDER -->
	</div>
	
	<div class="widget home-widget pyre_homepage_media-port">
		<div class="pyre_homepage_media-widget-port-2 service-posts-home">
			<div class="width-container"  style="text-align:center;">
				<h2 class="home-widget">Bienvenidos!</h2>
				<div class="summary-text-pro">Farmaceutica Mundial</div>
				<div class="home-portfolio-boxes grid3column-progression">
					<article>
						<div class="service-container">
							<div class="service-thumb">
								<img width="300" height="140" src="images/home-icon-1.png" class="attachment-medium wp-post-image" alt="construction-icon">
							</div>
							<h2>¿Quiénes somos?</h2>
							<div class="service-content">
								<p>Somos una empresa del sector farmacéutico dirigida al gremio de la ganadería y de animales de compañía...</p>
								<a href="<?php echo $site_url;?>laboratorio-farmaceutico-en-venezuela.html" class="ls-sc-button secondary" target="_self" title="" rel=""><span class="ls-sc-button-inner">Leer más</span></a>
                            </div>
						</div>
					</article>
					<div class="clearfix"></div>
				</div>
				<div class="home-portfolio-boxes grid3column-progression">
					<article>
						<div class="service-container">
							<div class="service-thumb">
								<img width="300" height="140" src="images/home-icon-2.png" class="attachment-medium wp-post-image" alt="roofing-icon">
							</div>
							<h2>Productos</h2>
							<div class="service-content">
								<p>Conózca nuestros medicamentos veterinarios propios o representados, con los mejores estándares de calidad...</p>
                                <a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela.html" class="ls-sc-button secondary" target="_self" title="" rel=""><span class="ls-sc-button-inner">Catálogo</span></a>
							</div>
						</div>
					</article>
					<div class="clearfix"></div>
				</div>
				<div class="home-portfolio-boxes grid3column-progression lastcolumn-progression">
					<article>
						<div class="service-container">
							<div class="service-thumb">
								<img width="300" height="140" src="images/home-icon-3.png" class="attachment-medium wp-post-image" alt="remodeling-icon">
							</div>
							<h2>Atención al cliente</h2>
							<div class="service-content">
								<p>Su opinión o sugerencia es importante para nosotros, puede contactarnos y con gusto le atenderemos.</p>
								<a href="<?php echo $site_url;?>contacto.html" class="ls-sc-button secondary" target="_self" title="" rel=""><span class="ls-sc-button-inner">Contáctenos</span></a>
                            </div>
						</div> 
					</article>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<div class="clearfix"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="widget home-widget pyre_homepage_media-menu">
		<div class="pyre_homepage_media-widget-menu-2 portfolio-posts-home light-fonts-pro">
			<div class="width-container">
				<h2 class="home-widget">Destacados</h2>
				<div class="summary-text-pro">Productos veterinarios</div>
				
				<?php 
					$count = 1;
					$productosDestacados = array("masti-lac", "equix-gel", "antriban");
					foreach ($item_list as $item) {
						$prodLink = $site_url."productos-veterinarios-en-venezuela/".$item->category."/".$item->idUrl.".html";
						
						
						if (in_array($item->idUrl, $productosDestacados)) {	
				?>
                <div class="home-portfolio-boxes grid3column-progression <?php if($count%3 == 0){echo " lastcolumn-progression";}?>">
                	<article>
						<div class="portfolio-index-pro">
							<div class="featured-image-portfolio">
								<a href="<?php echo $prodLink; ?>">
                                    <img width="600" height="338" src="<?php echo $site_url;?>images/productos/<?php echo $item->imageUrl;?>" alt="<?php echo $item->categoryName;?> - <?php echo $item->name;?>">
                                </a>
							</div>
							<div class="portfolio-index-text">
								<div class="portfolio-index-padding">
									<h4 class="portfolio-index-title">
										<a href="<?php echo $prodLink; ?>"><?php echo $item->name;?></a>
									</h4>
                                    <div class="meta-progression-port">
                                        <ul>
                                            <li>Categoría: <a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/<?php echo $item->category;?>.html"><?php echo $item->categoryName;?></a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div> 
					</article>
					 </div>
					 <?php if($count%3 == 0){echo "<div class=\"clearfix\"></div>";}?>
                     <?php $count++;}}?>
                     
				<div class="clearfix"></div>
				<div class="clearfix"></div>
				<div class="aligncenter">
					<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela.html" class="progression-button progression-button-portfolio progression-blog">Ver más productos</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>