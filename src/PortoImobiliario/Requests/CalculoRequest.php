<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 14:22
 */

namespace MatheusHack\PortoImobiliario\Requests;


/**
 * Class CalculoRequest
 * @package MatheusHack\PortoImobiliario\Requests
 */
class CalculoRequest
{
    /**
     * @var
     */
    private $numeroCalculo;

    /**
     * @var
     */
    private $codigoCanal;

    /**
     * @var
     */
    private $produto;

    /**
     * @var
     */
    private $propnom;

    /**
     * @var
     */
    private $datnsc;

    /**
     * @var
     */
    private $datnsc__dia;

    /**
     * @var
     */
    private $datnsc__mes;

    /**
     * @var
     */
    private $datnsc__ano;

    /**
     * @var
     */
    private $tiplgd;

    /**
     * @var
     */
    private $lgd;

    /**
     * @var
     */
    private $numlgd;

    /**
     * @var
     */
    private $compl;

    /**
     * @var
     */
    private $brr;

    /**
     * @var
     */
    private $cid;

    /**
     * @var
     */
    private $uf;

    /**
     * @var
     */
    private $cependseg;

    /**
     * @var
     */
    private $cependseg__numero;

    /**
     * @var
     */
    private $cependseg__complemento;

    /**
     * @var
     */
    private $cependseg__pesqcepespecial;

    /**
     * @var
     */
    private $pestip;

    /**
     * @var
     */
    private $cpf;

    /**
     * @var
     */
    private $cpf__base;

    /**
     * @var
     */
    private $cpf__digito;

    /**
     * @var
     */
    private $cnpj;

    /**
     * @var
     */
    private $cnpj__base;

    /**
     * @var
     */
    private $cnpj__ordem;

    /**
     * @var
     */
    private $cnpj__digito;

    /**
     * @var
     */
    private $tipTelefone;

    /**
     * @var
     */
    private $numtelprop;

    /**
     * @var
     */
    private $numtelprop__ddd;

    /**
     * @var
     */
    private $numtelprop__numero;

    /**
     * @var
     */
    private $__origem__;

    /**
     * @var
     */
    private $__proposta__;

    /**
     * @var
     */
    private $__datacalculo__;

    /**
     * @var
     */
    private $__dataCriacaoOrcamentoPPWeb__;

    /**
     * @var
     */
    private $DES0002__formatado;

    /**
     * @var
     */
    private $DES0002;

    /**
     * @var
     */
    private $descTecnicoPromocional;

    /**
     * @var
     */
    private $__isIniciaForm__;

    /**
     * @var
     */
    private $COB0222;

    /**
     * @var
     */
    private $COB0222__formatado;

    /**
     * @var
     */
    private $valorPremio0222;

    /**
     * @var
     */
    private $COB0005;

    /**
     * @var
     */
    private $COB0005__formatado;

    /**
     * @var
     */
    private $valorPremio0005;

    /**
     * @var
     */
    private $COB0004;

    /**
     * @var
     */
    private $COB0004__formatado;

    /**
     * @var
     */
    private $valorPremio0004;

    /**
     * @var
     */
    private $COB0010;

    /**
     * @var
     */
    private $COB0010__formatado;

    /**
     * @var
     */
    private $valorPremio0010;

    /**
     * @var
     */
    private $COB0064;

    /**
     * @var
     */
    private $COB0064__formatado;

    /**
     * @var
     */
    private $valorPremio0064;

    /**
     * @var
     */
    private $COB0024;

    /**
     * @var
     */
    private $COB0024__formatado;

    /**
     * @var
     */
    private $valorPremio0024;

    /**
     * @var
     */
    private $COB0002;

    /**
     * @var
     */
    private $COB0002__formatado;

    /**
     * @var
     */
    private $valorPremio0002;

    /**
     * @var
     */
    private $COB0001;

    /**
     * @var
     */
    private $COB0001__formatado;

    /**
     * @var
     */
    private $valorPremio0001;

    /**
     * @var
     */
    private $codigoClausulaServico;

    /**
     * @var
     */
    private $clausulaServico;

    /**
     * @var
     */
    private $valorPremioClausulaTotal;

    /**
     * @var
     */
    private $valorPremioCoberturaTotal;

    /**
     * @var
     */
    private $valorPremioLiquidoTotal;

    /**
     * @var
     */
    private $campovazio;

    /**
     * @var
     */
    private $statusOrcamento;

    /**
     * @var
     */
    private $dataCriacaoOrcamento;

    /**
     * @var
     */
    private $dataCalculoOrcamento;

    /**
     * @var
     */
    private $tarifa;

    /**
     * @var
     */
    private $codigoProduto;

    /**
     * @var
     */
    private $codigoOferta;

    /**
     * @var
     */
    private $numeroVersaoProdutoComercial;

    /**
     * @var
     */
    private $numeroSequenciaVersaoOferta;

    /**
     * @var
     */
    private $numeroSequenciaVersaoProdutoComercial;

    /**
     * @var
     */
    private $nomeConteudoCaracteristica;

    /**
     * @var
     */
    private $servicoUrl;

    /**
     * @var
     */
    private $flagValidacaoCaracterEspecial;

    /**
     * @var
     */
    private $__browserIdentification__;

    /**
     * @var
     */
    private $TPSEG;

    /**
     * @var
     */
    private $codigoEmpresaPorto;

    /**
     * @var
     */
    private $QUE0098;

    /**
     * @var
     */
    private $codigoRamo;

    /**
     * @var
     */
    private $codigoGrupoComercial;

    /**
     * @var
     */
    private $numeroVersaoParceiroNegocio;

    /**
     * @var
     */
    private $flagImprimirCodigoOrcamento;

    /**
     * @var
     */
    private $tipoOrcamentoAtendimentoSelecionado;

