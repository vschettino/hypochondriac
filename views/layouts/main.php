<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin(
        [
            'brandLabel' => Html::img('logo.png'),
            'brandUrl' => Yii::$app->homeUrl,
            'brandOptions' => ['style' => 'padding-top: 5px !important'],
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]
    );
    echo Nav::widget(
        [
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Sobre', 'url' => ['/site/about']],
                [
                    'label' => 'Cadastros',
                    'url' => ['/site/about'],
                    'items' =>
                        [
                            [
                                'label' => 'Clínica',
                                'url' => ['/clinica/create']
                            ],
                            [
                                'label' => 'Médico',
                                'url' => ['/medico/create']
                            ]
                        ],
                    ['label' => 'Contato', 'url' => ['/site/contact']]
                ]
            ]
        ]
    );
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Vinicius Schettino | Aloysio Rabello | Lucas Margato | João Ignácio</p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
