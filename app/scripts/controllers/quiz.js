'use strict';

angular.module('quizzrApp')
  .controller('QuizCtrl', function ($scope, $routeParams, Quiz) {
    $scope.quiz = Quiz.get({ quizId: $routeParams.quizId }, function(quiz) {
    });
  });