<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\forum\models\Forum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="forum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kullanici_Adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sifre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sorular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cevaplar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
