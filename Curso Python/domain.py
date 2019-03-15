from decimal import Decimal
class Relationship:
    """Classe que represente um relacionamento entre DataTables

       Essa classe tem todas as informações que identificam um
       relacionamento entre tabelas. Em qual coluna ele existe,
       de onde vem e para onde vai.
    """
    def __init__(self, name, _from, to, on):
        """Contrutor
            Args:
                name: Nome
                from: Tabela de onde sai
                to: Tabela pra onde vai
                on: instância de coluna onde existe
        """
        self._name = name
        self._from = _from
        self._to = to
        self._on = on


class DataTable:
    """ Representa uma tabela de dados.

        Essa classe representea uma tabela de dados do porta
        da transparência. Deve ser capaz de validar linhas
        inseridas de acordo com as colunas que possui. As
        linhas inseridas ficam registradass dentro dela.

        Attributes:
             nome: Nome da Tabela
             columns: [Lista de colunas]
             data: [Lista de dados]
    """

    def __init__(self, name):
        """Construtor

           Args:
               name:Nome da Tabela
        """
        self._name = name
        self._columns = []
        self._data = []
        self._references = []
        self._referenced = []

    def _get_name(self):
        print("Getter Executado!")
        return self._name

    def _set_name(self, _name):
        print("Setter Executado")
        self._name = _name

    def _del_name(self):
        print("Deletter Executado!")
        raise AttributeError("Não pode deletar esse atributo")

    name = property(_get_name, _set_name, _del_name)

    def add_column(self, name, kind, description):
        column = Column(name, kind, description)
        self._columns.append(column)
        return column

    def add_references(self, name, to, on):
        """Cria uma referencia dessa tabela para uma outra tabela

        Args:
        name: nome da relação
        to: instância da tabela apontada
        on: instância coluna em que existe a relação
        """
        relationship = Relationship(name, self, to, on)
        self._references.append(relationship)

    def add_referenced(self, name, by, on):
        """Cria uma referência para outra tabela que aponta para
        essa.
        Args:
        name: nome da relação
        by: instância da tabela que aponta para essa
        on: instância coluna em que existe a relação
        """
        relationship = relationship(name, by, self, on)
        self.referenced.append(relationship)


class Column:
    """Representa uma coluna em um DataTable
       Essa clase contém as informações de uma coluna
       e deve validar um dado de acordo com o tipo de
       dado configurado no construtor.

       Atrributes:
           name: Nome da Coluna
           king: Tipo do Dado(varchar, bigint, numeric)
           description: Descrição da coluna
        """
    def __init__(self, name, kind, description=""):
        """ Construtor

            Args:
                name: Nome da Coluna
                kind: Tipo de Dado(varchar, bigint, numeric)
                description: Descrição da coluna
            """
        self._name = name
        self._kind = kind
        self._description = description
        self._is_pk = False

    def __str__(self):
        _str = "Col: {} : {} {}".format(self._name,
                                        self._kind,
                                        self._description)
        return _str

    def _validate(cls, kind, data):
        if kind == 'bigint':
            if isinstance(data, int):
                return True
            return False
        elif kind == 'varchar':
            if isinstance(data, str):
                return True
            return False
        elif kind == 'numeric':
            try:
                val = Decimal(data)
            except:
                return False
            return True

    validate = classmethod(_validate)



class PrimaryKey(Column):
    def __init__(self, table, name, kind, description=None):
        super().__init__(name, kind, description)
        self._is_pk = True

    def __str__(self):
        _str = "Col: {} : {} {}".format(self._name,
                                        self._kind,
                                        self._description)
        return "{} - {}".format('PK', _str)

