<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Task $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tens a certeza que queres apagar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:text',
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
        ],
    ]) ?>

</div>
