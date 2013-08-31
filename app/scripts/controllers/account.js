'use strict';

angular.module('quizzrApp')
  .controller('AccountCtrl', function ($scope) {
    $scope.quizzes = [
      { name: 'Heroes' },
      { name: 'Myths' }
    ];
  });
