<?php
echo $this->Html->tag('h1', h($shop_data['NaviShop']['name']));
echo $this->Html->tag('table', null, array('class' => 'navi-shop-data-table'));
if(isset($shop_data['NaviShop']['name']) && $shop_data['NaviShop']['name'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', '店名');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['name']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['url']) && $shop_data['NaviShop']['url'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', 'HP');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', $this->Html->link($shop_data['NaviShop']['url'], $shop_data['NaviShop']['url'], array('target' => '_blank')));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['owner']) && $shop_data['NaviShop']['owner'] != '')
{
  echo $this->Html->tag('tr', null);
  echo $this->Html->tag('th', '代表者');
  echo $this->Html->tag('/th', null);
  echo $this->Html->tag('td', h($shop_data['NaviShop']['owner']));
  echo $this->Html->tag('/td', null);
  echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['charge']) && $shop_data['NaviShop']['charge'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', '料金');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['charge']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['seats']) && $shop_data['NaviShop']['seats'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', '座席');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['seats']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['address']) && $shop_data['NaviShop']['address'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', '住所');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['address']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['access']) && $shop_data['NaviShop']['access'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', 'アクセス');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['access']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
if(isset($shop_data['NaviShop']['tel']) && $shop_data['NaviShop']['tel'] != '')
{
echo $this->Html->tag('tr', null);
echo $this->Html->tag('th', '電話');
echo $this->Html->tag('/th', null);
echo $this->Html->tag('td', h($shop_data['NaviShop']['tel']));
echo $this->Html->tag('/td', null);
echo $this->Html->tag('/tr', null);
}
echo $this->Html->tag('/table', null);
pr($shop_data);
?>
