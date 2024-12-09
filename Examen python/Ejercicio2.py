lista1=['python','python','javascript','java','php','php','php','C++']

repeticiones={}
for n in lista1:
      if n in repeticiones :
        repeticiones[n] += 1
      else:
         repeticiones[n] = 1
conjunto=set(lista1)
lista1=list(conjunto)

diccionario = dict(repeticiones)

print(diccionario)
