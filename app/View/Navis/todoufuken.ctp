<?php
echo $this->element('pankuzu');
echo $this->Html->tag('h1', $navi_param['name'].'ナビ');
echo $this->Html->tag('p', $todoufuken[$todoufuken_id] . 'の' . $navi_param['name'] . 'リスト');
#pr($shop_list);
/*
foreach($tiiki_group[] as $item)
{
pr($item);
}
*/
echo $this->element('popular_shop_list');

?>
