<?php

class NavisController extends AppController {
  #public $scaffold;
  public $helpers = array('Html', 'Form');
  public $uses    = array('NaviShop');

  public function index() {
    $params = array(
      'order' => 'modified desc',
      'limit' => 20
    );
    $navi_name = isset($this->request->params['navi_name']) ? $this->request->params['navi_name'] : 0;
    $navi_param  = $this->check_navi($navi_name);
    #pr($navi_name);

    $title_for_layout = SITE_TITLE;
    #pr($debug);
    $todoufuken        = Configure::read('todoufuken');
    $tiiki             = Configure::read('tiiki');
    $tiiki_group       = Configure::read('tiiki_group');
    $popular_shop_list = $this->NaviShop->find('getPopularShops');
    #$tiiki_group_count = $this->NaviShop->find('getTiikiGroupCount', array(, $tiiki_group));
    $tiiki_group_count  = array();
    foreach($tiiki_group as $item)
    {
      //countをループしているところはjoin使えばサブクエリで取れそう
      $tiiki_group_count[] = $this->NaviShop->find('getTiikiGroupCount', $item);
    }
    #pr($tiiki_list);
    //exit("ss");
    $this->set(compact('title_for_layout', 'tiiki', 'tiiki_group_count', 'navi_name', 'navi_param', 'popular_shop_list'));
  }

  public  function tiiki($id = null)
  {
    $navi_name     = isset($this->request->params['navi_name']) ? $this->request->params['navi_name'] : 0;
    $tiiki_id      = isset($this->request->params['tiiki_id']) ? intval($this->request->params['tiiki_id']) : 0;
    $navi_param    = $this->check_navi($navi_name);
    $todoufuken    = Configure::read('todoufuken');
    $tiiki         = Configure::read('tiiki');
    $tiiki_group   = Configure::read('tiiki_group');
    #$todofuken_list = $this->Todoufuken->find('all');
    $shop_list = $this->NaviShop->find('all', array());
    $todoufuken_count = array();
    $i = 0;
    foreach($tiiki_group[$tiiki_id] as $item)
    {
      //countをループしているところはjoin使えばサブクエリで取れそう
      $todoufuken_count[] = $this->NaviShop->find('getTodoufukenCount', $item);
      #echo $item;
      $i ++ ;
    }
    #pr($todoufuken_count);

    #exit('aaa');

    $this->set(compact('title_for_layout', 'tiiki', 'tiiki_group', 'tiiki_id', 'navi_param', 'navi_name', 'shop_list', 'todoufuken', 'todoufuken_count'));
    $this->render();
  }

  public  function todoufuken($id = null)
  {
    $navi_name      = isset($this->request->params['navi_name']) ? $this->request->params['navi_name'] : 0;
    $todoufuken_id  = isset($this->request->params['todoufuken_id']) ? intval($this->request->params['todoufuken_id']) : 0;
    $navi_param     = $this->check_navi($navi_name);
    $todoufuken     = Configure::read('todoufuken');
    $tiiki          = Configure::read('tiiki');
    $tiiki_group    = Configure::read('tiiki_group');
    foreach($tiiki_group as $key => $item)
    {
      foreach($item as $id)
      {
        if($id == $todoufuken_id)
        {
          $tiiki_id = $key;
        }
      }
    }
    //exit();
    #$todofuken_list = $this->Todoufuken->find('all');
    $shop_list = $this->NaviShop->find('getTodoufukenShops', $todoufuken_id);
      
    $this->set(compact('title_for_layout', 'tiiki', 'tiiki_id', 'tiiki_group', 'navi_param', 'navi_name', 'shop_list', 'todoufuken', 'todoufuken_id'));
    $this->render();
  }
  
  public function shop()
  {
    header("Content-type:text/html;charset=UTF-8");
    $navi_name   = isset($this->request->params['navi_name']) ? $this->request->params['navi_name'] : 0;
    $navi_param  = $this->check_navi($navi_name);
    $shop_id     = $this->request->params['shop_id'];
    $shop_data   = $this->NaviShop->find('getShopData', $shop_id); 
    $navi_param     = $this->check_navi($navi_name);
    $todoufuken     = Configure::read('todoufuken');
    $tiiki          = Configure::read('tiiki');
    $tiiki_group    = Configure::read('tiiki_group');
    #pr($shop_data);
    $tiiki_id       = array_search($tiiki,$shop_data['NaviShop']['todoufuken_id']);
    //exit("aaa");
    $this->set(compact('title_for_layout', 'tiiki', 'tiiki_id', 'shop_data', 'navi_param', 'navi_name', 'todoufuken'));
    $this->render();
  }
  
  #naviが存在するかチェックする
  public function check_navi($navi_name = 0)
  {
    $flag = 0;
    $navi_list = Configure::read('navi_list'); 
    foreach($navi_list as $item){
      if($item == $navi_name)
      {
        $flag = 1;
      }
    }
    if($flag == 1)
    {
      #naviの名前を返す 
      return Configure::read('navi_param.'.$navi_name);
    }
    else
    {
      //リダイレクト処理
    }
  }
}

?>
