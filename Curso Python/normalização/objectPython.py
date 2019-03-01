from typing import Optional, List


class Aplicacao:
  chave: str
  chave1: str
  chave2: str
  chave3: str
  chave4: str

  def __init__(self, chave: str, chave1: str, chave2: str, chave3: str, chave4: str) -> None:
    self.chave = chave
    self.chave1 = chave1
    self.chave2 = chave2
    self.chave3 = chave3
    self.chave4 = chave4


class Categoria:
  nivel1: str
  nivel2: str
  nivel3: str
  nivel4: Optional[str]

  def __init__(self, nivel1: str, nivel2: str, nivel3: str, nivel4: Optional[str]) -> None:
    self.nivel1 = nivel1
    self.nivel2 = nivel2
    self.nivel3 = nivel3
    self.nivel4 = nivel4


class CodigoDaMontadora:
  chevrolet: int
  ford: str

  def __init__(self, chevrolet: int, ford: str) -> None:
    self.chevrolet = chevrolet
    self.ford = ford


class CodigosSimilares:
  valeo: int
  zf: int
  driveway: str

  def __init__(self, valeo: int, zf: int, driveway: str) -> None:
    self.valeo = valeo
    self.zf = zf
    self.driveway = driveway


class OutrasInformacoe:
  cambio: List[str]
  pis: str

  def __init__(self, cambio: List[str], pis: str) -> None:
    self.cambio = cambio
    self.pis = pis


class ProdutoElement:
  codigo_do_fabricante: str
  ean: List[str]
  dun: str
  marca: str
  fabricante: str
  nome: str
  descricao: str
  ncm: int
  cest: str
  codigo_da_montadora: CodigoDaMontadora
  codigos_similares: CodigosSimilares
  curva_abc: str
  linha: str
  unidade_de_medida: str
  quantidade_na_caixa: int
  quantidade_minima_de_venda: int
  altura_da_caixa: int
  largura_da_caixa: int
  comprimento_da_caixa: int
  altura_da_embalagem: int
  largura_da_embalagem: int
  comprimento_da_embalagem: int
  altura_do_produto: int
  largura_do_produto: int
  comprimento_do_produto: int
  peso_da_caixa: str
  peso_da_embalagem: str
  peso_liquido_do_produto: str
  peso_bruto_do_produto: str
  outras_informacoes: List[OutrasInformacoe]
  categoria_universal_smart_peca: Categoria
  categoria_fonte: Categoria
  categoria_gs1: Categoria
  aplicacao_universal_smart_peca: Aplicacao
  aplicacao_da_fonte: Aplicacao
  status: str
  garantia: str
  sinonimo: str
  preco: str
  cross_sell: List[str]
  codigo_unico: str
  imagem: str

  def __init__(self, codigo_do_fabricante: str, ean: List[str], dun: str, marca: str, fabricante: str, nome: str, descricao: str, ncm: int, cest: str, codigo_da_montadora: CodigoDaMontadora, codigos_similares: CodigosSimilares, curva_abc: str, linha: str, unidade_de_medida: str, quantidade_na_caixa: int, quantidade_minima_de_venda: int, altura_da_caixa: int, largura_da_caixa: int, comprimento_da_caixa: int, altura_da_embalagem: int, largura_da_embalagem: int, comprimento_da_embalagem: int, altura_do_produto: int, largura_do_produto: int, comprimento_do_produto: int, peso_da_caixa: str, peso_da_embalagem: str, peso_liquido_do_produto: str, peso_bruto_do_produto: str, outras_informacoes: List[OutrasInformacoe], categoria_universal_smart_peca: Categoria, categoria_fonte: Categoria, categoria_gs1: Categoria, aplicacao_universal_smart_peca: Aplicacao, aplicacao_da_fonte: Aplicacao, status: str, garantia: str, sinonimo: str, preco: str, cross_sell: List[str], codigo_unico: str, imagem: str) -> None:
    self.codigo_do_fabricante = codigo_do_fabricante
    self.ean = ean
    self.dun = dun
    self.marca = marca
    self.fabricante = fabricante
    self.nome = nome
    self.descricao = descricao
    self.ncm = ncm
    self.cest = cest
    self.codigo_da_montadora = codigo_da_montadora
    self.codigos_similares = codigos_similares
    self.curva_abc = curva_abc
    self.linha = linha
    self.unidade_de_medida = unidade_de_medida
    self.quantidade_na_caixa = quantidade_na_caixa
    self.quantidade_minima_de_venda = quantidade_minima_de_venda
    self.altura_da_caixa = altura_da_caixa
    self.largura_da_caixa = largura_da_caixa
    self.comprimento_da_caixa = comprimento_da_caixa
    self.altura_da_embalagem = altura_da_embalagem
    self.largura_da_embalagem = largura_da_embalagem
    self.comprimento_da_embalagem = comprimento_da_embalagem
    self.altura_do_produto = altura_do_produto
    self.largura_do_produto = largura_do_produto
    self.comprimento_do_produto = comprimento_do_produto
    self.peso_da_caixa = peso_da_caixa
    self.peso_da_embalagem = peso_da_embalagem
    self.peso_liquido_do_produto = peso_liquido_do_produto
    self.peso_bruto_do_produto = peso_bruto_do_produto
    self.outras_informacoes = outras_informacoes
    self.categoria_universal_smart_peca = categoria_universal_smart_peca
    self.categoria_fonte = categoria_fonte
    self.categoria_gs1 = categoria_gs1
    self.aplicacao_universal_smart_peca = aplicacao_universal_smart_peca
    self.aplicacao_da_fonte = aplicacao_da_fonte
    self.status = status
    self.garantia = garantia
    self.sinonimo = sinonimo
    self.preco = preco
    self.cross_sell = cross_sell
    self.codigo_unico = codigo_unico
    self.imagem = imagem

import csv

arquivo = open('SKF_2.csv')
produtos = csv.DictReader(arquivo)
for produto in produtos:
    print(produto['Código do Produto'])
    p = ProdutoElement(produto['Código do Produto'], produto['EAN'], produto['DUN'], ...getrs do produto)

## ---> p recebe o conteudo e pode ser usado com a biblioteca json para serializar o objeto em json