<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>


<h1><?= __('投稿詳細') ?></h1><hr>
<div class="posts index large-9" style="margin: 0 auto">

<?php foreach ($posts as $post): ?>
<?= $this->element('one_article', ['post' => $post]) ?>
<?php endforeach; ?>

<hr>
<h2><?= __('返信フォーム') ?></h2>
    <?php $new_post->postId = $post->postId; ?>
    <?php $new_post->resId = $post->resId + 1; ?>
    <?php $new_post->title = "Re:".$post->title; ?>
    <?= $this->element('form', ['post' => $new_post, 'action' => 'add']) ?>
</div>
