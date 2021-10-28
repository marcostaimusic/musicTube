<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="video-form ">

    <div class="d-flex flex-column justify-content-center align-items-center">

        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
        <br>
        <p class="m-0">Drag and drop a file you want to upload</p>
        <p class='text-muted'>Your video will be private until you publish it</p>

        <?php \yii\bootstrap4\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]) ?>

        <button class="btn btn-primary btn-file">
            Select file
            <input type="file" id="videoFile" name="video" />
        </button>

        <?php \yii\bootstrap4\ActiveForm::end() ?>
    </div>

</div>