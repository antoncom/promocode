<?php

/**
 * Class promoCodeMainController
 */
abstract class promoCodeMainController extends modExtraManagerController {
	/** @var promoCode $promoCode */
	public $promoCode;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('promocode_core_path', null, $this->modx->getOption('core_path') . 'components/promocode/');
		require_once $corePath . 'model/promocode/promocode.class.php';

		$this->promoCode = new promoCode($this->modx);
		//$this->addCss($this->promoCode->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/promocode.js');
		$this->addHtml('
		<script type="text/javascript">
			promoCode.config = ' . $this->modx->toJSON($this->promoCode->config) . ';
			promoCode.config.connector_url = "' . $this->promoCode->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('promocode:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends promoCodeMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}