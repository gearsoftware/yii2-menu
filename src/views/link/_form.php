<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\helpers\Html;
use gearsoftware\helpers\FA;
use gearsoftware\models\Menu;
use gearsoftware\widgets\ActiveForm;
use gearsoftware\widgets\LanguagePills;

/* @var $this yii\web\View */
/* @var $model gearsoftware\menu\models\MenuLink */
/* @var $form gearsoftware\widgets\ActiveForm */
?>

<div class="menu-link-form">

    <?php
    $form = ActiveForm::begin([
        'id' => 'menu-link-form',
        'validateOnBlur' => false,
    ])
    ?>

    <div class="row">
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-body">

                    <?php if ($model->isMultilingual()): ?>
                        <?= LanguagePills::widget() ?>
                    <?php endif; ?>

                    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

                    <?php if ($model->isNewRecord): ?>
                        <?= $form->field($model, 'id')->textInput() ?>
                    <?php endif; ?>

                    <?php //$form->field($model, 'parent_id')->dropDownList($model->getSiblings(), ['class' => 'clearfix']) ?>

                    

                    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

                    <?php // $form->field($model, 'order')->textInput() ?>

                </div>
            </div>
        </div>

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="record-info">
                        <?php if (!$model->isNewRecord): ?>
                            <div class="form-group clearfix">
                                <label class="control-label" style="float: left; padding-right: 5px;">
                                    <?= $model->attributeLabels()['id'] ?> :
                                </label>
                                <span><?= $model->id ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <?= $form->field($model, 'alwaysVisible')->checkbox() ?>

                        <?php if ($model->isNewRecord): ?>
                            <?= $form->field($model, 'menu_id')->dropDownList(Menu::getMenus(), ['class' => 'clearfix form-control']) ?>
                        <?php endif; ?>
                        
                        <?= $form->field($model, 'image')->dropDownList(FA::getIconsList(), [
                            'class' => 'clearfix form-control fa-font-family',
                            'encode' => false,
                        ]) ?>

                        <div class="form-group">
                            <?php if ($model->isNewRecord): ?>
                                <?= Html::submitButton(Yii::t('core', 'Create'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('core', 'Cancel'), ['/menu/link/index'], ['class' => 'btn btn-default']) ?>
                            <?php else: ?>
                                <?= Html::submitButton(Yii::t('core', 'Save'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('core', 'Delete'),
                                    ['/menu/link/delete', 'id' => $model->id], [
                                        'class' => 'btn btn-default',
                                        'data' => [
                                            'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS

    $('#menulink-image-styler ul li').each(function(){
        var glyphicon = $(this).text();
        $(this).addClass('glyphicon').addClass('glyphicon-'+glyphicon).html('');
    });
    $('#menulink-image-styler ul li:first').html('No Icon');

    setTimeout(function(){
       
    },1000);
    

JS;
$this->registerJs($js);
?>