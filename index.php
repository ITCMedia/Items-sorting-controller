<?php
   // НОВИНКИ
    if (Core::moduleIsActive('shop'))
	{
	$shop_id = 1; // ID Магазина
	$xsl_name = "МагазинКаталогТоваровНаГлавнойСпецПред"; // XSL-шаблон

	$Shop_Controller_Show = new Shop_Controller_Show(
		Core_Entity::factory('Shop', $shop_id)
	);

	$Shop_Controller_Show->shopItems()->queryBuilder()->clearOrderBy()->orderBy("datetime", "desc"); // Сортировка

	$Shop_Controller_Show
		->xsl(
		Core_Entity::factory('Xsl')->getByName($xsl_name)
	)
	->groupsMode('none')
	->group(FALSE)
	->limit(10)
	->show();
	}
?>