App.CategoriesShowController = Ember.ObjectController.extend({
	queryParams: ['query'],
	query: '',
	actions: {
		search: function() {
				this.transitionToRoute({queryParams: {query: this.get('query')}});
		},
	}	
});
