<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tutoriales */

$this->title = 'Crear tutorial';
$this->params['breadcrumbs'][] = ['label' => 'Tutoriales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutoriales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
