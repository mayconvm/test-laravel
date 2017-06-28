myAppTeste.
factory('courseService', ['$http', function __serviceCourseService($http) {
    
    /**
     * Método para realizar a requisição dos cursos
     * @param  id {int} id do curso a ser pesquisado
     * @param  search {string} string para pesquisa
     * @return {array} Lista com todos os cursos disponíveis
     */
    function requestGet (id = null, search = null) {
      let url = '/course';

      if (id) {
        url += '/' + id;
      }

      if (search) {
        url += '/?text=' + search;
      }

      return new Promise((resolve, reject) => {
        return $http({
          method: 'GET',
          url: url
        })
        .then((response) => {
            resolve(response.data);
          },
          (error) => reject(error)
        );
      });
    }


    return {
      get: (id) => requestGet(id),
      getAll: () => requestGet(),
      getAllSearch: (text) => requestGet(null, text),
    };
 }]);