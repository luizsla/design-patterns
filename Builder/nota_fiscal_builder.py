class Nota_fiscal_builder(object):
    """Classe criadora de objetos do tipo Nota_fiscal de acordo com o padrão builder."""

    def __init__(self):
        """Método construtor da classe builder. Todos os atributos serão nulos"""
        self.__razao_social = None
        self.__cnpj = None
        self.__data_de_emissao = None
        self.__detalhes = None
        self.__itens =  None

    #Métodos que atribuem parâmetros aos atributos.
    def com_razao_social(self, razao_social):
        self.__razao_social = razao_social
        return self

    def com_cnpj(self, cnpj):
        self.__cnpj = cnpj
        return self

    def com_data_de_emissao(self, data_de_emissao):
        self.__data_de_emissao = data_de_emissao
        return self

    def com_detalhes(self, detalhes):
        self.com_detalhes = detalhes
        return self

    def com_itens(self, itens):
        self.__itens = itens
        return self

    def cria(self):
        """Método que cria o objeto do tipo Nota_fiscal"""
        if (self.__razao_social is None):
            raise Exception("Nota fiscal necessita de Rasão Social")
        if (self.__cnpj is None):
            raise Exception("Nota fiscal necessita de CNPJ")
        if (self.__data_de_emissao is None):
            #Atribui a data da criação do objeto à do lançamento da nota caso data não seja passada
            self.__data_de_emissao = date.today()
        if (self.__detalhes is None):
            self.__detalhes = "Sem detalhes"
        if (self.__com_itens is None):
            raise Exception("Nota fiscal necessita ter produtos vinculados")

        #Retorno do objetos criado.
        return Nota_fiscal(self.__razao_social,
                           self.__cnpj,
                           self.__data_de_emissao,
                           self.__detalhes,
                           self.__itens)
