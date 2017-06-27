myAppTeste.
factory('courseService', ['$http', function($http) {
    
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
			}).then((response) => {
                resolve(response.data);
            },(error) => reject(error));
        });
    }


   return {
    get: (id) => requestGet(id),
    getAll: () => requestGet(),
    getAllSearch: (text) => requestGet(null, text),
   };
 }]);