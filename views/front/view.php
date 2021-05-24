<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Request */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'status',
            'name',
            [
                    'attribute'=> 'before_img',
                    'value' => function($model){

                    return Html::img($model->before_img, ['width' => 150]);
                    },
                    'format' => 'html'
],
            [
                'attribute'=> 'after_img',
                'value' => function($model){

                    return Html::img($model->after_img, ['width' => 150]);
                },
                'format' => 'html'
            ],
            'why_not:ntext',
            'category_id',
            'created_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
