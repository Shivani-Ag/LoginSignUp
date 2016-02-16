
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
     $routeProvider.otherwise({
        redirectTo: '/home'
      });
    
}]);

myFirstApp.controller('ProfileCtrl', function($scope,$http) {
  
  
  $http.get('json/myProfile.json',{}).success(function(data){$scope.items = data;});
  
}); 

myFirstApp.controller('loginCtrl', function($scope,$http) {
  
  
  $http.get('json/login.json',{}).success(function(datas){
			$scope.itemss = datas;
		});
  
}); 

myFirstApp.controller('profileController', function($scope) {
     
    $scope.message = 'Profile';
     
});
 
myFirstApp.controller('loginController', function($scope) {
 
    $scope.message = 'login';
 
});
myFirstApp.controller('registerController', function($scope) {
 
    $scope.message = 'register';
 
});
myFirstApp.controller('homeController', function($scope) {
 
    $scope.message = 'home';
 
});
