App.CategoriesShowController = Ember.ObjectController.extend({
	actions: {
		search: function() {
			var products = this.store.find('product', {query: 'pear'});
			console.log(this.get("products"));
			this.set("content.products", products);
		},
	}	
});
