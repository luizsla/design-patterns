# -*- coding: utf-8 -*-

class Comando(object):
    """Classe que estabelece comandos para os pedidos com métodos em comum"""

    from abc import ABCMeta, abstractmethod
    __metaclass__ = ABCMeta

    @abstractmethod
    def processa(self):
        pass


class Conclui_pedido(Comando):
    """Classe filha de comando que conclui o pedido pasado à fila de pedidos"""

    def __init__(self, pedido):
        """Método construtor que recebe instancia da classe pedido para ser concluida"""
        self.__pedido = pedido

    def processa(self):
        self.__pedido._finaliza()


class Paga_pedido(Comando):
    """Classe filha de comando que paga o pedido passado à fila de pedidos"""

    def __init__(self, pedido):
        self.__pedido = pedido

    def processa(self):
        self.__pedido._paga()
