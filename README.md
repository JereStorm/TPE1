Bienvenido a nuestro sistema...

----------- BBDD ---------------

NOMBRE DEL ARCHIVO: "web_tpe"

----------- INFO ROLES -----------

- ADMIN = Usuario administrador del sitio.
- USUARIO = Usuario con permisos acotados al uso del sistema.
- CLIENTE = Usuario registrado y logueado sin permisos de adminisitracion.

Al ingresar, lo hace como User Deslogueado:

- SOLO permisos de vista.

----------- USER ADMIN (PREDETERMINADO) -----------

EMAIL: admin@admin.com,
PASSWORD: admin

----------- IMAGES --------------

- Se debera crear una carpeta "upload" dentro de la carpeta "images".
  Alli se guardaran los archivos temporales que se suban

----------- JSON EXAMPLE -------------

{
"id_comen": int,
"mensaje": string,
"fecha": date,
"puntaje": tinyint,
"id_user_fk": int,
"id_prod_fk": int,
}

----------- API RULES -----------

Como primer medida se tomara el parametro :ID segun el recurso que se encuentre a su izquierda <- .

Por ej: api/coments/producto/:ID donde ":ID" haria refencia al recurso "producto".

----------- REQUEST -------------

- GET de Comentarios x Producto

-- Recurso: coments/producto
-- Metodo: GET
-- Parametros get: ?campo=...&order=...
-- Parametros del recurso: :ID

ENDPOINT: api/coments/productos/:ID

- POST de comentario de un Producto

-- Recurso: coments
-- Metodo: POST
-- Parametros get:
-- Parametros del recurso: :ID

ENDPOINT: api/coments

- DELETE de comentario

-- Recurso: coments
-- Metodo: DELETE
-- Parametros get:
-- Parametros del recurso: :ID

ENDPOINT: api/coments/:ID

- GET de comentarios de un Producto filtrados por Puntaje

-- Recurso: coments/producto
-- Metodo: GET
-- Parametros get: ?puntaje=...
-- Parametros del recurso: :ID

ENDPOINT: api/coments/productos/:ID/filter
