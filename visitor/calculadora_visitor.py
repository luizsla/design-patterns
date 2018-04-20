# -*- coding: utf-8 -*-
#Implementação de um elento de varredura do array de acordo com o Design Patter
#visitor.

class Visitor(object):
    """Classe que contém os métodos de impressão da estrutura de dados"""

    def imprime_soma(self, soma):
        print ("(", soma.valor_1.imprime(self), "+", soma.valor_2.imprime(self), ")")

    def imprime_subtracao(self, subtracao):
        print ("(", subtracao.valor_1.imprime(self), "-", subtracao.valor_2.imprime(self), ")")

    def imprime_numero(self, numero):
        return numero.valida()
