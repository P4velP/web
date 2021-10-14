<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Readers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="readers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Jmeno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prijmeni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rok_narozeni')->textInput() ?>

    <?= $form->field($model, 'Ulice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mesto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
