# -*- coding: utf-8 -*-
import pandas as pd


def listarCarros(anoInicial:int, anoFinal:int, veiculos:list(), fabricante:object, motor:object, complemento:object):
    carros = pd.DataFrame(columns=['fabricante', 'veiculo', 'motor', 'ano', 'complemento'])
    if anoInicial != 0 and anoFinal == 0:
        if len(veiculos) == 0:
            carros = carros.append({'fabricante': fabricante, 'veiculo': '', 'motor': motor, 'ano': anoInicial,
                                    'complemento': complemento}, ignore_index=True)
        elif len(veiculos) == 1:
            carros = carros.append({'fabricante': fabricante, 'veiculo': veiculos[0], 'motor': motor, 'ano': anoInicial,
                                    'complemento': complemento}, ignore_index=True)
        elif len(veiculos) > 1:
            for car in veiculos[1:]:
                carros = carros.append(
                    {'fabricante': fabricante, 'veiculo': '{}{}'.format(veiculos[0], car), 'motor': motor, 'ano': anoInicial,
                     'complemento': complemento}, ignore_index=True)
    elif anoInicial != 0 and anoFinal != 0:
        ano = anoInicial
        while(ano<= anoFinal):
            if len(veiculos) == 0:
                carros = carros.append({'fabricante': fabricante, 'veiculo': '', 'motor': motor, 'ano': ano,
                                        'complemento': complemento}, ignore_index=True)
            elif len(veiculos) == 1:
                carros = carros.append(
                    {'fabricante': fabricante, 'veiculo': veiculos[0], 'motor': motor, 'ano': ano,
                     'complemento': complemento}, ignore_index=True)
            elif len(veiculos) > 1:
                for car in veiculos[1:]:
                    carros = carros.append(
                        {'fabricante': fabricante, 'veiculo': '{}{}'.format(veiculos[0], car), 'motor': motor,
                         'ano': ano,
                         'complemento': complemento}, ignore_index=True)
            ano = ano + 1
    elif anoInicial == 0 and anoFinal  == 0:
        if len(veiculos) == 0:
            carros = carros.append({'fabricante': fabricante, 'veiculo': '', 'motor': motor, 'ano': '',
                                    'complemento': complemento}, ignore_index=True)
        elif len(veiculos) == 1:
            carros = carros.append(
                {'fabricante': fabricante, 'veiculo': veiculos[0], 'motor': motor, 'ano': '',
                 'complemento': complemento}, ignore_index=True)
        elif len(veiculos) > 1:
            for car in veiculos[1:]:
                carros = carros.append(
                    {'fabricante': fabricante, 'veiculo': '{}{}'.format(veiculos[0], car), 'motor': motor,
                     'ano': '',
                     'complemento': complemento}, ignore_index=True)

    return carros.drop_duplicates(keep=False)


def trataVeiculos(veiculo: object):
    if veiculo.count('Trator') > 0 or \
            veiculo.count('Colheitadeira') > 0 or \
            veiculo.count('Plantadeira') > 0 or \
            veiculo.count('Colheitadeiras') > 0 or veiculo.count('Distribuidor') > 0:
        veiculo = veiculo.replace(' ', '/', 1)
    return list(filter(None, veiculo.replace(' e ', '/').replace(',', '/').split('/')))


def ajustaAno(ano: object):
    if len(ano) == 4:
        return int(ano)
    elif int(ano) < 50 and ano != '0':
        return int('{}{}'.format('20', ano))
    elif int(ano) >= 50 and ano != '0':
        return int('{}{}'.format('19', ano))
    else:
        return 0


def trataAno(ano: object):
    ano = ano.replace(' ', '.')
    ano = ano.replace('-', '/')
    ano = ano.replace('?', '.')
    anos = list(filter(None, ano.split('.')))
    datas = {'anoInicial': '0', 'anoFinal': '0'}
    if len(anos) >= 1 and anos[0].count('/') == 0 and (len(anos[0]) == 4 or len(anos[0]) == 2):
        datas['anoInicial'] = anos[0]
    elif len(anos) >= 1 and anos[0].count('/') == 1 and len(anos[0]) == 5:
        datas['anoInicial'] = anos[0][3:]

    if len(anos) == 2 and anos[1].count('/') == 0 and (len(anos[1]) == 4 or len(anos[1]) == 2):
        datas['anoFinal'] = anos[1]
    elif len(anos) == 2 and anos[1].count('/') == 1 and len(anos[1]) == 5:
        datas['anoFinal'] = anos[1][3:]

    years = list()
    years.append(ajustaAno(datas['anoInicial']))
    years.append(ajustaAno(datas['anoFinal']))

    return years


def trataAplicacaoFonte(cod:object):
    carros = pd.DataFrame(columns=['fabricante', 'veiculo', 'motor', 'ano', 'complemento'])
    anos = list()
    dados = applicacao.loc[applicacao['Código do Produto'] == cod]
    dados = dados.drop_duplicates(keep=False)
    dados.fillna('', inplace=True)
    dados['Complemento da Aplicação'].str.replace('"', '.')

    if dados['Código do Produto'].count() == 1:
        anos = trataAno(dados.at[dados.index.item(), 'Ano'])
        carros = listarCarros(anos[0], anos[1], trataVeiculos(dados.at[dados.index.item(), 'Veículo']),
                                                              dados.at[dados.index.item(), 'Fabricante'],
                                                              dados.at[dados.index.item(), 'Motor'],
                                                              dados.at[dados.index.item(), 'Complemento da Aplicação'])
    elif dados['Código do Produto'].count() > 1:
        for index, row in enumerate(dados.index):
            anos = trataAno(dados.at[row, 'Ano'])
            carros = carros.append(listarCarros(anos[0], anos[1], trataVeiculos(dados.at[row, 'Veículo']),
                                                              dados.at[row, 'Fabricante'],
                                                              dados.at[row, 'Motor'],
                                                              dados.at[row, 'Complemento da Aplicação']), ignore_index=True)
    aplicacoesDaFonte = {}
    carros = carros.drop_duplicates(keep=False)
    for index, row in enumerate(carros.index):
        aplicacoesDaFonte['aplicacao{}'.format(row+1)] = '{} {} {} {} {}'.format(
            carros.at[row, 'fabricante'],
            carros.at[row, 'veiculo'],
            carros.at[row, 'motor'],
            carros.at[row, 'ano'],
            carros.at[row, 'complemento'])

    return aplicacoesDaFonte


