<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\menu\controllers;

use gearsoftware\controllers\BaseController;
use yii\helpers\StringHelper;

/**
 * MenuLinkController implements the CRUD actions for Post model.
 */
class LinkController extends BaseController
{
    public $modelClass = 'gearsoftware\models\MenuLink';
    public $modelSearchClass = 'gearsoftware\menu\models\search\SearchMenuLink';
    public $enableOnlyActions = ['delete', 'update', 'create'];

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'delete':
                $searchClass = $this->modelSearchClass;
                $formName = StringHelper::basename($searchClass::className());
                return ['/menu/default/index', "{$formName}[menu_id]" => $model->menu_id];
                break;
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}