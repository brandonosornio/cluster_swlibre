<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DistrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Administración de Distribuciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distros-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Distro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Nombre',
            'Descripcion:ntext',
            'URL:ntext',
            'Dirigido:ntext',
            'Latest:ntext',
            
            [
                'attribute' => 'Logo',
                'format' => 'image',
                'contentOptions' =>['class'=>'image-crud'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
