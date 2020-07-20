<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);

$this->title = 'Mi Perfil';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row"> 
    <div class="col-md-6 col-md-offset-3" style="background:rgba(226,226,226,1);text-align:center;border-radius:20px">
        <?=
            Html::img($model->identity->avatar_image, ['style' => 'width: 250px; border-radius:50%'])
        ?>
        <br/>
        <?=
            Html::label($model->identity->name, ['class' => 'profile'])
        ?>
    </div>
</div>
