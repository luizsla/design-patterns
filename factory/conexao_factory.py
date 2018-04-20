# -*- coding: utf-8 -*-
class Conexao_factory(object):
    """Classe fábrica do objeto conexão."""

    @staticmethod
    def cria_conexao(self):
        conexao = MySQLdb.connect(host="localhost",
                                  user='root',
                                  passwd='',
                                  db='alura')
        return conexao
