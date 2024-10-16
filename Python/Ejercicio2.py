lista=[4,5,12,67,23]

if len(lista) > 0:
    mayor=lista[0]
    menor=lista[0]

for num in lista:
    if num>mayor:
        mayor=num
        if num<menor:
            menor=num


print(f"El mayor es {mayor}")
print(f"el menor es {menor}")