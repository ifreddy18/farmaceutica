<?php 
	//Llamamos archivo XML
	$xmlFile = "data-xml/datos-productos.xml";
	$xml = simplexml_load_file($xmlFile);
	
	//Filtramos
	$idUrl_filtro = "";
	$categoryName = "";
	$category = "";
	$idUrl = "";
	if(isset($_GET['prod']) && ($_GET['prod'] != "")){
		$filtro = strtolower($_GET['prod']);
		$idUrl_filtro = '[idUrl="'.$filtro.'"]';
		$item_list = $xml->xpath('/itemList/item'.$idUrl_filtro.'');
		
		if(count($item_list)){
			$categoryName = $item_list[0]->categoryName;
			$category = $item_list[0]->category;
			$idUrl = $item_list[0]->idUrl;
		}
	}else{
		$item_list = $xml->xpath('/itemList/item');
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
		<div class="width-container bg-sidebar-pro">
			<div id="content-container">
				<div>
					<?php foreach ($item_list as $item) {?>
                    <div class="container-blog">
                        <a href="<?php echo $site_url;?>images/productos/<?php echo $item->imageUrl;?>" rel="prettyPhoto">
                            <img src="<?php echo $site_url;?>images/productos/<?php echo $item->imageUrl;?>" class="attachment-progression-blog wp-post-image" alt="<?php echo $item->categoryName;?> - <?php echo $item->name;?>" style="width:300px; float:right; margin: 0px 0px 20px 20px;">
                        </a>
						<div class="blog-container-text">
							<h5 style="margin: 0px;"><?php echo $item->categoryName;?></h5>
                            <h2 class="blog-title"><?php echo $item->name;?></h2>
                            <div class="entry-content">
								<?php echo $item->descriptionFull;?>
							</div>
						</div>
					</div>
				</div>
                <?php }?>
			</div>
			<div id="sidebar">
            	<?php include("include-productos-sidebar.php");?>
                <div class="sidebar-divider"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="clearfix"></div>
<?php }else{header('Location: '.$site_url.'productos-veterinarios-en-venezuela.html');exit;}?>