<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m170731_061403_i18n_es_menu extends yii\db\Migration
{
	public function up()
	{
		$this->insert('{{%menu_link_lang}}', ['link_id' => 'menu', 'label' => 'Menús', 'language' => 'es-ES']);
	}
}
