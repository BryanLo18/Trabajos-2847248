# Listas de ejemplo
lista1 = [1, 2, 3, 4, 5]
lista2 = [5, 6, 7, 8, 9]

# Verificar si hay al menos un elemento en común usando intersección de conjuntos
tienen_comun = bool(set(lista1) & set(lista2))

print("¿Las listas tienen al menos un elemento en común?", tienen_comun)
