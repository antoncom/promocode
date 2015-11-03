Ext.onReady(function() {
	promoCode.config.connector_url = OfficeConfig.actionUrl;

	var grid = new promoCode.panel.Home();
	grid.render('office-promocode-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});