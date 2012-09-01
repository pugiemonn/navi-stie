<?php
class NaviCity extends AppModel{
  public $name = 'NaviCity';


  public $hasMany = array(
    'NaviShop' => array(
      'className' => 'NaviShop',
      'foreignKey' => 'shop_id',
      'conditions' => '',
      'fields' => '',
      'order' => '`id` ASC',
      'limit' => '',
      'offset' => '',
      'exclusive' => '',
      'finderQuery' => '',
      'counterQuery' => ''
    )
  );
}

?>
