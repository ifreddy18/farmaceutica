<?php 
	//Llamamos archivo XML
	$xmlFile = "data-xml/datos-productos.xml";
	$xml = simplexml_load_file($xmlFile);
	
	//Filtramos por "category"
	$categoryName = "";
	$category = "";
	if(isset($_GET['cat']) && ($_GET['cat'] != "")){
		$filtro = strtolower($_GET['cat']);
		$categoria_filtro = '[category="'.$filtro.'"]';
		$item_list = $xml->xpath('/itemList/item'.$categoria_filtro.'');
		$categoryName = $item_list[0]->categoryName;
		$category = $item_list[0]->category;
	}else{
		$item_list = $xml->xpath('/itemList/item');
		$categoryName = "";
		$category = "";
	}
?>
<?php if(count($item_list)){?>
<div id="page-title-background">
		<div id="page-title">
			<div class="width-container">
				<h1>Productos</h1>
				<div id="page-title-description">
					<p>Seleccione una categoría:</p>
				</div>
				<div class="clearfix"></div>
				<ul id="portfolio-sub-nav">
					<li class="cat-item<?php if($_GET['cat'] == ""){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela.html">Todos</a>
					</li>
					<li class="cat-item<?php if($_GET['cat'] == "vitaminicos"){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/vitaminicos.html" title="">Vitamínicos</a>
					</li>
					<li class="cat-item<?php if($_GET['cat'] == "antiparasitarios"){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/antiparasitarios.html" title="">Antiparasitarios</a>
					</li>
                    <li class="cat-item<?php if($_GET['cat'] == "antibioticos"){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/antibioticos.html" title="">Antibióticos</a>
					</li>
                    <li class="cat-item<?php if($_GET['cat'] == "linea-canina"){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/linea-canina.html" title="">Línea canina</a>
					</li>
                    <li class="cat-item<?php if($_GET['cat'] == "otros"){echo" current-cat";} ?>">
						<a href="<?php echo $site_url;?>productos-veterinarios-en-venezuela/otros.html" title="">Otros</a>
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">jQuery(document).ready(function($) {   $("#page-title-background").backstretch([ "<?php echo $site_url;?>images/page-title.jpg" ],{ fade: 750, }); }); </script>
	</div>	
	<div id="main">
		<div class="width-container">
			<div id="portfolio-index">
				<?php $count = 1; foreach ($item_list as $item) { $prodLink = $site_url."productos-veterinarios-en-venezuela/".$item->category."/".$item->idUrl.".html";?>
                <div class="grid4column-progression<?php if($count%4 == 0){echo " lastcolumn-progression";}?>"> 
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
                 <?php if($count%4 == 0){echo "<div class=\"clearfix\"></div>";}?>
				 <?php $count++;}?>
			</div>
		</div><!-- close .width-container -->
		<div class="clearfix"></div>
	</div>
<?php }else{header('Location: '.$site_url.'productos-veterinarios-en-venezuela.html');exit;}?>