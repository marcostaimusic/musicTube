<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<header class="p-5">
    <?php echo $this->render(view: '_header') ?>
</header>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap h-100 d-flex flex-column">

        <main class="d-flex">
            <?php echo $this->render(view: '_sidebar') ?>
            <div class="content-wrapper p-3">

                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
