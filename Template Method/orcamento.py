# -*- coding: UTF-8 -*-
class Orcamento(object):
    """Classe Orçamento para teste em padrão strategy"""

    def __init__(self, valor):
        self.__valor_orcamento = valor

    @property
    def valor(self):
        return self.__valor_orcamento
