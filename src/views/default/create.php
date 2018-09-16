<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model gearsoftware\menu\models\Menu */

$this->title = Yii::t('core', 'Create {item}', ['item' => Yii::t('core/menu', 'Menu')]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('core/menu', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-create">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>