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

    def valida(self):
        return self.__valor_1.valida() + self.__valor_2.valida()

class Subtracao(Expressao):
    """Classe responsável pela subtração de dois valores"""

    def __init__(self, valor_1, valor_2):
        self.__valor_1 = valor_1
        self.__valor_2 = valor_2

    def valida(self):
        return self.__valor_1.valida() - self.__valor_2.valida()

class Valor(object):
    """Classe de intância dos objetos de valor"""

    def __init__(self, valor):
        self.__valor = valor

    def valida(self):
        return self.__valor


if __name__ == '__main__':
    soma = Soma(Valor(10), Valor(20))
    print(soma.valida())

    Subtracao = Subtracao(Valor(40), Valor(20))
    print(Subtracao.valida())
