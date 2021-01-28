<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\HomeAsset;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>

<!-- head -->
<?php
    $this->beginContent('@app/views/layouts/head.php');
    $this->endContent();
?>

<?php echo $this->beginBody() ?>

<!-- header -->
<?php
    $this->beginContent('@app/views/layouts/header.php');
    $this->endContent();
?>

<?php echo $content ?>

<!-- Footer -->
<?php
    $this->beginContent('@app/views/layouts/footer.php');
    $this->endContent();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
