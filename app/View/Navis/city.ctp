<?php
#echo $this->element('pankuzu_city');
//pr($shop_list);
//pr($city_info);
echo $this->Html->tag('h1', $navi_param['name'].'ナビ');
echo $this->Html->tag('p', $this->Html->tag('strong', $city_info['NaviCity']['name']) . 'の' . $navi_param['name'] . 'リスト');
#pr($shop_list);
echo $this->element('city_shop_list');

?>
