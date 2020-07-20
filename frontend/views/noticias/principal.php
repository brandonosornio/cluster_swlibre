<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php foreach ($news as $new): ?>
<div class="container" style="margin-top: -40px">
    <div class="page-header">
        <h2 style="color: #993300 !important"><span class="glyphicon glyphicon-list-alt"></span> <?= Html::encode("{$new->Titulo}") ?></h2>
    </div>
    <div style="text-align:center" class="image-noticia"><?= Html::img("{$new->Foto}");?> </div>
    <div>
        <p style="margin-top: 15px" class="new-detail-list"><?= $new->Cuerpo?></p>
    </div>
    <div style="margin-top: 15px; margin-bottom: 15px;text-align:center">
    <?= Html::a('Ver más de esta noticia&raquo;', ['noticias/single', 'id' => $new->ID], ['target'=> 'blank','class' => 'btn btn-default']) ?>
    </div>
</div>
<?php endforeach;?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>