
var home_section = angular.module('home_module',[]);

home_section.controller('tot_hits_cont',['$scope','$http',function($scope, $http){

    $http.get('cw-BLL/get_all.php?action_type=HITS')
        .success(function(response){
            $scope.total_hits_get = response;
            //alert($scope.total_hits_get);
        });

}]);