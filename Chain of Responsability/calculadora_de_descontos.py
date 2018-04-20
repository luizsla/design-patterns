# -*- coding: UTF-8 -*-
from descontos import Desconto_por_5_itens, Desconto_por_500_reais, Sem_desconto

class Calculadora_de_descontos(object):
    """Classe responsável por montar a cadeia de responsabilidade de descontos"""

    @staticmethod
    def calcula_desconto(orcamento):
        """Função que monta a cadeia de responsabilidade"""
        desconto = Desconto_por_5_itens(Desconto_por_500_reais(Sem_desconto()))
        return desconto.calcula(orcamento)

if __name__ == '__main__':
    from orcamento import Orcamento, Item

    orcamento = Orcamento()
    orcamento.adiciona_item(Item("Saco de Cimento", 75.00))
    orcamento.adiciona_item(Item("Torneira de pia", 125.00))
    orcamento.adiciona_item(Item("Azulejo da cozinha", 400.00))

    print(Calculadora_de_descontos.calcula_desconto(orcamento))
