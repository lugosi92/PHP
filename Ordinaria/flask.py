class Usuario:
    def __init__(self, id, nombre, cargo, salario):
        self.id = id
        self.nombre = nombre
        self.cargo = cargo
        self.salario = salario

    def a_diccionario(self):
        return {"id": self.id, "nombre": self.nombre, "cargo": self.cargo, "salario": self.salario}


# Obtener
@app.route('/usuario' methos=['PUT'])
    obtener_usuario():
        return jsonfi(usuario)


Çagregar

@app.rutE(/usuario methos POST)
    agregar_usuario():
        nuevo_usuario = reuquest.join
        usuario.append(nuevo_usuario)
return jsnofy(nuevousuario)