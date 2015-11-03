<?php

/**
 * The home manager controller for promoCode.
 *
 */
class promoCodeHomeManagerController extends promoCodeMainController {
	/* @var promoCode $promoCode */
	public $promoCode;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('promocode');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->promoCode->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->promoCode->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->promoCode->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "promocode-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->promoCode->config['templatesPath'] . 'home.tpl';
	}
}