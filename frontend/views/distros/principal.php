<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Distribuciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php foreach ($distros as $distro): ?>
    <div class="container" style="margin-top: -40px">
        <div class="page-header">
            <h2 style="color: #993300 !important"><span class="glyphicon glyphicon-cloud"></span> <?= Html::encode("{$distro->Nombre}") ?> <span class="badge latest-version"><?= $distro->Latest?></span></h2>
        </div>
        <div class="col-lg-2 padding-0">
            <div class="image-distro"><?= Html::img("{$distro->Logo}");?> </div>
        </div>
        <div class="col-lg-10">
            <div>
                <p style="margin-top: 15px" class="distro-detail"><?= $distro->Descripcion?></p>
            </div>
            <?php foreach (explode(",",$distro->Dirigido) as $op): ?>
                <span class="badge success"><?php echo($op) ?></span>
            <?php endforeach; ?>
            <div style="margin-top: 15px; margin-bottom: 15px">
                <?= Html::a('Ir al sitio web de la distribución &raquo;', $distro->URL, ['target'=> 'blank','class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
<?php endforeach;?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>