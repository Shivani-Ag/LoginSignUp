(function(angular) {
  'use strict';
var myFirstApp = angular.module('myFirstApp', []);

myFirstApp.config(['$routeProvider',function($routeProvider) 
{
    
    $routeProvider.when('/log', 
	{
        	templateUrl: 'templates/profile.html',
        	controller: 'profileController'
    	});
     $routeProvider.when('/signup', 
	{
        	templateUrl: 'templates/login.html',
        	controller: 'loginController'
    	});
     $routeProvider.when('/reset', 
	{
        	templateUrl: 'templates/reset.html',
        	controller: 'resetController'
    	});
    $routeProvider.when('/login', 
	{
        	templateUrl: 'templates/login.html',
        	controller: 'loginController'
        });
     $routeProvider.when('/register', 
	{
        	templateUrl: 'templates/register.html',
        	controller: 'registerController'
        });
	$routeProvider.when('/home', 
	{
        	templateUrl: 'templates/home.html',
        	controller: 'homeController'
        });
    $routeProvider.when('/forgot', 
	{
        	templateUrl: 'templates/forgot.html',
        	controller: 'forgotController'
        });
     $routeProvider.otherwise({
        redirectTo: '/login'
      });
    
}]);



myFirstApp.controller('profileController', function($scope) {
     
    $scope.message = 'Profile';
    $scope.name =  'James';
    $scope.email =  'james@gmail.com';
    $scope.age = '24';
    $scope.password = 'abc123';
     
});
 
myFirstApp.controller('loginController', function($scope) {
 
    $scope.message = 'login';
 
});
myFirstApp.controller('registerController', function($scope) {
 
    $scope.message = 'register';
});
myFirstApp.controller('forgotController', function($scope) {
 
    $scope.message = 'forgot';
 
});
myFirstApp.controller('homeController', function($scope) {
 
    $scope.message = 'home';
 
});
myFirstApp.controller('resetController', function($scope) {
 
    $scope.message = 'home';
 
});

myFirstApp.controller('myCtrl', ['$scope', function($scope) {
    
  }]);
})(window.angular);