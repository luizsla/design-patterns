# -*- coding: UTF-8 -*-

class Calculador_de_impostos(object):
    """Classe calculadora de impostos responsável pela montagem do cálculo de
        impostos com base no padrão strategy.
    """

    def calcula_imposto(self, orcamento, imposto):
        return imposto.calcula(orcamento)


if __name__ == "__main__":
    from orcamento import Orcamento
    from impostos import IKCV, ICPP

    valor_do_orcamento = Orcamento(100)
    calculadora = Calculador_de_impostos()

    print(calculadora.calcula_imposto(valor_do_orcamento, IKCV()))
    print(calculadora.calcula_imposto(valor_do_orcamento, ICPP()))
