<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PageAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;

PageAsset::register($this);
?>

<?php $this->beginPage() ?>

<!-- head -->
<?php
    $this->beginContent('@app/views/layouts/head.php');
    $this->endContent();
?>

<?php $this->beginBody() ?>

<div class="wrap">

<!-- header -->
    <?php
        $this->beginContent('@app/views/layouts/header.php');
        $this->endContent();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<!-- Footer -->
<?php
$this->beginContent('@app/views/layouts/footer.php');
$this->endContent();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
