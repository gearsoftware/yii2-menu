<?php

/**
 * @package   Yii2-Menu
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\TranslatedMessagesMigration;

class m170731_055957_i18n_es_core_menu extends TranslatedMessagesMigration
{
	public function getLanguage()
	{
		return 'es-ES';
	}

	public function getCategory()
	{
		return 'core/menu';
	}

	public function getTranslations()
	{
		return [
			'Menu' => 'Menú',
			'Menus' => 'Menús',
			'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 'El ID del enlace sólo puede contener caracteres alfanuméricos en minúsculas, guion bajo y guiones.',
			'Parent Link' => 'Enlace padre',
			'Always Visible' => 'Siempre visible',
			'No Parent' => 'Sin padre',
			'Create Menu Link' => 'Crear enlace',
			'Update Menu Link' => 'Actualizaar enlace',
			'Menu Links' => 'Enlaces',
			'Add New Menu' => 'Añadir nuevo menu',
			'Add New Link' => 'Añadir nuevo enlace',
			'An error occurred during saving menu!' => '¡Se ha producido un error al intentar guardar el menú!',
			'The changes have been saved.' => 'Los cambios han sido guardados.',
			'Please, select menu to view menu links...' => 'Por favor, seleccione el menú para ver los enlaces del menú ...',
			'Selected menu doesn\'t contain any link. Click "Add New Link" to create a link for this menu.' => 'El menú seleccionado no contiene ningún enlace. Haga clic en "Añadir nuevo enlace" para crear un enlace para este menú.',
		];
	}
}
