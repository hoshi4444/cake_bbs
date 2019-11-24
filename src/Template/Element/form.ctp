<?= $this->Form->create($post, array(
    'url' => array('action' => $action),
    )) ?>
<fieldset>
<?php
        echo $this->Form->hidden('postId'); //hiddenにしています（見えなくても良いため）
        echo $this->Form->hidden('resId'); //hiddenにしています（見えなくても良いため）
        echo $this->Form->input('title');
        echo $this->Form->input('name');
        echo $this->Form->input('content');
        echo "<br>";
    ?>
</fieldset>
<?= $this->Form->button(__('投稿する')) ?>
<?= $this->Form->end() ?>