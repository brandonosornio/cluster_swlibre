<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Distros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'URL')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Dirigido')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'Latest')->textInput(['maxlength' => true]) ?>

    <?php if ($model->Logo) : ?>
        <?php echo ('<strong>Ya existe una foto para esta distro.</strong>');?>
    <?php else : ?>
        <?= $form->field($model, 'Logo')->fileInput() ?>
    <?php endif;?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
