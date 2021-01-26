<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1 class="my-3"><?= Html::encode($this->title) ?></h1>

    <?php if(isset($message) && !empty($message)): ?>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <?php endif; ?>

    <p class="mt-5">
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
