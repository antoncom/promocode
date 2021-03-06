<?php

/**
 * Create an Item
 */
class promoCodeItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'promoCodeItem';
	public $classKey = 'promoCodeItem';
	public $languageTopics = array('promocode');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('promocode_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('promocode_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'promoCodeItemCreateProcessor';