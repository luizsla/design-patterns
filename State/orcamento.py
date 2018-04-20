# -*- coding: UTF-8 -*-
from abc import ABCMeta, abstractmethod

class Estado_orcamento(object):
    """Classe abstrata que modela os estados do orçamento de acordo com o padrão State"""
    __metaclass__ = ABCMeta

    def __init__(self):
        """Método construtor do artibuto que controla o aplicação de desconto"""
        self._desconto_aplicado = False

    @abstractmethod
    def aplicar_desconto(self, orcamento):
        pass

    @abstractmethod
    def aprovar(self, orcamento):
        pass

    @abstractmethod
    def reprovar(self, orcamento):
        pass

    @abstractmethod
    def finalizar(self, orcamento):
        pass

#Classes que trabalham com os estados do orçamento e o fluxo dos estados.
class Em_aprovacao(Estado_orcamento):

    def aplicar_desconto(self, orcamento):
        if (self._desconto_aplicado is not True):
            orcamento.valor_desconto = orcamento.valor * 0.03
            self._desconto_aplicado = True
        else:
            raise Exception("Já há um desconto aplicado para este orçamento")

    def aprovar(self, orcamento):
        orcamento.muda_estado_do_orcamento(Aprovado())

    def reprovar(self, orcamento):
        orcamento.muda_estado_do_orcamento(Reprovado())

    def finalizar(self, orcamento):
        raise Exception("Orçamento precisa ser aprovado ou reprovado para ser finalizado")

class Aprovado(Estado_orcamento):

    def aplicar_desconto(self, orcamento):
        if (self._desconto_aplicado is not True):
            orcamento.valor_desconto = orcamento.valor * 0.05
            self._desconto_aplicado = True
        else:
            raise Exception("Já há um desconto aplicado para este orçamento")

    def aprovar(self, orcamento):
        raise Exception("Orçamento já se encontra finalizado")

    def reprovar(self, orcamento):
        orcamento.muda_estado_do_orcamento(Em_aprovacao())

    def finalizar(self, orcamento):
        orcamento.muda_estado_do_orcamento(Finalizado())

class Reprovado(Estado_orcamento):

    def aplicar_desconto(self, orcamento):
        return 0

    def aprovar(self, orcamento):
        raise Exception("Orçamentos reprovados não podem ser aprovados")

    def reprovar(self, orcamento):
        raise Exception("Orçamento já se encontra reprovado")

    def finalizar(self, orcamento):
        orcamento.muda_estado_do_orcamento(Finalizado())

class Finalizado(Estado_orcamento):

    def aplicar_desconto(self, orcamento):
        raise Exception("Orçamento finalizado não pode ter desconto aplicado")

    def aprovar(self, orcamento):
        raise Exception("Orçamentos finalizados não podem ser aprovados")

    def reprovar(self, orcamento):
        raise Exception("Orçamentos finalizados não podem ser reprovados")

    def finalizar(self, orcamento):
        raise Exception("Orçamento já se encontra finalizado")


class Orcamento(object):
    """Classe que inscancia objetos de orçamento com base no carrinho de compras."""

    def __init__(self):
        self.__itens = []
        self.__estado_do_orcamento = Em_aprovacao()
        self.__desconto_especial = 0

    #Getter e setter para o valor do desconto.
    @property
    def valor_desconto(self):
        return self.__desconto_especial

    @valor_desconto.setter
    def valor_desconto(self, valor):
        self.__desconto_especial = valor



    #funçẽos que tabalham com o estado do orçamento.
    def muda_estado_do_orcamento(self, novo_estado):
        self.__estado_do_orcamento = novo_estado

    def aprova(self):
        """Aprova o orçamento feito"""
        self.__estado_do_orcamento.aprovar(self)

    def reprova(self):
        """Reprova o orçamento feito"""
        self.__estado_do_orcamento.reprovar(self)

    def finaliza(self):
        """Finaliza o orçamento"""
        self.__estado_do_orcamento.finalizar(self)

    #Aplica desconto de acordo com o estado do orçamento previamente definido.
    def aplica_desconto(self):
        return self.__estado_do_orcamento.aplicar_desconto(self)


    # quando a propriedade for acessada, ela soma cada item retornando o valor do orçamento
    @property
    def valor(self):
        total = 0.0
        for item in self.__itens:
            total+= item.valor
        return total

    # retornamos uma tupla, já que não faz sentido alterar os itens de um orçamento
    def obter_itens(self):

        return tuple(self.__itens)

    # perguntamos para o orçamento o total de itens
    @property
    def total_itens(self):
        return len(self.__itens)

    def adiciona_item(self, item):
        self.__itens.append(item)

# um item criado não pode ser alterado, suas propriedades são somente leitura
class Item(object):
    """Classe que instancia objetos de Itens que compõe o objeto orçamento"""
    def __init__(self, nome, valor):
        self.__nome = nome
        self.__valor = valor

    @property
    def valor(self):
        return self.__valor

    @property
    def nome(self):
        return self.__nome
