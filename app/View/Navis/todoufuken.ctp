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

echo $this->Html->tag('h2', $todoufuken[$todoufuken_id] . 'の店舗');
echo $this->Html->tag('ul', null, array('data-role' => 'listview'));
foreach($shop_list as $item)
{
  //pr($item);
  echo $this->Html->tag('li', null);  
  echo $this->Html->link($item['NaviShop']['name'], '/' . $navi_name . '/shop/' . $item['NaviShop']['id'] );
  echo $this->Html->tag('/li', null);  
}
echo $this->Html->tag('/ul', null);
?>
