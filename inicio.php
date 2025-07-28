<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valle de Chalco Solidaridad</title>
    <link rel="stylesheet"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<head>
    
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: sans-serif;
    background-color: white; /* Esta parte es para cambiar el fondo blanco para toda la pagina */
    color: #333;
    margin: 0;
    padding: 0;
    min-height: 100vh;
}



header {
    background-image: url('https://via.placeholder.com/1200x150.png?text=Fondo+Header');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 20px;
}

.contenedor-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

h1 {
    flex-grow: 1;
    text-align: left;
    font-size: 1.8rem;
}




/* En este apartado podemos modificar el menu del panel lateral deslizante */
.panel {
    position: fixed;
    top: 0;
    right: -100%;
    width: 500px;
    height: 100%;
    background-color: white;
    box-shadow: -3px 0 10px rgba(0,0,0,0.3);
    transition: right 0.3s ease-in-out;
    z-index: 9999;
    padding: 20px;
    overflow-y: auto;
}

.panel.abierto {
    right: 0;
}

.cerrar {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}



.contenedor-header {
    background-color: #9B111E;
    color: white;
    padding: 13px;
    border-radius: 0px;
    margin: -19px;
}



footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}

.menu-btn {
  font-size: 28px;
  background: transparent;
  border: none;
  color: white;
  cursor: pointer;
  padding: 10px;
  
}


.panel-header {
  width: 100%;
  height: 100px; /* En esta parte se ajusta la altura del encabezado */
  overflow: hidden;
}

.panel-header img {
  width: 425px;   
  height: auto;
  display: block;
  margin: 0 auto;
}


.menu-opciones {
    display: flex;
    flex-direction: column;
    gap: 0;
    margin-top: 20px;
}

.menu-opciones button {
    background: transparent;
    border: none;
    border-bottom: 1px solid #ccc;
    color: #333;
    padding: 15px 20px;
    font-size: 16px;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.2s;
}



.flecha {
    color: #999;
}

.imagen-fondo {
    position: fixed;
    bottom: 460px; /* En este apartado se puede cambiar el valor para subir la imagen */
    left: 50%;
    transform: translateX(-50%);
    z-index: 999;
    transition: bottom 0.3s ease; /* Suaviza el movimiento si lo cambias dinámicamente */
}

.imagen-fondo img {
    width: 350px;
    height: auto;
}

.imagen-centro {
    position: fixed;
    top: 47%;  /* sirve para cambiar la posición vertical */
    left: 50%; /* Sirve para ajustar la posición horizontal */
    transform: translate(-50%, -50%);
    width: 1015px;     /* En este apartado se puede ajustar el ancho más grande para la forma horizontal */
    height: 200px;    /* altura menor para que sea un rectángulo */
    object-fit: cover; /* para que la imagen cubra el área sin distorsión */
    z-index: 99999;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    border-radius: 18px;
    transition: transform 0.3s ease;
    
}

.imagen-centro:hover {
    transform: translate(-50%, -50%) scale(1.05); /* Este codigo sirve para cuando pasemos el cursor se resalte la imagen */
}

.texto-posicionado {
  position: fixed;         
  top: 425px;               /* Top sirve para dar una distancia desde arriba */
  right: 520px; 
  left: 70px;            /* Sirve para ajustar la posicion en la que se encuentra en este caso a la izquierda */
  font-size: 20px;
  color: black;
  background-color: white;
  padding: 10px;
  z-index: 10000;
  
   
    text-align: left;
    font-size: 1.5rem;
    width: 1200px;     /* ancho más grande para forma horizontal */
    height: 100px; 
    text-align: justify;
}


    </style>
</head>
<body>
 

    <header>
        <div class="contenedor-header">
            <h1>Valle de Chalco &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp; &nbsp;Sistema de Gestión de Inventarios</h1>

            <nav class="barra-negra">
                <button class="menu-btn" onclick="abrirPanel('menu')">&#9776;</button>
             </nav>
        </div>
    </header>

        <div id="panel" class="panel">  
            <span class="cerrar" onclick="cerrarPanel()">X</span>
            <div class="panel-header">
            <img src="escudo.png" alt="Imagen del menú" />
        </div>
  
        <div id="contenido-panel">
  
        <div class="imagen-fondo">
            <img src="escudo.png" alt="Imagen al fondo">
        </div>

        <img src="escudo.png"  class="imagen-centro" >


        <script>
        const imagen = document.getElementById('imagenClick');
        let mostrandoPrimera = true;

        imagen.addEventListener('click', () => {
    if (mostrandoPrimera) {
        imagen.src = '3.webp';
    } else {
        imagen.src = '4.webp';
    }
    mostrandoPrimera = !mostrandoPrimera;
});
</script>

        
    <footer>
        <p>&copy; 2025 Gobierno Municipal de Valle de Chalco. Todos los derechos reservados.</p>
    </footer>

    
    <h1 class="texto-posicionado">Esta página web fue creada con el propósito de gestionar de manera organizada y eficiente 
        el inventario de bienes inmuebles y equipos de cómputo así como el área de almacén. 
        Su objetivo es facilitar el control, registro y 
        seguimiento de los recursos físicos, permitiendo un acceso rápido a la información y mejorando la administración de los activos 
        disponibles.</h1>

        <script src="script.js"></script>

</body>
</html>