<?php
echo $this->element('pankuzu_todoufuken');
echo $this->Html->tag('h1', $navi_param['name'].'ナビ');
echo $this->Html->tag('p', $this->Html->tag('strong', $todoufuken[$todoufuken_id]) . 'の' . $navi_param['name'] . 'リスト');
#pr($shop_list);
/*
foreach($tiiki_group[] as $item)
{
pr($item);
}
*/
echo $this->element('todoufuken_shop_list');

?>