    /**
     * @var
     */
    private $numeroAtendimentoSelecionado;

    /**
     * @var
     */
    private $numeroVersaoOferta;

    /**
     * @var
     */
    private $codigoUsuario;

    /**
     * @var
     */
    private $cpflogadoportal;

    /**
     * @var
     */
    private $salvarIncluirAlterarItem;

    /**
     * @var
     */
    private $idTela;

    /**
     * @var
     */
    private $endServico;

    /**
     * @var
     */
    private $custoDaApolice;

    /**
     * @var
     */
    private $servicoNome;

    /**
     * @var
     */
    private $RMECMLNIV;

    /**
     * @var
     */
    private $sesnum;

    /**
     * @var
     */
    private $prefixoDLL;

    /**
     * @var
     */
    private $usrtip;

    /**
     * @var
     */
    private $salvar;

    /**
     * @var
     */
    private $viginc;

    /**
     * @var
     */
    private $viginc__dia;

    /**
     * @var
     */
    private $viginc__mes;

    /**
     * @var
     */
    private $viginc__ano;

    /**
     * @var
     */
    private $vigfnl;

    /**
     * @var
     */
    private $vigfnl__dia;

    /**
     * @var
     */
    private $vigfnl__mes;

    /**
     * @var
     */
    private $vigfnl__ano;

    /**
     * @var
     */
    private $codigoModalidade;

    /**
     * @var
     */
    private $codigoParceiroNegocio;

    /**
     * @var
     */
    private $nomeParceiroNegocio;

    /**
     * @var
     */
    private $__codigoSucursalCorretorPrincipal__;

    /**
     * @var
     */
    private $corsus;

    /**
     * @var
     */
    private $susepOrcamento;

    /**
     * @var
     */
    private $susepEmissao;

    /**
     * @var
     */
    private $situacaoCalculo;

    /**
     * @var
     */
    private $regraCodOpe200;

    /**
     * @var
     */
    private $__tiposeguro__;

    /**
     * @var
     */
    private $numeroVersaoRegraObjetoRisco;

    /**
     * @var
     */
    private $webusrcod;

    /**
     * @var
     */
    private $dataReferenciaVersao;

    /**
     * @var
     */
    private $valorPremioTotalAVista;

    /**
     * @var
     */
    private $codigoTipoImovel;

    /**
     * @var
     */
    private $finalidadeFormulario;

    /**
     * @var
     */
    private $portoSeguroServicoPlanoBasico;

    /**
     * @var
     */
    private $codigoSessao;

    /**
     * @var
     */
    private $valorImpostoOperacaoFinanceiraTotal;

    /**
     * @var
     */
    private $method;

    /**
     * @var
     */
    private $__tipopessoacorsus__;

    /**
     * @var
     */
    private $codigoStatusRenovacao;

    /**
     * @var
     */
    private $numeroOrcamentoEmissao;

    /**
     * @var
     */
    private $cpfLogado;

    /**
     * @return mixed
     */
    public function getNumeroCalculo()
    {
        return $this->numeroCalculo;
    }

