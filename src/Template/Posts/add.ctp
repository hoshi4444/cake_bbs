<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>

<h1><?= __('新規記事作成') ?></h1><hr>
<div class="posts form large-9" style="margin: 0 auto">
    <?php $post->postId = -1; ?>
    <?= $this->element('form', ['post' => $post, 'action' => 'add']) ?>
</div>