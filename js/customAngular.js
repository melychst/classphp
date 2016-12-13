var app = angular.module("app",[]);
	
	app.controller("myCtrl", function ($scope) {
		$scope.var = "Hello world";
	})

	app.directive("sayHello", function () {
		return {
			link: function (scope, element, attr) {
				return element.text("Footer for this site from angular");
			}
		}
	})
