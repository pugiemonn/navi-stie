<?php
echo $this->Html->tag('h1', h($navi_param['name']).'ナビ');
echo $this->Html->tag('ul', null, array('data-role' => 'listview', 'data-theme' => ''));
for($i = 1; $i < 10; $i++)
{
  echo $this->Html->tag('li', null, array());
  echo $this->Html->link(h($tiiki[$i])."(".$tiiki_group_count[$i-1].")", '/');
  echo $this->Html->tag('/li', null);
}
echo $this->Html->tag('/ul');
echo $this->Html->tag('h2', '人気店リスト');
if(count($popular_shop_list) > 0)
{
  echo $this->Html->tag('ul', null, array('data-role' => 'listview', 'data-theme' => ''));
  foreach($popular_shop_list as $item)
  {
    
    echo $this->Html->tag('li');
    #pr($item);
    #echo $item['NaviShop']['name'];
    echo $this->Html->link($item['NaviShop']['name'], '/'.$navi_name.'/shop/'.$item['NaviShop']['id']);
    echo $this->Html->tag('/li');
  }
  echo $this->Html->tag('/ul', null);
}
?>
