<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Tutoriales';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php foreach ($tuts as $tut): ?>
    <div class="col-md-6">
       <div class="page-header">
           <h2 style="color: #ff6600 !important"><span class="glyphicon glyphicon-film"></span> <?= Html::encode("{$tut->Nombre}") ?></h2>
       </div>

       <div class="embed-responsive embed-responsive-4by3 tutorial-body">
           <iframe class="embed-responsive-item video-tuto" src="<?php echo $tut->URL;?>" allowfullscreen=""></iframe>
       </div>
        <p class="tutorial-description"><?php echo $tut->Descripcion;?></p>
   </div>
<?php endforeach;?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>