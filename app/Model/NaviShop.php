<?php
#App::uses('AppModel', 'Model');
class NaviShop extends AppModel{
  public $name = 'NaviShop';
/*
  public $validate = array(
    'title' => array(
      'rule' => 'notEmpty',
      'message' => '空じゃだめだし'
    ),
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
*/

//カスタムfind
  public function find($type, $options = array()) {
    switch($type) {
      case 'getTiikiGroupCount' :
        #pr($options); 
        $options = array(
          'conditions' => array(
            '`NaviShop`.`todoufuken_id`' => $options
          )
        );
        return parent::find('count', $options
        );
      case 'getTodoufukenCount' :
        #pr($options); 
        $options = array(
          'conditions' => array(
            '`NaviShop`.`todoufuken_id`' => $options
          )
        );
        return parent::find('count', $options
        );
      case 'getCityCount' :
        #pr($options); 
        $options = array(
          'conditions' => array(
            '`NaviShop`.`todoufuken_id`' => $options
          ),
          'fields'     => array(
            '`NaviShop`.`city_id`',
            'COUNT(`NaviShop`.`city_id`) AS `count`',
          ),
          'group'      => 
            array('`NaviShop`.`city_id`'),
        );
        return parent::find('all', $options
        );
      case 'getTodoufukenShops' :
        $options = array(
          'conditions' => array(
            '`NaviShop`.`todoufuken_id`' => $options
          )
        );
        return parent::find('all', $options);
      case 'getCityShops' :
        $options = array(
          'conditions' => array(
            '`NaviShop`.`city_id`' => $options
          ),
/*
          'fields' => array(
            '`NaviShop`.`id`',
            '`NaviShop`.`tiiki_id`',
            '`NaviShop`.`todoufuken_id`',
            '`NaviShop`.`city_id`',
            '`NaviShop`.`navi_id`',
            '`NaviShop`.`name`',
            '`NaviShop`.`url`',
            '`NaviShop`.`owner`',
            '`NaviShop`.`charge`',
            '`NaviShop`.`seats`',
            '`NaviShop`.`address`',
            '`NaviShop`.`tel`',
            '`NaviShop`.`access`',
            '`NaviCity`.`id`',
            '`NaviCity`.`name`',
          ),
*/
        );
        return parent::find('all', $options);
      case 'getPopularShops' :
        $options = array(
          'limit' => 3
        );
        return parent::find('all', $options);
      //お店の情報を一軒取得する
      case 'getShopData' :
        #parent::id = $options; 
        return parent::read(array(), $options);
      case 'list' :
        return parent::find('all', array_merge(
          array(
            'fields' => array(
              '`NiconicoTag`.`id`',
              '`NiconicoTag`.`name`',
              'COUNT(`NiconicoTag`.`name`) AS `count`',
            ),
            'joins' => array('FORCE INDEX(name)'),
            //'joins' => array('FORCE INDEX(post_id)'),
            //'joins' => array('FORCE INDEX(`NiconicoTag`.`count`)'),
            'group'  => array('`NiconicoTag`.`name`'),
            'order'  => '`count` DESC',
            //'limit'  => ''
          ),
          $options
          )
        );
      case 'videoTagSummary' :
      default:
        return parent::find($type, $options);
    }
  }

  public $belongsTo = array(
    'NaviCity' => array(
      'className' => 'Navi_city',
      'foreignKey' => 'city_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    )
  );
  
}

?>
