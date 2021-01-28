<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;


NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'fixed-top navbar-expand-lg navbar-dark bg-dark',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        /*['label' => 'Services', 'url' => ['/site/services']],*/
        [
            'label' => 'Services',
            'items' => [
                ['label' => 'Service 1', 'url' => '#'],
                '<div class="dropdown-divider"></div>',
                '<div class="dropdown-header">Service 2</div>',
                ['label' => 'Service 2A', 'url' => '#'],
                ['label' => 'Service 2B', 'url' => '#'],
            ],
        ],
        ['label' => 'Web Design', 'url' => ['/site/web-design']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        /*
        Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )
        */
    ],
]);
NavBar::end();
?>