<?php

/**
 * Remove an Items
 */
class promoCodeItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'promoCodeItem';
	public $classKey = 'promoCodeItem';
	public $languageTopics = array('promocode');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('promocode_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var promoCodeItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('promocode_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'promoCodeItemRemoveProcessor';