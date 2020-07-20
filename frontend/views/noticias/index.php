<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NoticiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-index">

    <h1><?= Html::encode('Administración de Noticias') ?></h1>

    <p>
        <?= Html::a('Crear Noticia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showOnEmpty'=>true,
        'columns' => [
            [
            'attribute' => 'Titulo',
            'headerOptions' => ['text-align' => 'center'],
            'contentOptions' =>['style'=>'width:150px;'],
            ],
            [
            'attribute' => 'Fecha',
            'format' => ['date', 'php:Y-m-d'],
            'contentOptions' =>['style'=>'width:110px;'],
            ],

            [
            'attribute' => 'Cuerpo',
            'contentOptions' =>['style'=>'width:53%;'],
            ],
            [
            'attribute' => 'Foto',
            'format' => 'image',
            'contentOptions' =>['class'=>'image-crud'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
