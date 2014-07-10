
App.Router.map(function() {
	this.resource("categories", {path: '/'}, function(){
		this.route("show", {path: '/:category_id'});
	});
});

App.CategoriesRoute = Ember.Route.extend({
	model: function() {
		return this.store.find('category');
	},
});

App.CategoriesShowRoute = Ember.Route.extend({
	queryParams: {
		query: {
			refreshModel: true,
		},
	},

	model: function(params) {
		return Ember.RSVP.hash({ 
 			category: this.store.find('category', params.category_id),
			products: this.store.findQuery('product', params),
		});
	},
	setupController: function(controller, model){
    controller.set("model", model);
  },
});

