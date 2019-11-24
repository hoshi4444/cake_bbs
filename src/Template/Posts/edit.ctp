<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1><?= __('投稿編集') ?></h1><hr>
<div class="posts form large-9" style="margin: 0 auto">
    <?= $this->element('form', ['post' => $post, 'action' => 'edit']) ?>
</div>