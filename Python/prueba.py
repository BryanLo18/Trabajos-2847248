num_1=10
num_2=20
texto_1="Hola"
texto_2='Clase'

suma=num_1+num_2

print(suma)

lista = ['perros', 'casa', 'limones', 'juegos', 'programar']

contador=0
for palabra in lista:
    if  palabra[-1] == 's':
        contador +=1

print(f"En la lista hay {contador} palabras terminadas en s")

