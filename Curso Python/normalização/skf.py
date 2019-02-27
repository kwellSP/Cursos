import pandas as pd

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


# padroniza as demais regras
for pos, cod in enumerate(dfLista['CodigoDoFabricante']):
    #for pos2, cod2 in enumerate(descricao_ean):
    #print("Codigo ", cod, "Descrição", descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['Descrição do Produto'].unique())
    #dfLista.at[pos, 'Nome'] = descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['Descrição do Produto'].unique()
    dfLista.at[pos, 'Marca'] = 'SKF'
    dfLista.at[pos, 'Fabricante'] = 'SKF'
    dfLista.at[pos, 'DUN'] = ''
    dfLista.at[pos, 'CEST'] = ''
    dfLista.at[pos, 'CurvaABC'] = ''
    dfLista.at[pos, 'Descricao'] = '{} {} {}'.format(dfLista['Nome'][pos], 'SKF', cod)
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
    dfLista.at[pos, 'CodigoUnico'] = dfLista['CodigoUnico'][pos].replace('*', ''), '0001'
    dfLista.at[pos, 'Imagem'] = ''
    #print('Posição = ', pos, ' e item = ', cod)
print(dfLista['Descricao'])
exit(-1)




