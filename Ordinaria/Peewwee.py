from peewee import *

db = SqliteDatabase('biblioteca.db')

# Definir las tablas
class Autor(Model):
    nombre = CharField()

    class Meta:
        database = db

class Editorial(Model):
    nombre = CharField()

    class Meta:
        database = db

class Libro(Model):
    titulo = CharField()
    autor = ForeignKeyField(Autor, backref='libros')
    editorial = ForeignKeyField(Editorial, backref='libros')

    class Meta:
        database = db

# Conectar y crear tablas
db.connect()
db.create_tables([Autor, Editorial, Libro])

# Insertar datos
autor1 = Autor.create(nombre='Gabriel García Márquez')
autor2 = Autor.create(nombre='J.K. Rowling')
autor3 = Autor.create(nombre='George Orwell')

editorial1 = Editorial.create(nombre='Editorial XYZ')
editorial2 = Editorial.create(nombre='Editorial ABC')

Libro.create(titulo='Cien años de soledad', autor=autor1, editorial=editorial1)
Libro.create(titulo='Harry Potter y la piedra filosofal', autor=autor2, editorial=editorial2)
Libro.create(titulo='Harry Potter y la cámara secreta', autor=autor2, editorial=editorial2)
Libro.create(titulo='1984', autor=autor3, editorial=editorial1)


pregunta1 = Libro.select.join(Autor).where(Autor='Gabbriel')

for(libro as libros):
    print El autor es libro.titulo


pregunta2 = Libros.select().join(editorial).where(editroal.nombre= "kkd")

for (editorial as editorial):
    print editorial.nombre