<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
	'NAME' => Loc::getMessage('NOTIFICATION_LIST_COMPONENT_NAME'),
	'CACHE_PATH' => 'Y',
	'SORT' => 10,
	'PATH' => [
		'ID' => 'mycompany.custom',
	],
];
