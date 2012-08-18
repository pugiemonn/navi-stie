<?php
#pr($tiiki);
echo $tiiki_id;
#pr($shop_data);
echo $this->Html->tag('p', null);
echo $this->Html->link('トップ', '/' . $navi_name . '/' , array('data-ajax' => 'false'));
echo " > ";
echo $this->Html->link($tiiki[$shop_data['NaviShop']['tiiki_id']], '/' . $navi_name . '/' . $shop_data['NaviShop']['tiiki_id'] , array('data-ajax' => 'false'));
echo " > ";
echo $this->Html->link($todoufuken[$shop_data['NaviShop']['todoufuken_id']], '/' . $navi_name . '/' . $shop_data['NaviShop']['tiiki_id'] . '/' . $shop_data['NaviShop']['todoufuken_id'] , array('data-ajax' => 'false'));
echo $this->Html->tag('/p', null);
?>
