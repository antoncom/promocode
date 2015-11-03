promoCode.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'promocode-panel-home', renderTo: 'promocode-panel-home-div'
		}]
	});
	promoCode.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(promoCode.page.Home, MODx.Component);
Ext.reg('promocode-page-home', promoCode.page.Home);