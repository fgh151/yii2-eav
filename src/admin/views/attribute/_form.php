<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mirocow\eav\models\EavAttribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eav-attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint(Yii::t('eav','The name of field')) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true])->hint(Yii::t('eav','The label of field')) ?>

    <?= $form->field($model, 'entityId')->dropDownList($model->listEntities, [])->hint('')->label(Yii::t('eav','Entity name')) ?>

    <?= $form->field($model, 'typeId')->dropDownList($model->listTypes, [])->hint(Yii::t('eav','The type of entity'))->label('Type') ?>

    <?= $form->field($model, 'defaultValue')->textInput(['maxlength' => true])->hint(Yii::t('eav','The default value of field')) ?>

    <?= $form->field($model, 'required')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('eav','Create') : Yii::t('eav','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
