
tuplas = [(), (), ('',), ('a', 'b'), ('a', 'b', 'c'), ('d')]

resultado = [tupla for tupla in tuplas if tupla == ('b')]

print(resultado)
