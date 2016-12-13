var app = angular.module("app",[]);
	
	app.controller("myCtrl", function ($scope) {
		$scope.var = "Hello world";
	});

	app.directive("sayHello", function () {
		return {
			link: function (scope, element, attr) {
				return element.text("Footer for this site from angular");
			}
		}
	});

	app.controller("testAngularCtrl", function ($scope) {
		$scope.name = "Stepan";
	})

	app.directive("testAngular", function () {
		
		return {
			templateUrl:"../templates/template.php",
			restrict:"E",
			link: function (scope, element, attr) {
				return console.log("Hello world");
			}
		}
	});
