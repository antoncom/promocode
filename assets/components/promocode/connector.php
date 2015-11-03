<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var promoCode $promoCode */
$promoCode = $modx->getService('promocode', 'promoCode', $modx->getOption('promocode_core_path', null, $modx->getOption('core_path') . 'components/promocode/') . 'model/promocode/');
$modx->lexicon->load('promocode:default');

// handle request
$corePath = $modx->getOption('promocode_core_path', null, $modx->getOption('core_path') . 'components/promocode/');
$path = $modx->getOption('processorsPath', $promoCode->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));