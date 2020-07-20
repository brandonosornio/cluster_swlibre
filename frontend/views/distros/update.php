<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Distros */

$this->title = 'Actulizando ' . $model->Nombre . '...';
$this->params['breadcrumbs'][] = ['label' => 'Distros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nombre, 'url' => ['view', 'id' => $model->ID]];
//$this->params['breadcrumbs'][] = 'Actualizando...';
?>
<div class="distros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
