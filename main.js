window.onload = function () {
	var CommonView = Barba.BaseView.extend({
		namespace: 'common',
		onEnterCompleted: function () {
			// The Transition has just finished.
		},
	});
	CommonView.init();

	Barba.Pjax.start();
};
