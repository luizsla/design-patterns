class Fila_de_trabalho(object):

    def __init__(self):
        self.__lista_de_comandos = []

    def adiciona(self, comando):
        self.__lista_de_comandos.append(comando)

    def processa(self):
        for comando in self.__lista_de_comandos:
            comando.processa()
