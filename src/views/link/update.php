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
use gearsoftware\menu\models\search\SearchMenuLink;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model gearsoftware\models\MenuLink */

$formName = StringHelper::basename(SearchMenuLink::className());

$this->title = Yii::t('core/menu', 'Update Menu Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('core/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu->title, 'url' => ['/menu/default/index', "{$formName}[menu_id]" => $model->menu_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-link-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', compact('model')) ?>
</div>
