<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_reader')->textInput() ?>

    <?= $form->field($model, 'Id_books')->textInput() ?>

    <?= $form->field($model, 'Datum_pujceni')->textInput() ?>

    <?= $form->field($model, 'Datum_vraceni')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
