# -*- coding: UTF-8 -*-
class ICMS(object):
    """ Regra de implementação do imposto ICMS"""

    def calcula(self, orcamento):
        """Calcula o valor do imposto sobre o orçamento passado de acordo com ICMS """
        return orcamento.valor * 0.1

class ISS(object):
    """ Regra de implementação do imposto ISS """

    def calcula(self, orcamento):
        """Calcula o valor do imposto sobre o orçamento passado de acordo com ISS"""
        return orcamento.valor * 0.06
