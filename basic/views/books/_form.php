<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nazev')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rok_vydani')->textInput() ?>

    <?= $form->field($model, 'zanr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
