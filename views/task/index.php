<?php

use app\models\Task;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    


    <?= GridView::widget([
        'pager' => [
          'class' => 'justinvoelker\separatedpager\LinkPager',
        ],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name:text:Nome',
//            'due_date:date',
            [
                'attribute' => 'due_date',
                'format'=> ['date', 'dd/M/Y'],

            ],
            [
                'attribute' => 'created_at',
                'format'=> ['datetime', 'dd/M/Y HH:mm:ss'],

            ],
            [
                'attribute' => 'updated_at',
                'format'=> ['datetime', 'dd/M/Y HH:mm:ss'],
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Task $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
