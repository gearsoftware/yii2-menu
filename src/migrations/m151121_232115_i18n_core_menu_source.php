<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\SourceMessagesMigration;

class m151121_232115_i18n_core_menu_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'core/menu';
    }

    public function getMessages()
    {
        return [
            'Menu' => 1,
            'Menus' => 1,
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 1,
            'Parent Link' => 1,
            'Always Visible' => 1,
            'No Parent' => 1,
            'Create Menu Link' => 1,
            'Update Menu Link' => 1,
            'Menu Links' => 1,
            'Add New Menu' => 1,
            'Add New Link' => 1,
            'An error occurred during saving menu!' => 1,
            'The changes have been saved.' => 1,
            'Please, select menu to view menu links...' => 1,
            'Selected menu doesn\'t contain any link. Click "Add New Link" to create a link for this menu.' => 1,
        ];
    }
}