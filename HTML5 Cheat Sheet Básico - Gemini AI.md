# Cheat Sheet de HTML5
## Estructura Básica
- `<!DOCTYPE html>`: Declara el tipo de documento HTML5.
-  `<html>`: Raíz de todo documento HTML.
- `<head>`: Contiene metadatos sobre el documento (título, codificación, enlaces a hojas de estilo, etc.).
- `<title>`: Define el título de la página, que aparece en la pestaña del navegador.
- `<body>`: Contiene el contenido visible de la página.

## Sección y Navegación
- `<header>`: Encabezado de la página, generalmente contiene el logo y la barra de navegación.
- `<nav>`: Sección de navegación principal.
- `<main>`: Contenido principal de la página.
- `<section>`: Secciones genéricas dentro del contenido principal.
- `<article>`: Contenido independiente y autocontenido (posts de blog, artículos de noticias).
- `<aside>`: Contenido secundario, como barras laterales o cajas informativas.
- `<footer>`: Pie de página, con información de copyright, enlaces a políticas de privacidad, etc.

## Texto y Formato
- `<h1>...<h6>`: Títulos de diferentes niveles.
- `<p>`: Párrafo.
- `<span>`: Elemento en línea para aplicar estilos a partes específicas del texto.
- `<strong>`: Texto en negrita.
- `<em>`: Texto en cursiva.
- `<a>`: Enlace a otra página.
- `<img>`: Imagen.
- `<ul>`: Lista no ordenada.
- `<ol>`: Lista ordenada.
- `<li>`: Elemento de lista.

## Formularios
- `<form>`: Define un formulario.
- `<input>`: Campo de entrada (texto, contraseña, checkbox, radio, etc.).
- `<label>`: Etiqueta asociada a un elemento de formulario.
- `<button>`: Botón para enviar un formulario.
- `<select>`: Lista desplegable.
- `<textarea>`: Área de texto multilínea.

## Tablas
- `<table>`: Define una tabla.
- `<tr>`: Fila de una tabla.
- `<th>`: Celda de encabezado de una tabla.
- `<td>`: Celda de datos de una tabla.

## Otros Elementos
- `<div>`: Contenedor genérico para agrupar elementos.
- `<span>`: Elemento en línea para aplicar estilos.

## Atributos Comunes
- **id**: Identificador único para un elemento.
- **class**: Clase para aplicar estilos CSS.
- **style**: Estilos en línea (no recomendado para grandes proyectos).
- **name**: Identificar al elemento con un nombre, especialmente usado para formularios para las solicitudes.
- **href**: Atributo utilizado en el elemento <a> para especificar la URL del enlace.
- **src**: Atributo utilizado en el elemento <img> para especificar la URL de la imagen.
- **alt**: Texto alternativo para una imagen (utilizado por los lectores de pantalla).

# Recuerda:

**Semántica**: Utiliza las etiquetas de manera correcta para que los motores de búsqueda y los lectores de pantalla puedan entender mejor tu contenido.
**CSS**: Para darle estilo a tu página web, utiliza hojas de estilo en cascada (CSS).
**JavaScript**: Para agregar interactividad a tu página web, utiliza JavaScript.
Este cheat sheet te servirá como referencia rápida, pero te recomiendo profundizar en cada etiqueta y atributo para dominar HTML5.

# Ejemplo
```
HTML
<!DOCTYPE html>
<html>
<head>
  <title>Mi primera página web</title>
</head>
<body>
  <header>
    <h1>Mi sitio web</h1>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <main>   

    <article>
      <h2>Mi primer artículo</h2>
      <p>Este es el contenido de mi artículo.</p>
    </article>
  </main>
  <footer>
    <p>&copy; 2023 Mi Sitio Web</p>
  </footer>
</body>
</html>
```

# Enlaces
[HTML5 Standard cheatsheet (español) Cheat Sheet by semagarcia](https://cheatography.com/semagarcia/cheat-sheets/html5-standard-cheatsheet-espanol/)

[https://www.byronvargas.com/web/como-se-estructura-un-html/](https://www.byronvargas.com/web/como-se-estructura-un-html/)
