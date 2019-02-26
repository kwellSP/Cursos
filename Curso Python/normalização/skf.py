import pandas as pd
import numpy as np

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


#abre pega os dados das planilhas
applicacao = pd.read_excel('SKF_2.xlsx', sheet_name='Aplicações')
referencia = pd.read_excel('SKF_2.xlsx', sheet_name='Referencia')
descricao_ean = pd.read_excel('SKF_2.xlsx', sheet_name='Descrição+EAN')
ncm_peso = pd.read_excel('SKF_2.xlsx', sheet_name='NCM+Peso')
equivalencia = pd.read_excel('SKF_2.xlsx', sheet_name='Equivalencias 2')


#apaga as colunas não utilizadas
applicacao = applicacao.drop(columns="Números Referência")


#unifica as guias pelo código do produto
unificados = pd.merge(applicacao, referencia, sort=False, on='Código do Produto', how='outer')
unificados = pd.merge(unificados, descricao_ean, sort=False, on='Código do Produto', how='outer')
unificados = pd.merge(unificados, ncm_peso, sort=False, on='Código do Produto', how='outer')
unificados = pd.merge(unificados, equivalencia, sort=False, on='Código do Produto', how='left')


#padroniza os dados das colunas

#inseri os códigos de produto únicos (regra 01)
dfLista['CodigoDoFabricante'] = unificados['Código do Produto'].unique()

#formata regras 3
#dfLista['DUN'].fillna('')

#formata regras 4
#dfLista['Marca'].fillna('SKF')

#formata regras 5
#dfLista['Fabricante'].replace(np.nan, 'SKF')

#formata regras 9
#dfLista['CEST'].replace(np.nan, '')

#formata regras 12
#dfLista['CurvaABC'].fillna('')

# padroniza as demais regras

for pos, cod in enumerate(dfLista['CodigoDoFabricante']):
    print('Posição = ', pos, ' e item = ', cod)
exit(-1)




