angular.module('formExample', []) // Démarre le module Angular
            .controller('FormController', ['$scope', function($scope) {
                $scope.userType = {name: 'Name', email:'email@mail.com'}; // Insère des variables prédéfinies pour <input ... value="">
            }]);