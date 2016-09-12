(function(){
    'use strict';

    angular
        .module(appName)
        .service('ClientService',ClientService);

    function ClientService() {
        var service = {};

        var urlApiComVersao = URL_API_CONST.urlApi + URL_API_CONST.apiVersao;
    }
})();