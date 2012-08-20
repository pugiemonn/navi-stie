<?php
echo $this->Html->tag('h2', $todoufuken[$todoufuken_id] . 'の店舗');
if(count($shop_list) < 1)
{
  echo $this->Html->tag('p', '登録店舗は見つかりませんでした。');
}
else
{
  echo $this->Html->tag('ul', null, array('data-role' => 'listview'));
  foreach($shop_list as $item)
  {
    //pr($item);
    echo $this->Html->tag('li', null); 
    echo $this->Html->link($item['NaviShop']['name'], '/' . $navi_name . '/shop/' . $item['NaviShop']['id'] );
    echo $this->Html->tag('/li', null); 
  }
  echo $this->Html->tag('/ul', null);
}
?>
