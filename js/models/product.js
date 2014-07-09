App.Product = DS.Model.extend({
	name: 		DS.attr("string"),
	price: 		DS.attr(),
	text: 		DS.attr("string"),
	category: DS.belongsTo("category"),
	
});
