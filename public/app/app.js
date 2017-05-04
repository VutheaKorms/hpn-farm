var bookWishlistApp = angular.module('app', [
    'ngRoute',
    'bookWishlistAppControllers'
]);

bookWishlistApp.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
    $locationProvider.hashPrefix('');
    $routeProvider.
    when('/login', {
        templateUrl: 'app/controllers/account/login.html',
        controller: 'LoginController'
    }).
    when('/signup', {
        templateUrl: 'app/controllers/account/signup.html',
        controller: 'SignupController'
    }).
    when('/', {
        templateUrl: 'app/controllers/dashboard/dashboard.html',
        controller: 'MainController'
    });


}]);