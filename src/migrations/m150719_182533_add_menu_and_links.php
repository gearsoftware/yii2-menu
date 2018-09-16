<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\db\Migration;

class m150719_182533_add_menu_and_links extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link}}', ['id' => 'menu', 'menu_id' => 'admin-menu', 'link' => '/menu/default/index', 'image' => 'demo-psi-tactic', 'created_by' => 1, 'order' => 10]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'menu', 'label' => 'Menus', 'language' => 'en-US']);
    }

    public function down()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'menu']);
    }
}