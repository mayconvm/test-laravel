const myAppTeste = angular.module('teste',[]);

myAppTeste.controller('TesteController', ['$scope', 'courseService', function($scope, courseService) {
    
    // layout

    $scope.showSearch = true;
    $scope.isDesktop = false;
    $scope.isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|webOS)/);

    if (!$scope.isMobile) {
        $scope.isDesktop = true;
    } else{
        $scope.showSearch = false;
    }


    // search

    $scope.listCourses = [];
    $scope.details = true;
    $scope.itemDetail = {};

    // pesquisa todos os cursos
    courseService.getAll()
    .then((data) => {
        $scope.$apply(() => {
            $scope.listCourses = data.result;
        });
    })
    .catch((error) => {
        alert(error);
    });

    $scope.viewDetails = function __viewDetails(item) {
        $scope.details = false;
        $scope.itemDetail = item;
    }
}]);


myAppTeste.controller('TesteSearchController', ['$scope', 'courseService', function($scope, courseService) {
    // pesquisa por palavras
    // $scope.$watch('textSearch', (oldValue, newValue) => {
    //     // aplicar debounce
    //     // searchTextDebounce(newValue);
    // });

    // function searchTextDebounce(data) {
    //     courseService.getAllSearch(data)
    //     .then((data) => {
    //         $scope.$root.listCourses = data.result;
    //     })
    //     .catch((error) => {
    //         alert(error);
    //     });
    // }
}]);