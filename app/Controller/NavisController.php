<?php

class NavisController extends AppController {
  #public $scaffold;
  public $helpers = array('Html', 'Form');

  public function index() {
    $params = array(
      'order' => 'modified desc',
      'limit' => 20
    );
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
    $todoufuken  = Configure::read('todoufuken');
    $tiiki       = Configure::read('tiiki');
    $tiiki_group = Configure::read('tiiki_group');
      
    #$this->Post->id = $id;
    #$this->set('post', $this->Post->read());
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
}

?>
