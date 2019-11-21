<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:43
 */
require_once('../vendor/autoload.php');

use MatheusHack\PortoImobiliario\Imobiliario;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\DocumentoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\CalculoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;
use MatheusHack\PortoImobiliario\Constants\TiposImovel;

try {
    $calculo = (new CalculoRequest)
        ->setNumeroCalculo(100004280)
        ->setCodigoCanal(13)
        ->setProduto(139)
        ->setPropnom('PEDRO PORTO')
        ->setTiplgd('R')
        ->setLgd('Eugênio de Almeida')
        ->setNumlgd(11)
        ->setBrr('Vl Constança')
        ->setCid('São Paulo')
        ->setUf('SP')
        ->setCependseg('03755-020')
        ->setCependsegNumero('03755')
        ->setCependsegComplemento('020')
        ->setCependsegPesqcepespecial('S')
		->setPestip(1)
		->setCpf('289937900-35')
		->setCpfBase('289937900')
		->setCpfDigito('35')
		->setTipTelefone(1)
		->setNumtelProp('(11)111111111')
		->setNumtelPropDdd('11')
		->setNumtelPropNumero('111111111')
		->setOrigem('0')
		->setProposta('0')
		->setDataCalculo('30/11/2018')
		->setDataCriacaoOrcamentoPPWeb('30/11/2018')
		->setDES0002Formatado('0,00')
		->setDES0002(0.00)
		->setDescTecnicoPromocional(2)
		->setIsIniciaForm(2)
		->setCOB0222(200000.00)
		->setCOB0222Formatado('200.000,00')
		->setCOB0004(200000.00)
		->setCOB0004Formatado('200.000,00')
		->setCOB0010(15000.00)
		->setCOB0010Formatado('15.000,00')
		->setCOB0064(200000.00)
		->setCOB0064Formatado('200.000,00')
		->setCOB0024(7000.000)
		->setCOB0024Formatado('7.000,0')
		->setCOB0002(6000.000)
		->setCOB0002Formatado('6.000,0')
		->setCOB0001(200000.00)
		->setCOB0001Formatado('200.000,00')
		->setCodigoClausulaServico(485)
		->setClausulaServico('PLANO INTERMEDIÁRIO - LIVRE ESCOLHA')
		->setTarifa('01/01/2099')
		->setCodigoProduto(139)
		->setCodigoOferta(1029)
		->setNumeroVersaoProdutoComercial(2)
		->setNumeroSequenciaVersaoOferta(0)
		->setNumeroSequenciaVersaoProdutoComercial(0)
		->setNomeConteudoCaracteristica(TiposImovel::APARTAMENTOS)
		->setFlagValidacaoCaracterEspecial(1)
		->setTPSEG(0)
		->setCodigoEmpresaPorto(1)
		->setQUE0098(2)
		->setCodigoRamo(118)
		->setCodigoGrupoComercial(3)
		->setNumeroVersaoParceiroNegocio(1)
		->setFlagImprimirCodigoOrcamento(2)
		->setTipoOrcamentoAtendimentoSelecionado(1)
		->setNumeroAtendimentoSelecionado(100004273)
		->setNumeroVersaoOferta(3)
		->setCodigoUsuario('S18562')
		->setCpflogadoportal('X')
		->setSalvarIncluirAlterarItem('S')
		->setRMECMLNIV(61)
		->setSesnum(3366793)
		->setUsrtip('S')
		->setSalvar('S')
		->setViginc('30/11/2018')
		->setVigincDia(30)
		->setVigincMes(11)
		->setVigincAno(2018)
		->setVigfnl('30/11/2019')
		->setVigfnlDia(30)
		->setVigfnlMes(11)
		->setVigfnlAno(2019)
		->setCodigoModalidade(1)
		->setCodigoParceiroNegocio(40488)
		->setNomeParceiroNegocio('IMOBILIARIA GALLO LTDA ME')
		->setCodigoSucursalCorretorPrincipal(52)
		->setCorsus('C1192J')
		->setSusepOrcamento('C1192J')
		->setSusepEmissao('C1192J')
		->setSituacaoCalculo(1)
		->setTiposeguro(1)
		->setNumeroVersaoRegraObjetoRisco(1)
		->setWebusrcod(18562)
		->setDataReferenciaVersao('30/11/2018')
		->setCodigoTipoImovel(1)
		->setFinalidadeFormulario(0)
		->setPortoSeguroServicoPlanoBasico(41)
		->setMethod('salvarOrcamento')
		->setTipopessoacorsus('J')
		->setCpfLogado('X');

    $documento = (new DocumentoRequest)
        ->setCalculo($calculo);

    $executarCalculoProdutoRequest = (new ExecutarCalculoProdutoRequest)
        ->setDocumento($documento);

    $imobiliario = new Imobiliario();
    $response = $imobiliario->executarCalculoProduto($executarCalculoProdutoRequest);

    dd($response);
}catch (Exception $e){
    dd($e->getMessage());
}catch (TypeError $e){
    dd($e->getMessage());
}