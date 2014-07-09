
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
	model: function(params) {
		return this.store.find('category', params.category_id)
	},
	setupController: function(controller, model){
    controller.set("model", model);
  },
});

