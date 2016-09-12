var appName = 'AppOrcamento';
(function (){
    'use strict';

    angular
        .module(appName,[])
        .constant('URL_API_CONST',
            {
                urlOauth: 'http://localhost:57594/token',
                urlApi: 'http://localhost:57594/',
                apiVersao: 'v1/'
            });
})();