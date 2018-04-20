# -*- coding: UTF-8 -*-
class Desconto_por_5_itens(object):
    """Desconto a ser aplicado em um orçamento caso sejam comprados 5 itens"""
    def __init__(self, proximo):
        """Construtor que recebe o próximo desconto da cadeia"""
        self.proximo_desconto = proximo

    def calcula(self, orcamento):
        """Calcula desconto para compras com mais de 5 itens"""
        if (orcamento.total_itens >= 5):
            return orcamento.valor * 0.1
        else:
            return self.proximo_desconto.calcula(orcamento)

class Desconto_por_500_reais(object):
    """Desconto aplicado a compras maiores que 500 reias"""
    def __init__(self, proximo):
        """Construtor que recebe o próximo desconto da cadeia"""
        self.proximo_desconto = proximo

    def calcula(self, orcamento):
        """Calcula desconto para comprar maiores que 500 reias"""
        if (orcamento.valor >= 500.00):
            return orcamento.valor * 0.05
        else:
            return self.proximo_desconto.calcula(orcamento)

class Sem_desconto(object):
    """Classe fim da cadeia de desconto. Retorna 0 se não houver desconto aplicável"""

    def calcula(self, orcamento):
        return 0
