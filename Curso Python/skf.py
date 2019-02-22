import pandas as pd
from pandas import ExcelWriter
from pandas import ExcelFile

#abre pega os dados das planilhas
applicacao = pd.read_excel('SKF_2.xlsx', sheet_name='Aplicações')
referencia = pd.read_excel('SKF_2.xlsx', sheet_name='Referencia')
descricao_ean = pd.read_excel('SKF_2.xlsx', sheet_name='Descrição+EAN')
ncm_peso = pd.read_excel('SKF_2.xlsx', sheet_name='NCM+Peso')
#dicionário que irá conter todos os dados
lista = {'CodigoDoFabricante':[],'EAN':[],'DUN':[],'Marca':[],'Fabricante':[],
         'Nome':[],'Descricao':[],'NCM':[],'CEST':[],'CodigoDaMontadora':[],
         'CodigosSimilares':[],'CurvaABC':[],'Linha':[],'UnidadeDeMedida':[],
         'QuantidadeNaCaixa':[],'QuantidadeMinimaDeVenda':[],'AlturaDaCaixa':[],
         'LarguraDaCaixa':[],'ComprimentoDaCaixa':[],'AlturaDaEmbalagem':[],
         'LarguraDaEmbalagem':[],'ComprimentoDaEmbalagem':[],'AlturaDoProduto':[],
         'LarguraDoProduto':[],'ComprimentoDoProduto':[],'PesoDaCaixa':[],'PesoDaEmbalagem':[],
         'PesoLiquidoDoProduto':[],'PesoBrutoDoProduto':[],'OutrasInformacoes':[],
         'CategoriaUniversalSmartPeca':[],'CategoriaFonte':[],'CategoriaGS1':[],
         'AplicacaoUniversalSmartPeca':[],'AplicacaoDaFonte':[],'Status':[],'Garantia':[],
         'Sinonimo':[],'Preco':[],'CrossSell':[],
         'CodigoUnico':[],'Imagem':[]}

codigoDoFabricante = []


#pega os dados de código do fabricante de cada sheet
for i in applicacao.index:
    codigoDoFabricante.append(applicacao['Código do Produto'][i])

for i in ncm_peso.index:
    codigoDoFabricante.append(ncm_peso['Código do Produto'][i])

for i in referencia.index:
    codigoDoFabricante.append(referencia['Código do Produto'][i])

for i in descricao_ean.index:
    codigoDoFabricante.append(descricao_ean['Código do Produto'][i])


#remove os duplicados
codigoDoFabricante =list(dict.fromkeys(codigoDoFabricante))

#inseri dados no indice Codigo do Fabricante sem as duplicidades
lista['CodigoDoFabricante'] = codigoDoFabricante

print(lista.values())
