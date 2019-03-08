# -*- coding: utf-8 -*-
import pandas as pd

def trataAplicacoes(cod:object, pos:int):
    dados = applicacao.loc[applicacao['Código do Produto'] == cod]
    if dados['Código do Produto'].count() == 1:
        dfLista.at[pos, 'Linha'] = '{}'.format(dados.at[dados.index.item(), 'Tipo de Aplicação'])
    elif dados['Código do Produto'].count() == 0:
        dfLista.at[pos, 'Linha'] = ''
    else:
        consolidado = []
        dfLista.at[pos, 'Linha'] = '{}'.format(dados.at[0, 'Tipo de Aplicação'])
        for index, row in enumerate(dados.index):
            consolidado.append('{}'.format(applicacao.at[row, 'Tipo de Aplicação']))
        #dfLista.at[pos, 'Linha'] = consolidado


def trataReferencias(cod:object, pos:int):
    dados = referencia.loc[referencia['Código do Produto'] == cod]
    if dados['Código do Produto'].count() == 1:
        dfLista.at[pos, 'CodigoDaMontadora'] = '{}: {}'.format(referencia.at[dados.index.item(), 'Descrição do Fabricante do Veículo'],
                                                                   referencia.at[dados.index.item(), 'Números Referência'])
    elif dados['Código do Produto'].count() == 0:
        dfLista.at[pos, 'CodigoDaMontadora'] = ''
    else:
        consolidado = []
        for index, row in enumerate(dados.index):
            consolidado.append('{}: {}'.format(referencia.at[row, 'Descrição do Fabricante do Veículo'],
                                                   referencia.at[row, 'Números Referência']))
        dfLista.at[pos, 'CodigoDaMontadora'] = consolidado


def trataEquivalencias(cod:object, pos:int):
    blackList = ['Cod. Barras', 'AGCO', 'Agrale', 'Alfa Romeo', 'Asia Motors', 'Audi', 'Baldan', 'BMW', 'CASE',
                 'Caterpillar',
                 'CBT', 'Chrysler', 'Citroen', 'CLASS', 'Colombo', 'Cross Lander', 'Daewoo', 'DAF', 'Dodge', 'Fiat',
                 'FIAT ALLIS',
                 'FNH', 'FNM', 'Ford', 'GM', 'GMC', 'Gurgel', 'Honda', 'Hyster', 'Hyundai', 'IFLÓ', 'International',
                 'Iveco',
                 'J.F.', 'Jac', 'Jacto', 'JAN', 'Jeep', 'John Deere', 'Jumil', 'Kia', 'Komatsu', 'Lada', 'Land Rover',
                 'Man',
                 'Marchesan', 'Marcopolo', 'MARRUCCI', 'Mazda', 'Mercedes-Benz', 'Mini', 'Mitsubishi', 'New Holland',
                 'Nissan',
                 'Peugeot', 'Porsche', 'Projelmec', 'Randon', 'Renault', 'Scania', 'Seat', 'STARA', 'Subaru', 'Suzuki',
                 'Toyota',
                 'Troller', 'Valtra', 'Vence Tudo', 'Volkswagen', 'Volvo', 'Yale']
    dados = equivalencia.loc[(equivalencia['Código do Produto'] == cod) & (~equivalencia['Descrição do Fabricante'].isin(blackList))]
    if dados['Código do Produto'].count() == 1:
        dfLista.at[pos, 'CodigosSimilares'] = '{}: {}'.format(dados.at[dados.index.item(), 'Descrição do Fabricante'],
                                                                   dados.at[dados.index.item(), 'Número Referência (Número Fabricante)'])
    elif dados['Código do Produto'].count() == 0:
        dfLista.at[pos, 'CodigosSimilares'] = ''
    else:
        consolidado = []
        for index, row in enumerate(dados.index):
            consolidado.append('{}: {}'.format(equivalencia.at[row, 'Descrição do Fabricante'],
                                               equivalencia.at[row, 'Número Referência (Número Fabricante)']))
        dfLista.at[pos, 'CodigosSimilares'] = consolidado




