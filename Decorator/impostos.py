# -*- coding: UTF-8 -*-
#importando do módulo abc o ABCMeta e o @abstractmethod
from abc import ABCMeta, abstractmethod

class Imposto(object):
    """Classe abstrata imposto que implementa o construtor que serve para decorar a clase"""
    #Definindo que a classe é abstrata.
    __metaclass__ = ABCMeta

    def __init__(self, outro_imposto = None):
        self.__outro_imposto = outro_imposto

    @abstractmethod
    def calcula(self, orcamento):
        pass

    def calcula_outro_imposto(self, orcamento):
        """Método que calcula o outro imposto passado por decoração"""
        if (self.__outro_imposto is None):
            return 0
        else:
            return self.__outro_imposto.calcula(orcamento)

class ICMS(Imposto):
    """ Regra de implementação do imposto ICMS"""

    def calcula(self, orcamento):
        """Calcula o valor do imposto sobre o orçamento passado de acordo com ICMS """
        return orcamento.valor * 0.1 + self.calcula_outro_imposto(orcamento)

class ISS(Imposto):
    """ Regra de implementação do imposto ISS """

    def calcula(self, orcamento):
        """Calcula o valor do imposto sobre o orçamento passado de acordo com ISS"""
        return orcamento.valor * 0.06 + self.calcula_outro_imposto(orcamento)

class Imposto_condicional(Imposto):
    """ Declarando classe abstrata que servirá de template para os outros impostos. """

    #Fazendo a classe uma classe abstrata
    __metaclass__ = ABCMeta

    def calcula(self, orcamento):
        if (self.condicao(orcamento)):
            return self.imposto_maior(orcamento)
        else:
            return self.imposto_menor(orcamento)

    @abstractmethod
    def _condicao(self, orcamento): pass

    @abstractmethod
    def _imposto_maior(self, orcamento): pass

    @abstractmethod
    def _imposto_menor(self, orcamento): pass


#Classes concretas de imposto que herdam da classe abstrata Imposto_condicional.
class IKCV(Imposto_condicional):
    """ Classe de imposto que herda do template Imposto_condicional """

    def condicao(self, orcamento):
        return orcamento.valor > 1000

    def imposto_maior(self, orcamento):
        return orcamento.valor * 0.1 + self.calcula_outro_imposto(orcamento)

    def imposto_menor(self, orcamento):
        return orcamento.valor * 0.06 + self.calcula_outro_imposto(orcamento)

#Classes concretas de imposto que herdam da classe abstrata Imposto_condicional.
class ICPP(Imposto_condicional):
    """ Classe de imposto que herda do template Imposto_condicional """

    def condicao(self, orcamento):
        return orcamento.valor > 500

    def imposto_maior(self, orcamento):
        return orcamento.valor * 0.1 + self.calcula_outro_imposto(orcamento)

    def imposto_menor(self, orcamento):
        return orcamento.valor * 0.06 + self.calcula_outro_imposto(orcamento)
