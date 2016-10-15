(function() {
    'use strict';

    angular
        .module(appName)
        .controller('ClientController', ClientController)

    function ClientController($sce, $filter, ClientService) {
        var viewModel = this;

        viewModel.Opcoes = {};
        viewModel.CharutoSelecionado = null;
        viewModel.CaixaSelecionada = null;
        viewModel.CaixaArteNormalSelecionada = null;
        viewModel.CaixaArtePanoSelecionada = null;
        viewModel.RotuloSelecionado = null;

        viewModel.SelecionarCharuto = SelecionarCharuto;
        viewModel.SelecionarCaixa = SelecionarCaixa;
        viewModel.SelecionarCaixaArteNormal = SelecionarCaixaArteNormal;
        viewModel.SelecionarCaixaArtePano = SelecionarCaixaArtePano;
        viewModel.SelecionarRotulo = SelecionarRotulo;
        viewModel.GetHTML = GetHTML;

        (function initController() {
            ClientService.GetOpcoesOrcamento(GetOpcoesOrcamento_HandleSuccess);
        })();

        function GetOpcoesOrcamento_HandleSuccess(response) {

            if (response.data.length > 0) {
                viewModel.Opcoes = response.data;

                setTimeout(function() {
                    new ThumbnailSlider(thumbnailSliderCharutoOptions);
                    new ThumbnailSlider(thumbnailSliderCaixaOptions);
                    new ThumbnailSlider(thumbnailSliderTipoRotuloOptions);
                    new ThumbnailSlider(thumbnailSliderArteCaixaNormalOptions);
                    new ThumbnailSlider(thumbnailSliderArteCaixaPanoOptions);
                }, 1000);

            } else
                viewModel.Opcoes = {};
        }

        function SelecionarCharuto(id, elemento) {
            SetElementActive(elemento);
            viewModel.CharutoSelecionado = $filter('filter')(viewModel.Opcoes, { id: id })[0];
        }

        function SelecionarCaixa(id, elemento) {
            SetElementActive(elemento);
            viewModel.CaixaSelecionada = $filter('filter')(viewModel.Opcoes, { id: id })[0];
        }

        function SelecionarCaixaArteNormal(id, elemento) {
            SetElementActive(elemento);
            viewModel.CaixaArteNormalSelecionada = $filter('filter')(viewModel.Opcoes, { id: id })[0];
        }

        function SelecionarCaixaArtePano(id, elemento) {
            SetElementActive(elemento);
            viewModel.CaixaArtePanoSelecionada = $filter('filter')(viewModel.Opcoes, { id: id })[0];
        }

        function SelecionarRotulo(id, elemento) {
            SetElementActive(elemento);
            viewModel.RotuloSelecionado = $filter('filter')(viewModel.Opcoes, { id: id })[0];
        }

        function GetHTML(content) {
            return $sce.trustAsHtml(content);
        }

        function SetElementActive(elemento) {

            // Tira a seleção dos demais elementos selecionados
            var elementosSelecionados = elemento.currentTarget.parentElement.querySelectorAll('li>div.selecionado');
            for (var i = 0; i < elementosSelecionados.length; i++) {
                elementosSelecionados[i].className = elementosSelecionados[i].className.replace(/selecionado/g, '');
            }

            // Seleciona elemento clicado
            elemento.currentTarget.querySelector('.opcao-lista-opcoes-item').className = elemento.currentTarget.querySelector('.opcao-lista-opcoes-item').className.replace(/selecionado/g, '') + ' selecionado'
        }
    }
})();