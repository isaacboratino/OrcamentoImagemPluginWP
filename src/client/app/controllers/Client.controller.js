(function() {
    'use strict';

    angular
        .module(appName)
        .controller('ClientController', ClientController)
    
    function ClientController() {
        var viewModel = this;

        viewModel.teste = 'blabla';
    }
})();