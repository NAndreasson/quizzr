'use strict';

angular.module('quizzrApp', [])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/home.html',
        controller: 'HomeCtrl'
      })
      .when('/newquiz', {
        templateUrl: 'views/newquiz.html',
        controller: 'NewQuizCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
