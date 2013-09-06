'use strict';

/* http://docs.angularjs.org/guide/dev_guide.e2e-testing */

describe('quizzrApp', function() {

  describe('home', function() {

    beforeEach(function() {
      browser().navigateTo('#/');
    });


    it('should render two quizzes', function() {
      expect(repeater('.quizzes li').count()).toBe(2);
    });

  });

});