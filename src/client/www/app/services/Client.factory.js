(function(){
    'use strict';

    angular
        .module(appName)
        .service('ClientService',ClientService);

    function ClientService($http, URL_API_CONST) {
        var service = {};

        var urlApiComVersao = URL_API_CONST.urlApi + URL_API_CONST.apiVersao;

        service.GetOpcoesOrcamento = GetOpcoesOrcamento;

        return service;

        function GetOpcoesOrcamento(HandleSuccess)
        {
            return $http.get(urlApiComVersao + 'users')
                .then(HandleSuccess,
                      function(e) {
                          throw e;
                      });
        }   
    }
})();