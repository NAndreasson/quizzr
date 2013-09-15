'use strict';

/* jasmine specs for controllers go here */
describe('Quizzr controllers', function() {

  beforeEach(function(){
    this.addMatchers({
      toEqualData: function(expected) {
        return angular.equals(this.actual, expected);
      }
    });
  });

  beforeEach(module('quizzrApp'));
  beforeEach(module('quizzrServices'));

  describe('HomeCtrl', function(){
    var scope, ctrl, $httpBackend;

    beforeEach(inject(function(_$httpBackend_, $rootScope, $controller) {
      $httpBackend = _$httpBackend_;
      $httpBackend.expectGET('quizzes/quizzes.json').
          respond([{name: 'Nexus S'}, {name: 'Motorola DROID'}]);

      scope = $rootScope.$new();
      ctrl = $controller('HomeCtrl', {$scope: scope});
    }));


    it('should create "phones" model with 2 phones fetched from xhr', function() {
      expect(scope.quizzes).toEqual([]);
      $httpBackend.flush();

      expect(scope.quizzes).toEqualData(
          [{name: 'Nexus S'}, {name: 'Motorola DROID'}]);
    });
  });

});