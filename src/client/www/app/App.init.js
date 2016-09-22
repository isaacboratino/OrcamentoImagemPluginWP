var appName = 'AppOrcamento';
(function (){
    'use strict';

    angular
        .module(appName,['ui.bootstrap'])
        .constant('URL_API_CONST',
            {
                urlOauth: 'localhost:5000/token',
                urlApi: 'localhost:5000/',
                apiVersao: ''
            });
})();