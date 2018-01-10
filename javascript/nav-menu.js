(function() {
    'use strict';

    angular.module('navBarDemoBasicUsage', ['ngMaterial'])
        .controller('MenuDemo', AppCtrl);

    function AppCtrl($scope) {
        $scope.currentNavItem = 'page1';

        $scope.goto = function(page) {
            console.log("Goto " + page);
        }
    }
})();