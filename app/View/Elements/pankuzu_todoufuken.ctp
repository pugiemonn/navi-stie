<?php
echo $this->Html->tag('p', null);
#echo $this->Html->link('aトップ', '/' . isset($navi_name) ? $navi_name : '' . '/' , array('data-ajax' => 'false'));
echo $this->Html->link('トップ', '/' . $navi_name . '/' , array('data-ajax' => 'false'));
#echo $this->Html->link('aトップ', '/' .i "/" , array('data-ajax' => 'false'));
echo " > ";
echo $this->Html->link($tiiki[$tiiki_id], '/' . $navi_name . '/' . $tiiki_id , array('data-ajax' => 'false'));
echo " > ";
echo $todoufuken[$todoufuken_id];
echo $this->Html->tag('/p', null);
?>