def trataAplicacaoResumida(cod:object, pos:int):
    dados = ncm_peso.loc[(ncm_peso['Código do Produto'] == cod) & (ncm_peso['Montadora'] != '-')]
    if dados['Código do Produto'].count() == 1:
        consolidado = []
        consolidado.append('{} {}'.format(dados.at[dados.index.item(), 'Montadora'],
                                          dados.at[dados.index.item(), 'Aplicação Resumida']))
        return consolidado
    elif dados['Código do Produto'].count() == 0:
        return ''
    else:
        consolidado = []
        for index, row in enumerate(dados.index):
            consolidado.append('{} {}'.format(dados.at[row, 'Montadora'], dados.at[row, 'Aplicação Resumida']))
        return consolidado


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

#remove a palavra Linha + espaçõ
applicacao['Tipo de Aplicação'] = applicacao['Tipo de Aplicação'].str.replace('Linha ', '')

#padroniza a nomenclatura do campo posição
applicacao['Posição'] = applicacao['Posição'].str.replace('diant.', 'dianteiro')
applicacao['Posição'] = applicacao['Posição'].str.replace('tras.', 'traseiro')
applicacao['Posição'] = applicacao['Posição'].str.replace('inf.', 'inferior')
applicacao['Posição'] = applicacao['Posição'].str.replace('sup.', 'superior')
applicacao['Posição'] = applicacao['Posição'].str.replace('ext.', 'exterior')
applicacao['Posição'] = applicacao['Posição'].str.replace('int.', 'interior')
applicacao['Posição'] = applicacao['Posição'].str.replace('interm.', 'intermediário')
applicacao['Posição'] = applicacao['Posição'].str.replace('veloc.', 'velocidade')
applicacao['Posição'] = applicacao['Posição'].str.replace('dir.', 'direita')
applicacao['Posição'] = applicacao['Posição'].str.replace('esq.', 'esquerda')

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

#inseri os códigos de produto únicos (regra 01)
dfLista['CodigoDoFabricante'] = unificados['Código do Produto'].unique()

# gera os dados com as regras aplicadas através das funções
for pos, cod in enumerate(dfLista['CodigoDoFabricante']):
    dfLista.at[pos, 'AplicacaoDaFonte'] = trataAplicacaoFonte(cod)
    dfLista.at[pos, 'OutrasInformacoes'] = [
        {"posicao": applicacao['Posição'].loc[applicacao['Código do Produto'] == cod].unique()},
        {"aplicacaoResumida": trataAplicacaoResumida(cod, pos)}
    ]
    trataEquivalencias(cod, pos)
    trataReferencias(cod, pos)
    dfLista.at[pos, 'Nome'] = descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['Descrição do Produto'].unique()
    dfLista.at[pos, 'EAN'] = list(descricao_ean.loc[descricao_ean['Código do Produto'] == cod]['EAN'])
    dfLista.at[pos, 'Marca'] = 'SKF'
    dfLista.at[pos, 'Fabricante'] = 'SKF'
    dfLista.at[pos, 'Descricao'] = '{} {} {}'.format(dfLista['Nome'][pos], 'SKF', cod).replace("[", '').replace("]", '')
    dfLista.at[pos, 'CodigoUnico'] = cod.replace('-', '').replace('/', '').replace(' ', '').replace('+', '')
    dfLista.at[pos, 'CodigoUnico'] = '{}{}'.format(dfLista['CodigoUnico'][pos].replace('*', ''), '0001')
    dfLista.at[pos, 'AlturaDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Altura'].unique()
    dfLista.at[pos, 'LarguraDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Largura'].unique()
    dfLista.at[pos, 'ComprimentoDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Comprimento'].unique()
    dfLista.at[pos, 'PesoBrutoDoProduto'] = ncm_peso.loc[ncm_peso['Código do Produto'] == cod]['Peso bruto'].unique()
    dfLista.at[pos, 'Linha'] = list(applicacao.loc[applicacao['Código do Produto'] == cod]['Tipo de Aplicação'].unique())
    dfLista.at[pos, 'CategoriaFonte'] = list(applicacao.loc[applicacao['Código do Produto'] == cod]['Grupo'].unique())

#capitaliza os dados dos Codigos Similares
dfLista['CodigosSimilares'] = dfLista['CodigosSimilares'].str.capitalize()
#substitui NaN por vazio
dfLista.fillna('', inplace=True)

#exporta para Excel e um Json com Apenas Um Fornecedor
dfLista.to_excel("resultado.xlsx")
dfLista.loc[dfLista['CodigoDoFabricante'] == '6001'].to_json("resultado.json", force_ascii=False,
                                                             orient='records', lines=True)

