<?php
echo $this->Element('pankuzu_tiiki');
echo $this->Html->tag('h1', $navi_param['name'].'ナビ');
echo $this->Html->tag('p', $tiiki[$tiiki_id] . 'の' . $navi_param['name'] . 'リスト');
#pr($tiiki_group);
#pr($todoufuken_count);
echo $this->Html->tag('ul', null, array('data-role' => 'listview'));
$i = 0;
foreach($tiiki_group[$tiiki_id] as $todoufuken_id)
{
  echo $this->Html->tag('li', null); 
#  echo $todoufuken_id;
  echo $this->Html->link($todoufuken[$todoufuken_id] . '(' . $todoufuken_count[$i] . ')', '/' . $navi_name . '/' . $tiiki_id . '/' . $todoufuken_id);
  echo $this->Html->tag('/li', null); 
  $i ++;
}
echo $this->Html->tag('/ul', null);

echo $this->element('popular_shop_list');

?>
