<?php
echo $this->Html->tag('h2', '記事一覧');
echo $this->Html->tag('ul', null);
foreach($posts as $post)
{
echo $this->Html->tag('li', null, array('id' => 'post_'.$post['Post']['id'])); 
echo $this->Html->link(h($post['Post']['title']), '/posts/view/'.$post['Post']['id']); 
echo $this->Html->link('編集', array('action' => 'edit', $post['Post']['id']));
#echo $this->Form->postLink('削除', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'sure?'));
echo $this->Html->link('削除', '#', array('class' => 'delete', 'data-post-id' => $post['Post']['id']));
echo $this->Html->tag('/li');
}
echo $this->Html->tag('/ul', null);

echo $this->Html->tag('h2', 'Add Post');
echo $this->Html->link('Add post', array('controller' => 'posts', 'action' => 'add'));

?>
<script>
$(function(){
  //alert("aaa");
  $('a.delete').click(
    function(e)
    {
    //alert("aaa");
      if(confirm('sure?'))
      {
        $.post('/posts/delete/' + $(this).data('post-id'), {}, function(res)
          {
            $('#post_'+res.id).fadeOut();
          }, "json"
        );
      }
    }
  );
});
</script>
