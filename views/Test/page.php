<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 22/03/2019
 * Time: 20:01
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($form_model, 'name')->textInput()->label('Имя события'); ?>
<?= $form->field($form_model, 'email')->textInput()->label('Эл адрес участника'); ?>
<?= $form->field($form_model, 'begin')->textInput()->label('Дата начала'); ?>
<?= $form->field($form_model, 'end')->textInput()->label('Дата окончания'); ?>
<?= $form->field($form_model, 'notify')
    ->radioList([
        '1' => 'Оповестить о начале',
        '2' => 'Не оповещать',
    ])->label('Оповещение');; ?>
<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>