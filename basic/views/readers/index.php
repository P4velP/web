<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReadersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Readers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="readers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Readers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Jmeno',
            'Prijmeni',
            'Rok_narozeni',
            'Ulice',
            //'Mesto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
