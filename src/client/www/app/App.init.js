var appName = 'AppOrcamento';
(function() {
    'use strict';

    angular
        .module(appName, ['ngSanitize','ui.bootstrap'])
        .constant('URL_API_CONST', {
            urlOauth: 'localhost:8080/laravel/public/token',
            urlApi: 'http://localhost:8080/laravel/public/',
            apiVersao: ''
        });
})();