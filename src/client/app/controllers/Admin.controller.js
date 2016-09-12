(function() {
    'use strict';

    angular
        .module(appName)
        .controller('OrcamentoPluginController', OrcamentoPluginController)
    
    function OrcamentoPluginController() {
        var viewModel = this;

        viewModel.teste = 'blabla';
    }
})();