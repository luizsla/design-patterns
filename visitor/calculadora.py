# -*- coding: utf-8 -*-
#Métodos de cálculo implementados com base no padrão Interpreter.
class Expressao(object):
    from abc import ABCMeta, abstractmethod
    """Class abstrata que responsabiliza as filhas a implementar o padrão de projeto"""
    __metaclass__ = ABCMeta

    @abstractmethod
    def valida(self):
        pass

class Soma(Expressao):
    """Classe responsável soma de dois objetos de valores"""

    def __init__(self, valor_1, valor_2):
        self.__valor_1 = valor_1
        self.__valor_2 = valor_2

    @property
    def valor_1(self):
        return self.__valor_1

    @property
    def valor_2(self):
        return self.__valor_2

    def valida(self):
        return self.__valor_1.valida() + self.__valor_2.valida()

    def imprime(self, visitor):
        """Chama o método do objeto do tipo visitor que fará a impressão da estrutura de soma
        passando como parâmetro o próprio objeto do tipo soma"""

        visitor.imprime_soma(self)

class Subtracao(Expressao):
    """Classe responsável pela subtração de dois valores"""

    def __init__(self, valor_1, valor_2):
        self.__valor_1 = valor_1
        self.__valor_2 = valor_2

    @property
    def valor_1(self):
        return self.__valor_1

    @property
    def valor_2(self):
        return self.__valor_2

    def valida(self):
        return self.__valor_1.valida() - self.__valor_2.valida()

    def imprime(self, visitor):
        """Chama o método do objeto do tipo visitor que fará a impressão da estrutura de soma
        passando como parâmetro o próprio objeto do tipo soma"""

        visitor.imprime_subtracao(self)

class Valor(object):
    """Classe de intância dos objetos de valor"""

    def __init__(self, valor):
        self.__valor = valor

    def valida(self):
        return self.__valor

    def imprime(self, visitor):
        visitor.imprime_numero(self)

################################################################################
if __name__ == '__main__':
    from calculadora_visitor import Visitor

    imprime_array = Visitor()

    subtracao = Subtracao(Valor(40), Valor(20))
    soma = Soma(Valor(70), Valor(15))

    resultado = Soma(soma, subtracao)

    subtracao.imprime(imprime_array)
