'use strict';

angular.module('quizzrApp')
  .controller('HomeCtrl', function ($scope, Quiz) {
    $scope.quizzes = Quiz.query();
  });
