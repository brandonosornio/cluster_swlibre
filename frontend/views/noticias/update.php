<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Noticias */

$this->title = 'Actualizando ' . $model->Titulo . '...';
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Titulo, 'url' => ['view', 'id' => $model->ID]];
//$this->params['breadcrumbs'][] = 'Actualizando...';
?>
<div class="noticias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
