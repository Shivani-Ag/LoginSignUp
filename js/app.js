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
        	templateUrl: 'templates/profile.html',
        	controller: 'profileController'
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


myFirstApp.controller('loginController', function($scope,$rootScope) {
    
    $scope.message = 'login';
   
    $scope.submitFunction = function()
    {
        $rootScope.useremail = $scope.useremail;
        $rootScope.userpassword = $scope.userpassword;
    }
    
 
});
myFirstApp.controller('profileController', function($scope,$rootScope) {
     
    $scope.message = 'Profile';
    $scope.name =  $rootScope.usname;
    $scope.email =  $rootScope.usemail;
    console.log($scope.email);
    $scope.age = $rootScope.usage;
    $scope.password =  $rootScope.uspassword;
     
});
myFirstApp.controller('registerController', function($scope,$rootScope) {
 
    $scope.message = 'register';
   $scope.submitFunction1 = function()
   {
        $rootScope.usname =  $scope.usname;
        $rootScope.usemail =  $scope.usemail;
        $rootScope.usage = $scope.usage;
        $rootScope.uspassword =  $scope.uspassword;
   }
    
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

})(window.angular);