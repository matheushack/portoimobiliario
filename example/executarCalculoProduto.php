<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:43
 */
require_once('../vendor/autoload.php');

use Carbon\Carbon;
use MatheusHack\PortoImobiliario\Imobiliario;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\DocumentoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\CalculoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;
use MatheusHack\PortoImobiliario\Constants\TiposImovel;
use MatheusHack\PortoImobiliario\Constants\TipoPessoa;
use MatheusHack\PortoImobiliario\Constants\TipoDocumento;
use MatheusHack\PortoImobiliario\Constants\ClausulaServico;
use MatheusHack\PortoImobiliario\Constants\TipoLogradouro;
use MatheusHack\PortoImobiliario\Constants\Resposta;

try {
	$calculo = (new CalculoRequest)
		->setNumeroCalculo(100004280)
		->setCodigoCanal(13)
		->setProduto(139)
		->setPropnom('PEDRO PORTO')
		->setTiplgd(TipoLogradouro::RUA)
		->setLgd('Eugênio de Almeida')
		->setNumlgd(11)
		->setBrr('Vl Constança')
		->setCid('São Paulo')
		->setUf('SP')
		->setCependseg('03755-020')
		->setCependsegNumero('03755')
		->setCependsegComplemento('020')
		->setCependsegPesqcepespecial(Resposta::SIM)
		->setPestip(TipoPessoa::FISICA_CODIGO)
		->setCpf('289937900-35')
		->setCpfBase('289937900')
		->setCpfDigito('35')
		->setTipTelefone(1)
		->setNumtelProp('(11)111111111')
		->setNumtelPropDdd('11')
		->setNumtelPropNumero('111111111')
		->setDataCalculo('30/11/2018')
		->setDataCriacaoOrcamentoPPWeb('30/11/2018')
		->setDES0002(Resposta::NAO_EXTENSO) //Desconto? Se sim, preencher campo DES0002Formatado com o valor
		->setCOB0001(200000.00) //Incêndio
		->setCodigoClausulaServico(ClausulaServico::PLANO_INTERMEDIARIO_LIVRE_ESCOLHA_IMOB)
		->setClausulaServico('PLANO INTERMEDIÁRIO - LIVRE ESCOLHA')
		->setTarifa('01/01/2099')
		->setCodigoProduto(139)
		->setNomeConteudoCaracteristica(TiposImovel::APARTAMENTOS)
		->setTPSEG(TipoDocumento::NOVO)
		->setQUE0098(Resposta::NAO) //Proponente é o Proprietário do Imóvel?
		->setNumeroVersaoParceiroNegocio(1)
		->setNumeroAtendimentoSelecionado(100004273)
		->setCodigoUsuario('S18562')
		->setRMECMLNIV(61) //Código da Operação
		->setSesnum(3366793)
		->setUsrtip('S')
		->setSalvar(Resposta::SIM)
		->setCodigoParceiroNegocio(40488)
		->setNomeParceiroNegocio('IMOBILIARIA GALLO LTDA ME')
		->setCodigoSucursalCorretorPrincipal(52)
		->setCorsus('C1192J')
		->setSusepOrcamento('C1192J')
		->setSusepEmissao('C1192J')
		->setTiposeguro(1)
		->setWebusrcod(18562)
		->setDataReferenciaVersao('30/11/2018')
		->setCodigoTipoImovel(TiposImovel::APARTAMENTOS)
		->setTipopessoacorsus(TipoPessoa::JURIDICA);

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