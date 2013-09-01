'use strict';

angular.module('quizzrApp', [ 'quizzrServices' ])
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
      .when('/account', {
        templateUrl: 'views/account.html',
        controller: 'AccountCtrl'
      })
      .when('/quiz/:id', {
        templateUrl: 'views/quiz.html',
        controller: 'QuizCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
