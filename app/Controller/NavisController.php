<?php

class NavisController extends AppController {
  #public $scaffold;
  public $helpers = array('Html', 'Form');

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
    $todoufuken  = Configure::read('todoufuken');
    $tiiki       = Configure::read('tiiki');
    $tiiki_group = Configure::read('tiiki_group');
    #pr($todoufuken);
    //$this->set('posts', $this->Post->find('all', $params));
    $this->set(compact('title_for_layout', 'tiiki'));
  }

  public  function todoufuken($id = null)
  {
    $navi_name   = isset($this->request->params['navi_name']) ? $this->request->params['navi_name'] : 0;
    $navi_param  = $this->check_navi($navi_name);
    $todoufuken  = Configure::read('todoufuken');
    $tiiki       = Configure::read('tiiki');
    $tiiki_group = Configure::read('tiiki_group');
    #$shop_list   = $this->Shop->find('all');
      
    #$this->Post->id = $id;
    #$this->set('post', $this->Post->read());
    $this->set(compact('title_for_layout', 'tiiki', 'navi_param'));
    $this->render();
  }
  
  public function shop()
  {
    
    $this->set(compact('title_for_layout', 'tiiki'));
    $this->render();
  }

  public function add()
  {
    if($this->request->is('post'))
    {
      if($this->Post->save($this->request->data))
      {
        $this->Session->setFlash('Success!');
        $this->redirect(array('action' => 'index'));
      }
      else
      {
        $this->Session->setFlash('failed!');
      }
    }
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
      
      return Configure::read('navi_param.'.$navi_name);
    }
    else
    {
      //リダイレクト処理
    }
  }
}

?>
