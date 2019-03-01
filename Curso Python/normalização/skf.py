import pandas as pd

def trataReferencias(cod:object):
    for index, row in referencia.loc[referencia['Código do Produto'] == cod].iterrows():
        print('Codigo = {}  '.format(referencia['Código do Produto'][row]))


#    for campo in referencia.loc[referencia['Código do Produto'] == cod]:
#        for posicao,valor in enumerate(campo):
#            print('{} = {} posição = {}'.format(campo, referencia[campo][posicao], posicao))


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
#remove caracters "-"
ncm_peso = ncm_peso.replace('-', )


equivalencia = pd.read_excel('SKF_2.xlsx', sheet_name='Equivalencias 2', dtype={'Código do Produto': str, 'Descrição do Fabricante': str,
                                                                                'Número Referência (Número Fabricante)': str})


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
    trataReferencias(cod)
'''''''''
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
    
dfLista = dfLista.replace("'", '')
dfLista = dfLista.replace('[', '')
dfLista = dfLista.replace(']', '')
dfLista.to_excel("resultado.xlsx")
exit(-1)
'''''