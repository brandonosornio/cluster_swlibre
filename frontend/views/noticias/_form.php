<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Noticias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Autor_ID')->dropDownList($model->getUser(),['prompt' => 'Selecciona autor']) ?>
    
    <?= $form->field($model, 'Cuerpo')->textarea(['rows' => 6]) ?>

    <?php if ($model->Foto) : ?>
        <?php echo ('<strong>Ya existe una foto para esta noticia.</strong>');?>
    <?php else : ?>
        <?= $form->field($model, 'Foto')->fileInput() ?>
    <?php endif;?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
