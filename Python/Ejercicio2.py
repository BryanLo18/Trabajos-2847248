
Banco={
    "12345":{
        "Ahorros":25000,
        "Corriente": 50000
    }
    ,
    "67890":{
        "Ahorros":30000,
        "Corriente":60000
    },
    "20156":{
        "Ahorros":63200,
        "Corriente":200000
    }
        
}

programa_activo=True

while programa_activo:
    
    cuenta=(input("Ingrese el numero de cuenta: "))
    
    if cuenta in Banco:
        
        menu_activo=True
        
        while menu_activo:
            print("\nBienvenido al cajero electrónico")
            print("1. Retiro cuenta de ahorros")
            print("2. Retiro cuenta corriente")
            print("3. Consignación cuenta de ahorros")
            print("4. Consignación cuenta corriente")
            print("5. Consulta de saldo")
            print("6. Salir")
            opcion=input("Seleciones una opcion: ")
            if opcion == "1":
                monto=int(input("Dijite el monto a retirar: "))
                saldo = Banco[cuenta]["Ahorros"]
                if saldo >= monto:
                    Banco[cuenta]["Ahorros"] -= monto
                    print(f"Retiro exitoso. Has retirado ${monto}.")
                else:
                    print("Saldo insuficiente para realizar el retiro.")
            
            elif opcion == "2":
                monto=int(input("Dijite el monto a retirar: "))
                saldo= Banco[cuenta]["Corriente"]
                if saldo>=monto:
                    Banco[cuenta]["Corriente"] -=monto
                    print(f"Retiro exitoso. Has retirado ${monto}.")
            
            elif opcion == "3":
                monto=int(input("Dijite el monto a consignar: "))
                Banco[cuenta]["Ahorros"] +=monto
            
            elif opcion == "4":
                monto= int(input("Dijite el monto a consignar: "))
                Banco[cuenta]["Corriente"] +=monto
            
            elif opcion == "5":
                consulta=input("Que cuenta desea consulta a para ahorros y c para corriente: ")
                
                if consulta == "a":
                    saldo = Banco[cuenta]["Ahorros"]
                    print(f"Saldo en cuenta de ahorros: ${saldo}")
                elif consulta == "c":
                    saldo = Banco[cuenta]["Corriente"]
                    print(f"Saldo en cuenta de ahorros: ${saldo}")
                else:
                    print("Opcion no valida")
            
            elif opcion == "6":
                print("Gracias por usar el cajero :)")
                programa_activo = False
                menu_activo = False
            else:
                print("Opcion no valida seleciones una opcion")
    else:
        print("Numero de cuenta no valida")
    
    