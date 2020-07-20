<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Distros */

$this->title = 'Crear Distro';
$this->params['breadcrumbs'][] = ['label' => 'Distros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
