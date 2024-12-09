
cadena=(input("Ingrese la cadena de texto: "))

mayusculas=0
minusculas=0
total_caracteres=0

for caracter in cadena:
    if caracter.isupper():
        mayusculas +=1
    elif caracter.islower():
        minusculas +=1
    total_caracteres +=1

print(f"Mayusculas :{mayusculas}, Minusculas: {minusculas}, Total de caracteres: {total_caracteres} ")