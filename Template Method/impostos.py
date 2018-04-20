
class Imposto_condicional(object):
    """ Declarando classe abstrata que servirá de template para os outros impostos. """

    #importando do módulo abc o ABCMeta e o @abstractmethod
    from abc import ABCMeta, abstractmethod
    #Fazendo a classe uma classe abstrata
    __metaclass__ = ABCMeta

    def calcula(self, orcamento):
        if (self.condicao(orcamento)):
            return self.imposto_maior(orcamento)
        else:
            return self.imposto_menor(orcamento)

    @abstractmethod
    def condicao(self, orcamento): pass

    @abstractmethod
    def imposto_maior(self, orcamento): pass

    @abstractmethod
    def imposto_menor(self, orcamento): pass


#Classes concretas de imposto que herdam da classe abstrata Imposto_condicional.
class IKCV(Imposto_condicional):
    """ Classe de imposto que herda do template Imposto_condicional """

    def condicao(self, orcamento):
        return orcamento.valor > 1000

    def imposto_maior(self, orcamento):
        return orcamento.valor * 0.1

    def imposto_menor(self, orcamento):
        return orcamento.valor * 0.06

#Classes concretas de imposto que herdam da classe abstrata Imposto_condicional.
class ICPP(Imposto_condicional):
    """ Classe de imposto que herda do template Imposto_condicional """

    def condicao(self, orcamento):
        return orcamento.valor > 500

    def imposto_maior(self, orcamento):
        return orcamento.valor * 0.1

    def imposto_menor(self, orcamento):
        return orcamento.valor * 0.06
