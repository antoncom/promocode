var promoCode = function (config) {
	config = config || {};
	promoCode.superclass.constructor.call(this, config);
};
Ext.extend(promoCode, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('promocode', promoCode);

promoCode = new promoCode();