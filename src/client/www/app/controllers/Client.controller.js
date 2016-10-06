(function() {
    'use strict';

    angular
        .module(appName)
        .controller('ClientController', ClientController)

    function ClientController($sce, ClientService) {
        var viewModel = this;

        viewModel.Opcoes = {};
        viewModel.OpcaoSelecionada = [];

        viewModel.SelecionarCharuto = SelecionarCharuto;
        viewModel.GetHTML = GetHTML;

        (function initController() {
            ClientService.GetOpcoesOrcamento(GetOpcoesOrcamento_HandleSuccess);
        })();

        function GetOpcoesOrcamento_HandleSuccess(response) {
            if (response.data.length > 0) {
                viewModel.Opcoes = response.data;

                setTimeout(function() {
                    var mcThumbnailSliderCharuto = new ThumbnailSlider(thumbnailSliderCharutoOptions);
                    var mcThumbnailSliderCaixa = new ThumbnailSlider(thumbnailSliderCaixaOptions);
                    var mcThumbnailSliderTipoRotulo = new ThumbnailSlider(thumbnailSliderTipoRotuloOptions);
                }, 1000);

            } else
                viewModel.Opcoes = {};
        }

        function SelecionarCharuto(indiceArray) {
            viewModel.OpcaoSelecionada = viewModel.Opcoes[indiceArray];
        }

        function GetHTML(content) {
            return $sce.trustAsHtml(content);
        }
    }
})();