<?php


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="site-index">

   <? foreach ($request as $item) : ?>
   <?= $item->name ?> -
   <?= \yii\helpers\Html::img($item->before_img, ['width' => 150]); ?>
   <br>
   <hr>
   <br>
    <? endforeach; ?>
</div>
