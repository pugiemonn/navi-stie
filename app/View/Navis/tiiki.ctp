<?php
echo $this->Html->tag('h1', $navi_param['name'].'ナビ');
echo $this->Html->tag('p', $tiiki[$tiiki_id] . 'の' . $navi_param['name'] . 'リスト');
//pr($todoufuken);
//pr($tiiki_group);
echo $this->Html->tag('ul', null, array('data-role' => 'listview'));
foreach($tiiki_group[$tiiki_id] as $todoufuken_id)
{
  echo $this->Html->tag('li', null); 
  echo $this->Html->link($todoufuken[$todoufuken_id], '/' . $navi_name . '/' . $tiiki_id . '/' . $todoufuken_id);
  echo $this->Html->tag('/li', null); 
}
echo $this->Html->tag('/ul', null);

echo $this->Html->tag('h2', $tiiki[$tiiki_id] . 'の店舗');
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
