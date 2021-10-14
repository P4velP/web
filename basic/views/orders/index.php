<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel2 app\models\ReadersSearch */
/* @var $searchModel3 app\models\BooksSearch */

$this->title = 'Borrowed';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Borrowed', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'Jmeno',
            'Id_reader',
            'Id_books',
            'Datum_pujceni',
            'Datum_vraceni',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
