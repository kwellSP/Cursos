import pandas as pd
import numpy as np

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

print(dfLista.dtypes)
