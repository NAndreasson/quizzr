'use strict';

/* Services */

angular.module('quizzrServices', ['ngResource']).
    factory('Quiz', function($resource){
  return $resource('quizzes/:quizId.json', {}, {
    query: {method:'GET', params: { quizId: 'quizzes' }, isArray:true}
  });
});