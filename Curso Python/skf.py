import pandas as pd
from pandas import ExcelWriter
from pandas import ExcelFile

#abre pega os dados das planilhas
applicacao = pd.read_excel('SKF_2.xlsx', sheet_name='Aplicações')
referencia = pd.read_excel('SKF_2.xlsx', sheet_name='Referencia')
descricao_ean = pd.read_excel('SKF_2.xlsx', sheet_name='Descrição+EAN')
ncm_peso = pd.read_excel('SKF_2.xlsx', sheet_name='NCM+Peso')
equivalencia = pd.read_excel('SKF_2.xlsx', sheet_name='Equivalencias 2')


#apaga as colunas não utilizadas
applicacao = applicacao.drop(columns="Números Referência")


#unifica as guias pelo código do produto
unificados = pd.merge(applicacao, referencia, sort=False, on='Código do Produto', how='left')
unificados = pd.merge(unificados, descricao_ean, sort=False, on='Código do Produto', how='left')
unificados = pd.merge(unificados, ncm_peso, sort=False, on='Código do Produto', how='left')
unificados = pd.merge(unificados, equivalencia, sort=False, on='Código do Produto', how='left')


#padroniza os dados das colunas




#dicionário que irá conter todos os dados
lista = {'CodigoDoFabricante': [], 'EAN': [], 'DUN': [], 'Marca': [], 'Fabricante': [],
         'Nome': [], 'Descricao': [], 'NCM': [], 'CEST': [], 'CodigoDaMontadora': [],
         'CodigosSimilares': [], 'CurvaABC': [], 'Linha': [], 'UnidadeDeMedida': [],
         'QuantidadeNaCaixa': [], 'QuantidadeMinimaDeVenda': [], 'AlturaDaCaixa': [],
         'LarguraDaCaixa': [], 'ComprimentoDaCaixa': [], 'AlturaDaEmbalagem': [],
         'LarguraDaEmbalagem': [], 'ComprimentoDaEmbalagem': [], 'AlturaDoProduto': [],
         'LarguraDoProduto': [], 'ComprimentoDoProduto': [], 'PesoDaCaixa': [], 'PesoDaEmbalagem': [],
         'PesoLiquidoDoProduto': [], 'PesoBrutoDoProduto': [], 'OutrasInformacoes': [],
         'CategoriaUniversalSmartPeca': [], 'CategoriaFonte': [], 'CategoriaGS1': [],
         'AplicacaoUniversalSmartPeca': [], 'AplicacaoDaFonte': [], 'Status': [], 'Garantia': [],
         'Sinonimo': [], 'Preco': [], 'CrossSell': [],
         'CodigoUnico': [], 'Imagem': []}

dfLista = pd.DataFrame(data=lista)

print(len(unificados['Código do Produto'].unique()))

'''
for i in range(5):
    dfLista = dfLista.append({'CodigoDoFabricante': i}, ignore_index=True)
print(dfLista['CodigoDoFabricante'][4])
exit(-1)

print(unificados['Código do Produto'][0])
exit(-1)

for pos, itens in enumerate(unificados):
    print(unificados[itens])
'''

#dfLista.append([{CodigoDoFabricante}, ignore_index=True)

