# API REST de Productos (Go)

Servicio RESTful creado con Gin para gestionar un catálogo de productos.

## Tecnologías
- Go 1.22
- Gin web framework
- PostgreSQL

## Endpoints
| Método | Ruta             | Descripción             |
|--------|------------------|-------------------------|
| GET    | /productos       | Lista todos los productos |
| GET    | /productos/:id   | Obtiene un producto      |
| POST   | /productos       | Crea un producto         |
| PUT    | /productos/:id   | Actualiza un producto    |
| DELETE | /productos/:id   | Elimina un producto      |

## Cómo ejecutar
bash
git clone https://github.com/kemperlogan/portafolio.git
cd portafolio/proyecto-3
go run main.go