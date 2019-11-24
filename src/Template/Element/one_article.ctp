<?php if ($post->resId === 0):?>
    <div class="panel panel-default" style="clear:both">
<?php else: ?>
    <div class="panel panel-default" style="margin:10px 0 0 60px">
<?php endif; ?>
    <div class="panel-heading">
        <h4 class="panel-title" style="margin-bottom:3px"><font size="5" color="black">投稿者: <?= $post->name ?>  /  投稿日時: <?= h($post->created) ?>　　
          <font size="3" color="1253A4">
            <b class="right">
              <a href="<?php echo $this->Url->build([
                  'controller' => 'Posts', 'action' => 'view', $post->postId])?>">
                  スレッドを表示
              </a>    
              <a href="<?php echo $this->Url->build([
                  'controller' => 'Posts', 'action' => 'edit', $post->id])?>">
                  編集
              </a>    
              <?= $this->Form->postLink(__('削除'), [
                  'action' => 'delete', $post->id], [
                  'confirm' => __('ID {0}番の記事を削除しますか?', $post->id)]) ?>
            </b> 
          </font>
    </div>
    <div class='panel-boby'>
        <div style="padding:10px">
            <?= h($post->content) ?>
        </div>
    </div>
</div>