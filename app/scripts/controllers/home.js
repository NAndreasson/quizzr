'use strict';

angular.module('quizzrApp')
  .controller('HomeCtrl', function ($scope) {
    $scope.quizzes = [
      { name: 'Heroes' },
      { name: 'Myths' }
    ];
  });
