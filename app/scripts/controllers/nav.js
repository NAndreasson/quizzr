'use strict';

angular.module('quizzrApp')
  .controller('NavCtrl', function ($scope, $location) {
    $scope.isActive = function (viewLocation) {
        return viewLocation === $location.path();
    };
  });
