<?php
echo $this->Html->tag('h2', '人気の店舗');
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
