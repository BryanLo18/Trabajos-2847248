import funciones

print("Selecione una opcion")
print("Suma es 1")
print("Resta es 2")
print("multiplicacion es 3")
print("divicion es 4")
opcion = int(input("Opcion :"))

if opcion == 1:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    sumar=funciones.suma(num1,num2)

    print(f"La suma es : {sumar}")
elif opcion == 2:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    restar=funciones.restar(num1,num2)
    print(f"La suma es : {restar}")
elif opcion == 3:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    multi=funciones.multi(num1,num2)
    print(f"La suma es : {multi}")
elif opcion == 4:
    num1= int(input("Ingrese un numero = "))
    num2= int(input("Ingrese otro un numero = "))
    divi=funciones.divi(num1,num2)
    print(f"La suma es : {divi}")