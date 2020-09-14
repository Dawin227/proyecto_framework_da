<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prove')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precio_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autorizado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IVA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
