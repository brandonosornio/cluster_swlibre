<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Software Libre',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Acerca de', 'url' => ['/site/about']],
        ['label' => 'Contáctanos', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Inicia Sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Hola '.Yii::$app->user->identity->name , 'items' => [
            ['label' => 'Mi Perfil', 'url' => ['/site/account']],
            ['label' => '<li class="logout">'
            . Html::beginForm(['/site/logout'], 'post') . Html::submitButton(
                'Salir',
                ['class' => 'btn btn-link logout-button logout-fixed']
            )
            . Html::endForm()
            . '</li>']
        ]];
        if(Yii::$app->user->identity->role == 20) {
            $menuItems[] = ['label' => '<span class="glyphicon glyphicon-lock"></span> Admin','items' => [
                [
                    'label' => 'Noticias', 'url' => ['/noticias/index']
                ],
                [
                    'label' => 'Tutoriales', 'url' => ['/tutoriales/index']
                ],
                [
                    'label' => 'Distribuciones', 'url' => ['/distros/index']
                ]
            ]];
        }
       
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => false
    ]);
    NavBar::end();
    ?>
    <?php if (!Yii::$app->user->isGuest && Yii::$app->controller->id != 'chat'): ?>
        <div>
            <a href="../web/index.php?r=chat%2Findex" target="_blank"> <button type="button" class="btn btn btn-info chat-button"  data-toggle="tooltip" data-placement="left" title="Chat en vivo" id="comment"><i class="glyphicon glyphicon-comment" style="margin-top: 5px;"></i></button></a>
        </div>
    <?php endif;?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;TEST <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
