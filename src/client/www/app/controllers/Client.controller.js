(function() {
    'use strict';

    angular
        .module(appName)
        .controller('ClientController', ClientController)
    
    function ClientController(ClientService) {
        var viewModel = this;

        viewModel.teste = 'blabla';
        viewModel.Opcoes = {};

        (function initController()
        {
            //ClientService.GetOpcoesOrcamento(GetOpcoesOrcamento_HandleSuccess);
        })();

        function GetOpcoesOrcamento_HandleSuccess(response)
        {
            if (response.data.length > 0)
                viewModel.Opcoes = response.data;
            else
                viewModel.Opcoes = [{ idEmpresa: 0, nomeEmpresa: 'Nenhuma Opção Cadastrada...' }];
        }
    }
})();