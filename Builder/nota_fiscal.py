# -*- coding: UTF-8 -*-
from datetime import date

class Item(object):

    def __init__(self, descricao, valor):
        self.__descricao = descricao
        self.__valor = valor

    @property
    def descricao(self):
        return self.__descricao

    @property
    def valor(self):
        return self.__valor

class Nota_fiscal(object):
    """Classe para a instancia de objetos do tipo Nota_fiscal"""
    def __init__(self, razao_social, cnpj, itens, data_de_emissao = date.today(), detalhes = "Sem detalhes"):
        self.__razao_social = razao_social
        self.__cnpj = cnpj
        self.__data_de_emissao = data_de_emissao
        if len(detalhes) > 20:
            raise Exception('Detalhes da nota não pode ter mais do que 20 caracteres')
        self.__detalhes = detalhes
        self.__itens = itens

    @property
    def razao_social(self):
        return self.__razao_social

    @property
    def cnpj(self):
        return self.__cnpj

    @property
    def data_de_emissao(self):
        return self.__data_de_emissao

    @property
    def detalhes(self):
        return self.__detalhes

if __name__ == '__main__':
    from nota_fiscal_builder import Nota_fiscal_builder

    #Criação do objeto sem o uso do builder.
    itens = [Item("Item A", 100), ("Item B", 200)]

    nota_fiscal = Nota_fiscal("Mega Eletro", "012345678901234", itens, date.today(), "")

    #Criação do objeto com o uso do builder.
    nota_fiscal_2 = Nota_fiscal_builder()
                        .com_razao_social("Cléristom M.E")
                        .com_cnpj("XXXX")
                        .com_detalhes("Nota fiscal novinha em folha")
                        .com_itens(itens)
