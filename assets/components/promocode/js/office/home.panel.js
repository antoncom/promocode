promoCode.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'promocode-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('promocode_items'),
				layout: 'anchor',
				items: [{
					html: _('promocode_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'promocode-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	promoCode.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(promoCode.panel.Home, MODx.Panel);
Ext.reg('promocode-panel-home', promoCode.panel.Home);
