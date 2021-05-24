<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи';
$this->params['breadcrumbs'][] = $this->title;

$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click();  }, 5000);
});
JS;
$this->registerJs($script);

?>
<div class="request-index">

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php \yii\widgets\Pjax::begin(); ?>
    <?= Html::a("Обновить", ['front/index'], ['class' => 'btn btn-lg btn-primary', 'id'=> "refreshButton"]) ?>
    <h1>Количество рещенных заявок: <?= $count?></h1>
    <?php \yii\widgets\Pjax::end(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

[
                'attribute' => 'category_id',
                'value' => 'category.name',
                'filter' => \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Category::find()->all(), 'id', 'name'),
            ],
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
            'why_not:text',
            //'category_id',
            //'created_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
