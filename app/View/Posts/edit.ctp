<?php
echo $this->Html->tag('h2', 'Edit Post');

echo $this->Form->create('Post', array('action' => 'edit'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => 3));
echo $this->Form->end('Save!');


?>
