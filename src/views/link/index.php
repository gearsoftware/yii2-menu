<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\grid\GridPageSize;
use gearsoftware\grid\GridView;
use gearsoftware\helpers\Html;
use gearsoftware\helpers\FA;
use gearsoftware\models\Menu;
use gearsoftware\models\MenuLink;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel gearsoftware\menu\models\search\SearchMenuLink */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('core/menu', 'Menu Links');
$this->params['breadcrumbs'][] = ['label' => Yii::t('core/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="menu-link-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>
            <?= Html::a(Yii::t('core', 'Add New'), ['/menu/link/create'], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12 text-right">
                    <?= GridPageSize::widget(['pjaxId' => 'menu-link-grid-pjax']) ?>
                </div>
            </div>

            <?php Pjax::begin(['id' => 'menu-link-grid-pjax']) ?>

            <?=
            GridView::widget([
                'id' => 'menu-link-grid',
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'bulkActionOptions' => [
                    'gridId' => 'menu-link-grid',
                    'actions' => [Url::to(['bulk-delete']) => Yii::t('core', 'Delete')]
                ],
                'columns' => [
                    ['class' => 'gearsoftware\grid\CheckboxColumn', 'options' => ['style' => 'width:10px']],
                    [
                        'attribute' => 'image',
                        'value' => function (MenuLink $model) {
                            return FA::icon($model->image)->fixedWidth();
                        },
                        'format' => 'raw',
                        'contentOptions' => [
                            'style' => 'width:20px; text-align:center;'
                        ]
                    ],
                    [
                        'class' => 'gearsoftware\grid\columns\TitleActionColumn',
                        'controller' => '/menu/link',
                        'attribute' => 'id',
                        'title' => function (MenuLink $model) {
                            return Html::a($model->label,
                                ['/menu/link/update', 'id' => $model->id], ['data-pjax' => 0]);
                        },
                        'format' => 'raw',
                        'buttonsTemplate' => '{update} {delete}',
                        'options' => ['style' => 'width:220px']
                    ],
                    [
                        'attribute' => 'menu_id',
                        'filter' => ArrayHelper::merge(['' => Yii::t('core', 'Not Selected')], Menu::getMenus()),
                        'value' => function (MenuLink $model) {
                            return ($model->menu instanceof Menu) ? $model->menu->title : Yii::t('yii', '(not set)');
                        },
                        'format' => 'raw',
                    ],
                    'link',


                    'parent_id',
                    'order',
                ],
            ]);
            ?>

            <?php Pjax::end() ?>
        </div>
    </div>
</div>