#dicionário que irá conter todos os dados
dfLista = pd.DataFrame(columns=['CodigoDoFabricante', 'EAN', 'DUN', 'Marca', 'Fabricante',
                                'Nome', 'Descricao', 'NCM', 'CEST', 'CodigoDaMontadora',
                                'CodigosSimilares', 'CurvaABC', 'Linha', 'UnidadeDeMedida',
                                'QuantidadeNaCaixa', 'QuantidadeMinimaDeVenda', 'AlturaDaCaixa',
                                'LarguraDaCaixa', 'ComprimentoDaCaixa', 'AlturaDaEmbalagem',
                                'LarguraDaEmbalagem', 'ComprimentoDaEmbalagem', 'AlturaDoProduto',
                                'LarguraDoProduto', 'ComprimentoDoProduto', 'PesoDaCaixa', 'PesoDaEmbalagem',
                                'PesoLiquidoDoProduto', 'PesoBrutoDoProduto', 'OutrasInformacoes',
                                'CategoriaUniversalSmartPeca', 'CategoriaFonte', 'CategoriaGS1',
                                'AplicacaoUniversalSmartPeca', 'AplicacaoDaFonte', 'Status', 'Garantia',
                                'Sinonimo', 'Preco', 'CrossSell',
                                'CodigoUnico', 'Imagem'])


#abre pega os dados das planilhas
applicacao = pd.read_excel('SKF_2.xlsx', sheet_name='Aplicações', dtype={'Código do Produto': str, 'Veículo': str,
                                                                         'Fabricante': str, 'Ano': str, 'Motor': str,
                                                                         'Complemento da Aplicação': str, 'Grupo': str,
                                                                         'Posição': str, 'Números Referência': str,
                                                                         'Tipo de Aplicação': str})
referencia = pd.read_excel('SKF_2.xlsx', sheet_name='Referencia', dtype={'Código do Produto': str,
                                                                         'Descrição do Fabricante do Veículo': str,
                                                                         'Números Referência': str})
descricao_ean = pd.read_excel('SKF_2.xlsx', sheet_name='Descrição+EAN', dtype={'Código do Produto': str,
                                                                               'Descrição do Produto': str,
                                                                               'EAN': str})

ncm_peso = pd.read_excel('SKF_2.xlsx', sheet_name='NCM+Peso', dtype={'Código do Produto': str, 'Montadora': str,
                                                                     'Aplicação Resumida': str, 'NCM': str, 'Peso bruto': str,
                                                                     'Comprimento': str, 'Largura': str, 'Altura': str})

equivalencia = pd.read_excel('SKF_2.xlsx', sheet_name='Equivalencias 2', dtype={'Código do Produto': str, 'Descrição do Fabricante': str,
                                                                                'Número Referência (Número Fabricante)': str})


#remove caracters "-"
ncm_peso = ncm_peso.replace('-', )


applicacao['Tipo de Aplicação'] = applicacao['Tipo de Aplicação'].replace('Linha Pesada', 'Pesada').\
    replace('Linha Leve', 'Leve').replace('Linha Agrícola', 'Agrícola')
applicacao['Posição'] = applicacao['Posição'].replace('diant.', 'dianteiro').replace('tras.', 'traseiro').\
    replace('inf.', 'inferior').replace('sup.', 'superior').replace('ext.', 'externo').replace('int.', 'interno').\
    replace('interm.', 'intermediário').replace('veloc.', 'velocidade').\
    replace('dir.', 'direita').replace('esq.', 'esquerda')


#capitaliza os dados dos campos necessários
referencia['Descrição do Fabricante do Veículo'] = referencia['Descrição do Fabricante do Veículo'].str.capitalize()
applicacao['Grupo'] = applicacao['Grupo'].str.capitalize()



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