    /**
     * @param mixed $numeroCalculo
     * @return CalculoRequest
     */
    public function setNumeroCalculo($numeroCalculo)
    {
        $this->numeroCalculo = $numeroCalculo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoCanal()
    {
        return $this->codigoCanal;
    }

    /**
     * @param mixed $codigoCanal
     * @return CalculoRequest
     */
    public function setCodigoCanal($codigoCanal)
    {
        $this->codigoCanal = $codigoCanal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     * @return CalculoRequest
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPropnom()
    {
        return $this->propnom;
    }

    /**
     * @param mixed $propnom
     * @return CalculoRequest
     */
    public function setPropnom($propnom)
    {
        $this->propnom = $propnom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatnsc()
    {
        return $this->datnsc;
    }

    /**
     * @param mixed $datnsc
     * @return CalculoRequest
     */
    public function setDatnsc($datnsc)
    {
        $this->datnsc = $datnsc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatnscDia()
    {
        return $this->datnsc__dia;
    }

    /**
     * @param mixed $datnsc__dia
     * @return CalculoRequest
     */
    public function setDatnscDia($datnsc__dia)
    {
        $this->datnsc__dia = $datnsc__dia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatnscMes()
    {
        return $this->datnsc__mes;
    }

    /**
     * @param mixed $datnsc__mes
     * @return CalculoRequest
     */
    public function setDatnscMes($datnsc__mes)
    {
        $this->datnsc__mes = $datnsc__mes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatnscAno()
    {
        return $this->datnsc__ano;
    }

    /**
     * @param mixed $datnsc__ano
     * @return CalculoRequest
     */
    public function setDatnscAno($datnsc__ano)
    {
        $this->datnsc__ano = $datnsc__ano;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTiplgd()
    {
        return $this->tiplgd;
    }

    /**
     * @param mixed $tiplgd
     * @return CalculoRequest
     */
    public function setTiplgd($tiplgd)
    {
        $this->tiplgd = $tiplgd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLgd()
    {
        return $this->lgd;
    }

    /**
     * @param mixed $lgd
     * @return CalculoRequest
     */
    public function setLgd($lgd)
    {
        $this->lgd = $lgd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumlgd()
    {
        return $this->numlgd;
    }

    /**
     * @param mixed $numlgd
     * @return CalculoRequest
     */
    public function setNumlgd($numlgd)
    {
        $this->numlgd = $numlgd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompl()
    {
        return $this->compl;
    }

    /**
     * @param mixed $compl
     * @return CalculoRequest
     */
    public function setCompl($compl)
    {
        $this->compl = $compl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrr()
    {
        return $this->brr;
    }

    /**
     * @param mixed $brr
     * @return CalculoRequest
     */
    public function setBrr($brr)
    {
        $this->brr = $brr;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     * @return CalculoRequest
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     * @return CalculoRequest
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCependseg()
    {
        return $this->cependseg;
    }

    /**
     * @param mixed $cependseg
     * @return CalculoRequest
     */
    public function setCependseg($cependseg)
    {
        $this->cependseg = $cependseg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCependsegNumero()
    {
        return $this->cependseg__numero;
    }

    /**
     * @param mixed $cependseg__numero
     * @return CalculoRequest
     */
    public function setCependsegNumero($cependseg__numero)
    {
        $this->cependseg__numero = $cependseg__numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCependsegComplemento()
    {
        return $this->cependseg__complemento;
    }

    /**
     * @param mixed $cependseg__complemento
     * @return CalculoRequest
     */
    public function setCependsegComplemento($cependseg__complemento)
    {
        $this->cependseg__complemento = $cependseg__complemento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCependsegPesqcepespecial()
    {
        return $this->cependseg__pesqcepespecial;
    }

    /**
     * @param mixed $cependseg__pesqcepespecial
     * @return CalculoRequest
     */
    public function setCependsegPesqcepespecial($cependseg__pesqcepespecial)
    {
        $this->cependseg__pesqcepespecial = $cependseg__pesqcepespecial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPestip()
    {
        return $this->pestip;
    }

    /**
     * @param mixed $pestip
     * @return CalculoRequest
     */
    public function setPestip($pestip)
    {
        $this->pestip = $pestip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return CalculoRequest
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfBase()
    {
        return $this->cpf__base;
    }

    /**
     * @param mixed $cpf__base
     * @return CalculoRequest
     */
    public function setCpfBase($cpf__base)
    {
        $this->cpf__base = $cpf__base;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfDigito()
    {
        return $this->cpf__digito;
    }

    /**
     * @param mixed $cpf__digito
     * @return CalculoRequest
     */
    public function setCpfDigito($cpf__digito)
    {
        $this->cpf__digito = $cpf__digito;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return CalculoRequest
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpjBase()
    {
        return $this->cnpj__base;
    }

    /**
     * @param mixed $cnpj__base
     * @return CalculoRequest
     */
    public function setCnpjBase($cnpj__base)
    {
        $this->cnpj__base = $cnpj__base;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpjOrdem()
    {
        return $this->cnpj__ordem;
    }

    /**
     * @param mixed $cnpj__ordem
     * @return CalculoRequest
     */
    public function setCnpjOrdem($cnpj__ordem)
    {
        $this->cnpj__ordem = $cnpj__ordem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpjDigito()
    {
        return $this->cnpj__digito;
    }

    /**
     * @param mixed $cnpj__digito
     * @return CalculoRequest
     */
    public function setCnpjDigito($cnpj__digito)
    {
        $this->cnpj__digito = $cnpj__digito;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipTelefone()
    {
        return $this->tipTelefone;
    }

    /**
     * @param mixed $tipTelefone
     * @return CalculoRequest
     */
    public function setTipTelefone($tipTelefone)
    {
        $this->tipTelefone = $tipTelefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumtelprop()
    {
        return $this->numtelprop;
    }

    /**
     * @param mixed $numtelprop
     * @return CalculoRequest
     */
    public function setNumtelprop($numtelprop)
    {
        $this->numtelprop = $numtelprop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumtelpropDdd()
    {
        return $this->numtelprop__ddd;
    }

    /**
     * @param mixed $numtelprop__ddd
     * @return CalculoRequest
     */
    public function setNumtelpropDdd($numtelprop__ddd)
    {
        $this->numtelprop__ddd = $numtelprop__ddd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumtelpropNumero()
    {
        return $this->numtelprop__numero;
    }

    /**
     * @param mixed $numtelprop__numero
     * @return CalculoRequest
     */
    public function setNumtelpropNumero($numtelprop__numero)
    {
        $this->numtelprop__numero = $numtelprop__numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrigem()
    {
        return $this->__origem__;
    }

    /**
     * @param mixed $_origem__
     * @return CalculoRequest
     */
    public function setOrigem($_origem__)
    {
        $this->__origem__ = $_origem__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProposta()
    {
        return $this->__proposta__;
    }

    /**
     * @param mixed $_proposta__
     * @return CalculoRequest
     */
    public function setProposta($_proposta__)
    {
        $this->__proposta__ = $_proposta__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatacalculo()
    {
        return $this->__datacalculo__;
    }

    /**
     * @param mixed $_datacalculo__
     * @return CalculoRequest
     */
    public function setDatacalculo($_datacalculo__)
    {
        $this->__datacalculo__ = $_datacalculo__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCriacaoOrcamentoPPWeb()
    {
        return $this->__dataCriacaoOrcamentoPPWeb__;
    }

    /**
     * @param mixed $_dataCriacaoOrcamentoPPWeb__
     * @return CalculoRequest
     */
    public function setDataCriacaoOrcamentoPPWeb($_dataCriacaoOrcamentoPPWeb__)
    {
        $this->__dataCriacaoOrcamentoPPWeb__ = $_dataCriacaoOrcamentoPPWeb__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDES0002Formatado()
    {
        return $this->DES0002__formatado;
    }

    /**
     * @param mixed $DES0002__formatado
     * @return CalculoRequest
     */
    public function setDES0002Formatado($DES0002__formatado)
    {
        $this->DES0002__formatado = $DES0002__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDES0002()
    {
        return $this->DES0002;
    }

    /**
     * @param mixed $DES0002
     * @return CalculoRequest
     */
    public function setDES0002($DES0002)
    {
        $this->DES0002 = $DES0002;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescTecnicoPromocional()
    {
        return $this->descTecnicoPromocional;
    }

    /**
     * @param mixed $descTecnicoPromocional
     * @return CalculoRequest
     */
    public function setDescTecnicoPromocional($descTecnicoPromocional)
    {
        $this->descTecnicoPromocional = $descTecnicoPromocional;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getisIniciaForm()
    {
        return $this->__isIniciaForm__;
    }

    /**
     * @param mixed $_isIniciaForm__
     * @return CalculoRequest
     */
    public function setIsIniciaForm($_isIniciaForm__)
    {
        $this->__isIniciaForm__ = $_isIniciaForm__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0222()
    {
        return $this->COB0222;
    }

    /**
     * @param mixed $COB0222
     * @return CalculoRequest
     */
    public function setCOB0222($COB0222)
    {
        $this->COB0222 = $COB0222;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0222Formatado()
    {
        return $this->COB0222__formatado;
    }

    /**
     * @param mixed $COB0222__formatado
     * @return CalculoRequest
     */
    public function setCOB0222Formatado($COB0222__formatado)
    {
        $this->COB0222__formatado = $COB0222__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0222()
    {
        return $this->valorPremio0222;
    }

    /**
     * @param mixed $valorPremio0222
     * @return CalculoRequest
     */
    public function setValorPremio0222($valorPremio0222)
    {
        $this->valorPremio0222 = $valorPremio0222;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0005()
    {
        return $this->COB0005;
    }

    /**
     * @param mixed $COB0005
     * @return CalculoRequest
     */
    public function setCOB0005($COB0005)
    {
        $this->COB0005 = $COB0005;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0005Formatado()
    {
        return $this->COB0005__formatado;
    }

    /**
     * @param mixed $COB0005__formatado
     * @return CalculoRequest
     */
    public function setCOB0005Formatado($COB0005__formatado)
    {
        $this->COB0005__formatado = $COB0005__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0005()
    {
        return $this->valorPremio0005;
    }

    /**
     * @param mixed $valorPremio0005
     * @return CalculoRequest
     */
    public function setValorPremio0005($valorPremio0005)
    {
        $this->valorPremio0005 = $valorPremio0005;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0004()
    {
        return $this->COB0004;
    }

    /**
     * @param mixed $COB0004
     * @return CalculoRequest
     */
    public function setCOB0004($COB0004)
    {
        $this->COB0004 = $COB0004;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0004Formatado()
    {
        return $this->COB0004__formatado;
    }

    /**
     * @param mixed $COB0004__formatado
     * @return CalculoRequest
     */
    public function setCOB0004Formatado($COB0004__formatado)
    {
        $this->COB0004__formatado = $COB0004__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0004()
    {
        return $this->valorPremio0004;
    }

    /**
     * @param mixed $valorPremio0004
     * @return CalculoRequest
     */
    public function setValorPremio0004($valorPremio0004)
    {
        $this->valorPremio0004 = $valorPremio0004;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0010()
    {
        return $this->COB0010;
    }

    /**
     * @param mixed $COB0010
     * @return CalculoRequest
     */
    public function setCOB0010($COB0010)
    {
        $this->COB0010 = $COB0010;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0010Formatado()
    {
        return $this->COB0010__formatado;
    }

    /**
     * @param mixed $COB0010__formatado
     * @return CalculoRequest
     */
    public function setCOB0010Formatado($COB0010__formatado)
    {
        $this->COB0010__formatado = $COB0010__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0010()
    {
        return $this->valorPremio0010;
    }

    /**
     * @param mixed $valorPremio0010
     * @return CalculoRequest
     */
    public function setValorPremio0010($valorPremio0010)
    {
        $this->valorPremio0010 = $valorPremio0010;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0064()
    {
        return $this->COB0064;
    }

    /**
     * @param mixed $COB0064
     * @return CalculoRequest
     */
    public function setCOB0064($COB0064)
    {
        $this->COB0064 = $COB0064;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0064Formatado()
    {
        return $this->COB0064__formatado;
    }

    /**
     * @param mixed $COB0064__formatado
     * @return CalculoRequest
     */
    public function setCOB0064Formatado($COB0064__formatado)
    {
        $this->COB0064__formatado = $COB0064__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0064()
    {
        return $this->valorPremio0064;
    }

    /**
     * @param mixed $valorPremio0064
     * @return CalculoRequest
     */
    public function setValorPremio0064($valorPremio0064)
    {
        $this->valorPremio0064 = $valorPremio0064;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0024()
    {
        return $this->COB0024;
    }

    /**
     * @param mixed $COB0024
     * @return CalculoRequest
     */
    public function setCOB0024($COB0024)
    {
        $this->COB0024 = $COB0024;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0024Formatado()
    {
        return $this->COB0024__formatado;
    }

    /**
     * @param mixed $COB0024__formatado
     * @return CalculoRequest
     */
    public function setCOB0024Formatado($COB0024__formatado)
    {
        $this->COB0024__formatado = $COB0024__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0024()
    {
        return $this->valorPremio0024;
    }

    /**
     * @param mixed $valorPremio0024
     * @return CalculoRequest
     */
    public function setValorPremio0024($valorPremio0024)
    {
        $this->valorPremio0024 = $valorPremio0024;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0002()
    {
        return $this->COB0002;
    }

    /**
     * @param mixed $COB0002
     * @return CalculoRequest
     */
    public function setCOB0002($COB0002)
    {
        $this->COB0002 = $COB0002;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0002Formatado()
    {
        return $this->COB0002__formatado;
    }

    /**
     * @param mixed $COB0002__formatado
     * @return CalculoRequest
     */
    public function setCOB0002Formatado($COB0002__formatado)
    {
        $this->COB0002__formatado = $COB0002__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0002()
    {
        return $this->valorPremio0002;
    }

    /**
     * @param mixed $valorPremio0002
     * @return CalculoRequest
     */
    public function setValorPremio0002($valorPremio0002)
    {
        $this->valorPremio0002 = $valorPremio0002;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0001()
    {
        return $this->COB0001;
    }

    /**
     * @param mixed $COB0001
     * @return CalculoRequest
     */
    public function setCOB0001($COB0001)
    {
        $this->COB0001 = $COB0001;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCOB0001Formatado()
    {
        return $this->COB0001__formatado;
    }

    /**
     * @param mixed $COB0001__formatado
     * @return CalculoRequest
     */
    public function setCOB0001Formatado($COB0001__formatado)
    {
        $this->COB0001__formatado = $COB0001__formatado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio0001()
    {
        return $this->valorPremio0001;
    }

    /**
     * @param mixed $valorPremio0001
     * @return CalculoRequest
     */
    public function setValorPremio0001($valorPremio0001)
    {
        $this->valorPremio0001 = $valorPremio0001;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoClausulaServico()
    {
        return $this->codigoClausulaServico;
    }

    /**
     * @param mixed $codigoClausulaServico
     * @return CalculoRequest
     */
    public function setCodigoClausulaServico($codigoClausulaServico)
    {
        $this->codigoClausulaServico = $codigoClausulaServico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClausulaServico()
    {
        return $this->clausulaServico;
    }

    /**
     * @param mixed $clausulaServico
     * @return CalculoRequest
     */
    public function setClausulaServico($clausulaServico)
    {
        $this->clausulaServico = $clausulaServico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremioClausulaTotal()
    {
        return $this->valorPremioClausulaTotal;
    }

    /**
     * @param mixed $valorPremioClausulaTotal
     * @return CalculoRequest
     */
    public function setValorPremioClausulaTotal($valorPremioClausulaTotal)
    {
        $this->valorPremioClausulaTotal = $valorPremioClausulaTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremioCoberturaTotal()
    {
        return $this->valorPremioCoberturaTotal;
    }

    /**
     * @param mixed $valorPremioCoberturaTotal
     * @return CalculoRequest
     */
    public function setValorPremioCoberturaTotal($valorPremioCoberturaTotal)
    {
        $this->valorPremioCoberturaTotal = $valorPremioCoberturaTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremioLiquidoTotal()
    {
        return $this->valorPremioLiquidoTotal;
    }

    /**
     * @param mixed $valorPremioLiquidoTotal
     * @return CalculoRequest
     */
    public function setValorPremioLiquidoTotal($valorPremioLiquidoTotal)
    {
        $this->valorPremioLiquidoTotal = $valorPremioLiquidoTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCampovazio()
    {
        return $this->campovazio;
    }

    /**
     * @param mixed $campovazio
     * @return CalculoRequest
     */
    public function setCampovazio($campovazio)
    {
        $this->campovazio = $campovazio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusOrcamento()
    {
        return $this->statusOrcamento;
    }

    /**
     * @param mixed $statusOrcamento
     * @return CalculoRequest
     */
    public function setStatusOrcamento($statusOrcamento)
    {
        $this->statusOrcamento = $statusOrcamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCriacaoOrcamento()
    {
        return $this->dataCriacaoOrcamento;
    }

    /**
     * @param mixed $dataCriacaoOrcamento
     * @return CalculoRequest
     */
    public function setDataCriacaoOrcamento($dataCriacaoOrcamento)
    {
        $this->dataCriacaoOrcamento = $dataCriacaoOrcamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCalculoOrcamento()
    {
        return $this->dataCalculoOrcamento;
    }

    /**
     * @param mixed $dataCalculoOrcamento
     * @return CalculoRequest
     */
    public function setDataCalculoOrcamento($dataCalculoOrcamento)
    {
        $this->dataCalculoOrcamento = $dataCalculoOrcamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * @param mixed $tarifa
     * @return CalculoRequest
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoProduto()
    {
        return $this->codigoProduto;
    }

    /**
     * @param mixed $codigoProduto
     * @return CalculoRequest
     */
    public function setCodigoProduto($codigoProduto)
    {
        $this->codigoProduto = $codigoProduto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoOferta()
    {
        return $this->codigoOferta;
    }

    /**
     * @param mixed $codigoOferta
     * @return CalculoRequest
     */
    public function setCodigoOferta($codigoOferta)
    {
        $this->codigoOferta = $codigoOferta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroVersaoProdutoComercial()
    {
        return $this->numeroVersaoProdutoComercial;
    }

    /**
     * @param mixed $numeroVersaoProdutoComercial
     * @return CalculoRequest
     */
    public function setNumeroVersaoProdutoComercial($numeroVersaoProdutoComercial)
    {
        $this->numeroVersaoProdutoComercial = $numeroVersaoProdutoComercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroSequenciaVersaoOferta()
    {
        return $this->numeroSequenciaVersaoOferta;
    }

    /**
     * @param mixed $numeroSequenciaVersaoOferta
     * @return CalculoRequest
     */
    public function setNumeroSequenciaVersaoOferta($numeroSequenciaVersaoOferta)
    {
        $this->numeroSequenciaVersaoOferta = $numeroSequenciaVersaoOferta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroSequenciaVersaoProdutoComercial()
    {
        return $this->numeroSequenciaVersaoProdutoComercial;
    }

    /**
     * @param mixed $numeroSequenciaVersaoProdutoComercial
     * @return CalculoRequest
     */
    public function setNumeroSequenciaVersaoProdutoComercial($numeroSequenciaVersaoProdutoComercial)
    {
        $this->numeroSequenciaVersaoProdutoComercial = $numeroSequenciaVersaoProdutoComercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeConteudoCaracteristica()
    {
        return $this->nomeConteudoCaracteristica;
    }

    /**
     * @param mixed $nomeConteudoCaracteristica
     * @return CalculoRequest
     */
    public function setNomeConteudoCaracteristica($nomeConteudoCaracteristica)
    {
        $this->nomeConteudoCaracteristica = $nomeConteudoCaracteristica;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServicoUrl()
    {
        return $this->servicoUrl;
    }

    /**
     * @param mixed $servicoUrl
     * @return CalculoRequest
     */
    public function setServicoUrl($servicoUrl)
    {
        $this->servicoUrl = $servicoUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlagValidacaoCaracterEspecial()
    {
        return $this->flagValidacaoCaracterEspecial;
    }

    /**
     * @param mixed $flagValidacaoCaracterEspecial
     * @return CalculoRequest
     */
    public function setFlagValidacaoCaracterEspecial($flagValidacaoCaracterEspecial)
    {
        $this->flagValidacaoCaracterEspecial = $flagValidacaoCaracterEspecial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserIdentification()
    {
        return $this->__browserIdentification__;
    }

    /**
     * @param mixed $_browserIdentification__
     * @return CalculoRequest
     */
    public function setBrowserIdentification($_browserIdentification__)
    {
        $this->__browserIdentification__ = $_browserIdentification__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTPSEG()
    {
        return $this->TPSEG;
    }

    /**
     * @param mixed $TPSEG
     * @return CalculoRequest
     */
    public function setTPSEG($TPSEG)
    {
        $this->TPSEG = $TPSEG;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoEmpresaPorto()
    {
        return $this->codigoEmpresaPorto;
    }

    /**
     * @param mixed $codigoEmpresaPorto
     * @return CalculoRequest
     */
    public function setCodigoEmpresaPorto($codigoEmpresaPorto)
    {
        $this->codigoEmpresaPorto = $codigoEmpresaPorto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQUE0098()
    {
        return $this->QUE0098;
    }

    /**
     * @param mixed $QUE0098
     * @return CalculoRequest
     */
    public function setQUE0098($QUE0098)
    {
        $this->QUE0098 = $QUE0098;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoRamo()
    {
        return $this->codigoRamo;
    }

    /**
     * @param mixed $codigoRamo
     * @return CalculoRequest
     */
    public function setCodigoRamo($codigoRamo)
    {
        $this->codigoRamo = $codigoRamo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoGrupoComercial()
    {
        return $this->codigoGrupoComercial;
    }

    /**
     * @param mixed $codigoGrupoComercial
     * @return CalculoRequest
     */
    public function setCodigoGrupoComercial($codigoGrupoComercial)
    {
        $this->codigoGrupoComercial = $codigoGrupoComercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroVersaoParceiroNegocio()
    {
        return $this->numeroVersaoParceiroNegocio;
    }

    /**
     * @param mixed $numeroVersaoParceiroNegocio
     * @return CalculoRequest
     */
    public function setNumeroVersaoParceiroNegocio($numeroVersaoParceiroNegocio)
    {
        $this->numeroVersaoParceiroNegocio = $numeroVersaoParceiroNegocio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlagImprimirCodigoOrcamento()
    {
        return $this->flagImprimirCodigoOrcamento;
    }

    /**
     * @param mixed $flagImprimirCodigoOrcamento
     * @return CalculoRequest
     */
    public function setFlagImprimirCodigoOrcamento($flagImprimirCodigoOrcamento)
    {
        $this->flagImprimirCodigoOrcamento = $flagImprimirCodigoOrcamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoOrcamentoAtendimentoSelecionado()
    {
        return $this->tipoOrcamentoAtendimentoSelecionado;
    }

    /**
     * @param mixed $tipoOrcamentoAtendimentoSelecionado
     * @return CalculoRequest
     */
    public function setTipoOrcamentoAtendimentoSelecionado($tipoOrcamentoAtendimentoSelecionado)
    {
        $this->tipoOrcamentoAtendimentoSelecionado = $tipoOrcamentoAtendimentoSelecionado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroAtendimentoSelecionado()
    {
        return $this->numeroAtendimentoSelecionado;
    }

    /**
     * @param mixed $numeroAtendimentoSelecionado
     * @return CalculoRequest
     */
    public function setNumeroAtendimentoSelecionado($numeroAtendimentoSelecionado)
    {
        $this->numeroAtendimentoSelecionado = $numeroAtendimentoSelecionado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroVersaoOferta()
    {
        return $this->numeroVersaoOferta;
    }

    /**
     * @param mixed $numeroVersaoOferta
     * @return CalculoRequest
     */
    public function setNumeroVersaoOferta($numeroVersaoOferta)
    {
        $this->numeroVersaoOferta = $numeroVersaoOferta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoUsuario()
    {
        return $this->codigoUsuario;
    }

    /**
     * @param mixed $codigoUsuario
     * @return CalculoRequest
     */
    public function setCodigoUsuario($codigoUsuario)
    {
        $this->codigoUsuario = $codigoUsuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpflogadoportal()
    {
        return $this->cpflogadoportal;
    }

    /**
     * @param mixed $cpflogadoportal
     * @return CalculoRequest
     */
    public function setCpflogadoportal($cpflogadoportal)
    {
        $this->cpflogadoportal = $cpflogadoportal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalvarIncluirAlterarItem()
    {
        return $this->salvarIncluirAlterarItem;
    }

    /**
     * @param mixed $salvarIncluirAlterarItem
     * @return CalculoRequest
     */
    public function setSalvarIncluirAlterarItem($salvarIncluirAlterarItem)
    {
        $this->salvarIncluirAlterarItem = $salvarIncluirAlterarItem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTela()
    {
        return $this->idTela;
    }

    /**
     * @param mixed $idTela
     * @return CalculoRequest
     */
    public function setIdTela($idTela)
    {
        $this->idTela = $idTela;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndServico()
    {
        return $this->endServico;
    }

    /**
     * @param mixed $endServico
     * @return CalculoRequest
     */
    public function setEndServico($endServico)
    {
        $this->endServico = $endServico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustoDaApolice()
    {
        return $this->custoDaApolice;
    }

    /**
     * @param mixed $custoDaApolice
     * @return CalculoRequest
     */
    public function setCustoDaApolice($custoDaApolice)
    {
        $this->custoDaApolice = $custoDaApolice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServicoNome()
    {
        return $this->servicoNome;
    }

    /**
     * @param mixed $servicoNome
     * @return CalculoRequest
     */
    public function setServicoNome($servicoNome)
    {
        $this->servicoNome = $servicoNome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRMECMLNIV()
    {
        return $this->RMECMLNIV;
    }

    /**
     * @param mixed $RMECMLNIV
     * @return CalculoRequest
     */
    public function setRMECMLNIV($RMECMLNIV)
    {
        $this->RMECMLNIV = $RMECMLNIV;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSesnum()
    {
        return $this->sesnum;
    }

    /**
     * @param mixed $sesnum
     * @return CalculoRequest
     */
    public function setSesnum($sesnum)
    {
        $this->sesnum = $sesnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrefixoDLL()
    {
        return $this->prefixoDLL;
    }

    /**
     * @param mixed $prefixoDLL
     * @return CalculoRequest
     */
    public function setPrefixoDLL($prefixoDLL)
    {
        $this->prefixoDLL = $prefixoDLL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsrtip()
    {
        return $this->usrtip;
    }

    /**
     * @param mixed $usrtip
     * @return CalculoRequest
     */
    public function setUsrtip($usrtip)
    {
        $this->usrtip = $usrtip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalvar()
    {
        return $this->salvar;
    }

    /**
     * @param mixed $salvar
     * @return CalculoRequest
     */
    public function setSalvar($salvar)
    {
        $this->salvar = $salvar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getViginc()
    {
        return $this->viginc;
    }

    /**
     * @param mixed $viginc
     * @return CalculoRequest
     */
    public function setViginc($viginc)
    {
        $this->viginc = $viginc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigincDia()
    {
        return $this->viginc__dia;
    }

    /**
     * @param mixed $viginc__dia
     * @return CalculoRequest
     */
    public function setVigincDia($viginc__dia)
    {
        $this->viginc__dia = $viginc__dia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigincMes()
    {
        return $this->viginc__mes;
    }

    /**
     * @param mixed $viginc__mes
     * @return CalculoRequest
     */
    public function setVigincMes($viginc__mes)
    {
        $this->viginc__mes = $viginc__mes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigincAno()
    {
        return $this->viginc__ano;
    }

    /**
     * @param mixed $viginc__ano
     * @return CalculoRequest
     */
    public function setVigincAno($viginc__ano)
    {
        $this->viginc__ano = $viginc__ano;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigfnl()
    {
        return $this->vigfnl;
    }

    /**
     * @param mixed $vigfnl
     * @return CalculoRequest
     */
    public function setVigfnl($vigfnl)
    {
        $this->vigfnl = $vigfnl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigfnlDia()
    {
        return $this->vigfnl__dia;
    }

    /**
     * @param mixed $vigfnl__dia
     * @return CalculoRequest
     */
    public function setVigfnlDia($vigfnl__dia)
    {
        $this->vigfnl__dia = $vigfnl__dia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigfnlMes()
    {
        return $this->vigfnl__mes;
    }

    /**
     * @param mixed $vigfnl__mes
     * @return CalculoRequest
     */
    public function setVigfnlMes($vigfnl__mes)
    {
        $this->vigfnl__mes = $vigfnl__mes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVigfnlAno()
    {
        return $this->vigfnl__ano;
    }

    /**
     * @param mixed $vigfnl__ano
     * @return CalculoRequest
     */
    public function setVigfnlAno($vigfnl__ano)
    {
        $this->vigfnl__ano = $vigfnl__ano;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoModalidade()
    {
        return $this->codigoModalidade;
    }

    /**
     * @param mixed $codigoModalidade
     * @return CalculoRequest
     */
    public function setCodigoModalidade($codigoModalidade)
    {
        $this->codigoModalidade = $codigoModalidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoParceiroNegocio()
    {
        return $this->codigoParceiroNegocio;
    }

    /**
     * @param mixed $codigoParceiroNegocio
     * @return CalculoRequest
     */
    public function setCodigoParceiroNegocio($codigoParceiroNegocio)
    {
        $this->codigoParceiroNegocio = $codigoParceiroNegocio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeParceiroNegocio()
    {
        return $this->nomeParceiroNegocio;
    }

    /**
     * @param mixed $nomeParceiroNegocio
     * @return CalculoRequest
     */
    public function setNomeParceiroNegocio($nomeParceiroNegocio)
    {
        $this->nomeParceiroNegocio = $nomeParceiroNegocio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoSucursalCorretorPrincipal()
    {
        return $this->__codigoSucursalCorretorPrincipal__;
    }

    /**
     * @param mixed $_codigoSucursalCorretorPrincipal__
     * @return CalculoRequest
     */
    public function setCodigoSucursalCorretorPrincipal($_codigoSucursalCorretorPrincipal__)
    {
        $this->__codigoSucursalCorretorPrincipal__ = $_codigoSucursalCorretorPrincipal__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorsus()
    {
        return $this->corsus;
    }

    /**
     * @param mixed $corsus
     * @return CalculoRequest
     */
    public function setCorsus($corsus)
    {
        $this->corsus = $corsus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSusepOrcamento()
    {
        return $this->susepOrcamento;
    }

    /**
     * @param mixed $susepOrcamento
     * @return CalculoRequest
     */
    public function setSusepOrcamento($susepOrcamento)
    {
        $this->susepOrcamento = $susepOrcamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSusepEmissao()
    {
        return $this->susepEmissao;
    }

    /**
     * @param mixed $susepEmissao
     * @return CalculoRequest
     */
    public function setSusepEmissao($susepEmissao)
    {
        $this->susepEmissao = $susepEmissao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSituacaoCalculo()
    {
        return $this->situacaoCalculo;
    }

    /**
     * @param mixed $situacaoCalculo
     * @return CalculoRequest
     */
    public function setSituacaoCalculo($situacaoCalculo)
    {
        $this->situacaoCalculo = $situacaoCalculo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegraCodOpe200()
    {
        return $this->regraCodOpe200;
    }

    /**
     * @param mixed $regraCodOpe200
     * @return CalculoRequest
     */
    public function setRegraCodOpe200($regraCodOpe200)
    {
        $this->regraCodOpe200 = $regraCodOpe200;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTiposeguro()
    {
        return $this->__tiposeguro__;
    }

    /**
     * @param mixed $_tiposeguro__
     * @return CalculoRequest
     */
    public function setTiposeguro($_tiposeguro__)
    {
        $this->__tiposeguro__ = $_tiposeguro__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroVersaoRegraObjetoRisco()
    {
        return $this->numeroVersaoRegraObjetoRisco;
    }

    /**
     * @param mixed $numeroVersaoRegraObjetoRisco
     * @return CalculoRequest
     */
    public function setNumeroVersaoRegraObjetoRisco($numeroVersaoRegraObjetoRisco)
    {
        $this->numeroVersaoRegraObjetoRisco = $numeroVersaoRegraObjetoRisco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWebusrcod()
    {
        return $this->webusrcod;
    }

    /**
     * @param mixed $webusrcod
     * @return CalculoRequest
     */
    public function setWebusrcod($webusrcod)
    {
        $this->webusrcod = $webusrcod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataReferenciaVersao()
    {
        return $this->dataReferenciaVersao;
    }

    /**
     * @param mixed $dataReferenciaVersao
     * @return CalculoRequest
     */
    public function setDataReferenciaVersao($dataReferenciaVersao)
    {
        $this->dataReferenciaVersao = $dataReferenciaVersao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremioTotalAVista()
    {
        return $this->valorPremioTotalAVista;
    }

    /**
     * @param mixed $valorPremioTotalAVista
     * @return CalculoRequest
     */
    public function setValorPremioTotalAVista($valorPremioTotalAVista)
    {
        $this->valorPremioTotalAVista = $valorPremioTotalAVista;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoTipoImovel()
    {
        return $this->codigoTipoImovel;
    }

    /**
     * @param mixed $codigoTipoImovel
     * @return CalculoRequest
     */
    public function setCodigoTipoImovel($codigoTipoImovel)
    {
        $this->codigoTipoImovel = $codigoTipoImovel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinalidadeFormulario()
    {
        return $this->finalidadeFormulario;
    }

    /**
     * @param mixed $finalidadeFormulario
     * @return CalculoRequest
     */
    public function setFinalidadeFormulario($finalidadeFormulario)
    {
        $this->finalidadeFormulario = $finalidadeFormulario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortoSeguroServicoPlanoBasico()
    {
        return $this->portoSeguroServicoPlanoBasico;
    }

    /**
     * @param mixed $portoSeguroServicoPlanoBasico
     * @return CalculoRequest
     */
    public function setPortoSeguroServicoPlanoBasico($portoSeguroServicoPlanoBasico)
    {
        $this->portoSeguroServicoPlanoBasico = $portoSeguroServicoPlanoBasico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoSessao()
    {
        return $this->codigoSessao;
    }

    /**
     * @param mixed $codigoSessao
     * @return CalculoRequest
     */
    public function setCodigoSessao($codigoSessao)
    {
        $this->codigoSessao = $codigoSessao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorImpostoOperacaoFinanceiraTotal()
    {
        return $this->valorImpostoOperacaoFinanceiraTotal;
    }

    /**
     * @param mixed $valorImpostoOperacaoFinanceiraTotal
     * @return CalculoRequest
     */
    public function setValorImpostoOperacaoFinanceiraTotal($valorImpostoOperacaoFinanceiraTotal)
    {
        $this->valorImpostoOperacaoFinanceiraTotal = $valorImpostoOperacaoFinanceiraTotal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     * @return CalculoRequest
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipopessoacorsus()
    {
        return $this->__tipopessoacorsus__;
    }

    /**
     * @param mixed $_tipopessoacorsus__
     * @return CalculoRequest
     */
    public function setTipopessoacorsus($_tipopessoacorsus__)
    {
        $this->__tipopessoacorsus__ = $_tipopessoacorsus__;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoStatusRenovacao()
    {
        return $this->codigoStatusRenovacao;
    }

    /**
     * @param mixed $codigoStatusRenovacao
     * @return CalculoRequest
     */
    public function setCodigoStatusRenovacao($codigoStatusRenovacao)
    {
        $this->codigoStatusRenovacao = $codigoStatusRenovacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroOrcamentoEmissao()
    {
        return $this->numeroOrcamentoEmissao;
    }

    /**
     * @param mixed $numeroOrcamentoEmissao
     * @return CalculoRequest
     */
    public function setNumeroOrcamentoEmissao($numeroOrcamentoEmissao)
    {
        $this->numeroOrcamentoEmissao = $numeroOrcamentoEmissao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfLogado()
    {
        return $this->cpfLogado;
    }

    /**
     * @param mixed $cpfLogado
     * @return CalculoRequest
     */
    public function setCpfLogado($cpfLogado)
    {
        $this->cpfLogado = $cpfLogado;
        return $this;
    }

}