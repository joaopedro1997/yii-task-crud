<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Task $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'due_date')->textInput([]) ?>

    <?= $form->field($model,'due_date')->widget(DatePicker::class,[
        'options' => ['class' => 'form-control', 'autoComplete' => 'off'],
            'dateFormat' => 'dd-MM-yyyy',
    ]) ?>


<!--    --><?php //= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group mt-1">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