# padroniza as demais regras
for pos, cod in enumerate(dfLista['CodigoDoFabricante']):
    #trataAplicacoes(cod, pos)
    trataEquivalencias(cod, pos)
    trataReferencias(cod, pos)
    dfLista.at[pos, 'Nome'] = descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['Descrição do Produto'].unique()
    dfLista.at[pos, 'EAN'] = list(descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['EAN'])
    dfLista.at[pos, 'Marca'] = 'SKF'
    dfLista.at[pos, 'Fabricante'] = 'SKF'
    dfLista.at[pos, 'DUN'] = ''
    dfLista.at[pos, 'CEST'] = ''
    dfLista.at[pos, 'CurvaABC'] = ''
    dfLista.at[pos, 'Descricao'] = '{} {} {}'.format(dfLista['Nome'][pos], 'SKF', cod).replace("[", '').replace("]", '')
    dfLista.at[pos, 'UnidadeDeMedida'] = ''
    dfLista.at[pos, 'QuantidadeNaCaixa'] = ''
    dfLista.at[pos, 'QuantidadeMinimaDeVenda'] = ''
    dfLista.at[pos, 'AlturaDaCaixa'] = ''
    dfLista.at[pos, 'LarguraDaCaixa'] = ''
    dfLista.at[pos, 'ComprimentoDaCaixa'] = ''
    dfLista.at[pos, 'AlturaDaEmbalagem'] = ''
    dfLista.at[pos, 'LarguraDaEmbalagem'] = ''
    dfLista.at[pos, 'ComprimentoDaEmbalagem'] = ''
    dfLista.at[pos, 'PesoDaCaixa'] = ''
    dfLista.at[pos, 'PesoDaEmbalagem'] = ''
    dfLista.at[pos, 'PesoLiquidoDoProduto'] = ''
    dfLista.at[pos, 'CategoriaUniversalSmartPeca'] = ''
    dfLista.at[pos, 'CategoriaGS1'] = ''
    dfLista.at[pos, 'AplicacaoUniversalSmartPeca'] = ''
    dfLista.at[pos, 'Status'] = ''
    dfLista.at[pos, 'Garantia'] = ''
    dfLista.at[pos, 'Sinonimo'] = ''
    dfLista.at[pos, 'Preco'] = ''
    dfLista.at[pos, 'CrossSell'] = ''
    dfLista.at[pos, 'CodigoUnico'] = cod.replace('-', '').replace('/', '').replace(' ', '').replace('+', '')
    dfLista.at[pos, 'CodigoUnico'] = '{}{}'.format(dfLista['CodigoUnico'][pos].replace('*', ''), '0001')
    dfLista.at[pos, 'Imagem'] = ''
    dfLista.at[pos, 'NCM'] = ''
    dfLista.at[pos, 'AlturaDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Altura'].unique()
    dfLista.at[pos, 'LarguraDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Largura'].unique()
    dfLista.at[pos, 'ComprimentoDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Comprimento'].unique()
    dfLista.at[pos, 'PesoBrutoDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Peso bruto'].unique()
    dfLista.at[pos, 'Linha'] = list(applicacao.loc[applicacao['Código do Produto'] == cod]['Tipo de Aplicação'].unique())
    dfLista.at[pos, 'CategoriaFonte'] = list(applicacao.loc[applicacao['Código do Produto'] == cod]['Grupo'].unique())

dfLista = dfLista.replace("'", '')
dfLista = dfLista.replace('[', '')
dfLista = dfLista.replace(']', '')
dfLista['CodigosSimilares'] = dfLista['CodigosSimilares'].str.capitalize()

dfLista.to_excel("resultado.xlsx")
dfLista.loc[dfLista['CodigoDoFabricante'] == '6004'].to_json("resultado.json", force_ascii=False,
                                                             orient='records', lines=True)



