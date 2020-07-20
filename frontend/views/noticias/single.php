<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Noticias */

//$this->title = $model->Titulo;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->Titulo;
\yii\web\YiiAsset::register($this);
?>
<div class="container" style="margin-top: -40px">
    <div class="page-header">
        <h2 style="color: #993300 !important"><span class="glyphicon glyphicon-list-alt"></span> <?= Html::encode("{$model->Titulo}") ?></h2>
        <h5 style="color: #993300 !important"><span class="glyphicon glyphicon-user"></span> <?= Html::encode("{$model->autor->name}") ?> </h5>
        <h5 style="color: #993300 !important"><span class="glyphicon glyphicon-time"></span> <?= Yii::$app->formatter-> asDate(Html::encode("{$model->Fecha}"),'php:Y-m-d') ?> </h5>
    </div>
    <div class="image-noticia-single"><?= Html::img("{$model->Foto}");?> </div>
    <div>
        <p style="margin-top: 15px" class="new-detail"><?= $model->Cuerpo?></p>
    </div>
</div>
