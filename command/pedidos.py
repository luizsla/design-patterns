# -*- coding: utf-8 -*-
from datetime import date

class Pedido(object):

    def __init__(self, cliente, valor):

        self.__cliente = cliente
        self.__valor = valor
        self.__status = 'NOVO'
        self.__data_finalizacao = None

    def _paga(self):
        self.__status = 'PAGO'

    def _finaliza(self):
        self.__data_finalizacao = date.today()
        self.__status = 'ENTREGUE'

    @property
    def cliente(self):
        return self.__cliente

    @property
    def valor(self):
        return self.__valor

    @property
    def status(self):
        return self.__status

    @property
    def data_finalizacao(self):
        return self.__data_finalizacao


#Montagem do padrão de projeto command.
if __name__ == '__main__':

    from fila_de_trabalho import Fila_de_trabalho
    from comando import Comando, Conclui_pedido, Paga_pedido

    pedido_1 = Pedido("Luiz Eduardo Amorim", 500.00)
    pedido_2 = Pedido("Maria de Cássia Lessa", 400.00)

    lista_de_comandos = Fila_de_trabalho()

    lista_de_comandos.adiciona(Conclui_pedido(pedido_1))
    lista_de_comandos.adiciona(Paga_pedido(pedido_2))

    lista_de_comandos.processa()
