<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '¡Únete a nuestra comunidad!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Completa los siguientes campos para iniciar y conocer el software libre:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Nombre:') ?>

                <?= $form->field($model, 'username')->hint('Un nombre de usuario cool con el que te identificarán.')->label('Nombre de usuario:') ?>

                <?= $form->field($model, 'email')->hint('Un email valido')->label('Correo eletrónico:') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'avatar_image')->fileInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Unirme', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
