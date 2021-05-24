<?php


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <p>
        <?= \yii\helpers\Html::a('Добавить запись', ['/front/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="site-index">
        <br>
        <hr>
   <? foreach ($request as $item) : ?>
   <?= $item->name ?> -

   <?= \yii\helpers\Html::img($item->before_img, ['width' => 150]); ?> ->
   <?= \yii\helpers\Html::img($item->after_img, ['width' => 150]); ?>
   <br>
   <hr>
   <br>
    <? endforeach; ?>
</div>
