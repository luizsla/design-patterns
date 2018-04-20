# -*- coding: utf-8 -*-
from conexao_factory import Conexao_factory
#Cria uma conexão com o banco de dados mySQl e realiza uma consulta.

#Chama a fábrica de objetos do tipo conexão.
connection = Conexao_factory.cria_conexao()

cursor = connection.cursor()

# executa a query
cursor.execute('SELECT * from cursos')

# itera sobre o resultado
for linha in cursor:
    print linha

# fecha a conexão
connection.close()
