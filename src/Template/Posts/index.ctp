<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>

<div class="posts index content">
    <h1 class="left"><?= __('投稿一覧') ?></h1>
    <h1 class="right"><?= $this->Html->link(__('新規投稿'), ['action' => 'add']) ?></h3>

    <?php foreach ($posts as $post): ?>
      <?= $this->element('one_article', ['post' => $post]) ?>
    <?php endforeach; ?>

</div>
