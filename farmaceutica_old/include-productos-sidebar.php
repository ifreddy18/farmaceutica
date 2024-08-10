<?php 
	//Llamamos archivo XML
	$xmlFileSidebar = "data-xml/datos-productos.xml";
	$xmlSidebar = simplexml_load_file($xmlFileSidebar);
	
	//Filtramos por "category"
	if($category != ""){
		$item_list_Sidebar = $xmlSidebar->xpath('/itemList/item[category="'.$category.'"]');
		$categoryNameSidebar = $item_list_Sidebar[0]->categoryName;
	}else{
		$item_list_Sidebar = $xmlSidebar->xpath('/itemList/item');
	}

?>
<div class="sidebar-item widget">
    <h6 class="widget-title">Productos similares</h6>
    <ul class="photoList">
        <?php 
			foreach ($item_list_Sidebar as $item_Sidebar) {
		?>
        <li><a href="<?php echo $site_url;?><?php echo "productos-veterinarios-en-venezuela/".$item_Sidebar->category."/".$item_Sidebar->idUrl.".html";?>"><img src="<?php echo $site_url;?>images/productos/<?php echo $item_Sidebar->imageUrl;?>" alt="<?php echo $item_Sidebar->name;?>" style="width:55px; margin-right:5px;"><?php echo $item_Sidebar->name;?></a></li>
        <?php } ?>
    </ul>
</div>

