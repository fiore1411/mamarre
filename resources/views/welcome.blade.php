<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Venta de Tickets de Parrillada</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#comprar">Comprar Tickets</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Página Principal -->
    <section id="inicio">
        <h2>Bienvenido a nuestro evento de Parrillada</h2>
        <p>!Sumérgete en una experiencia gastronómica inolvidable con nuestra parrillada! 
            Disfruta de jugosas carnes a la parrilla, acompañadas de sabrosas guarniciones y aderezos 
            caseros que deleitarán tu paladar.</p>
        <img src="img/pollada.png"  alt="Parrillada" whidth="200" height="270">
        <img src="img/parrillada2.png" alt="parrilada" whidth="200" height="270">
        <img src="img/parrillada3.png" alt="parrilada" whidth="200" height="270">
        <!-- Imagen de parrillada -->
    </section>
    <section id="carta">
        <div class="parrillada">
            <h2>Carta de las diferentes parrilladas</h2>
            <p>* Parrillada con papa o yuca y ensalada</p>
            <p>* Parrillada con papa y arroz</p>

        </div>
        <div class="bebidas">
            <h2>Bebidas</h2>
            <li><img src="img/coca cola.png" whidth="200" height="60"> Coca cola</li>
            <li><img src="img/guarana.png" whidth="200" height="60"> Guaraná</li>
            <p>* inka Kola</p>

        </div>
    </section>

    <!-- Página de Compra de Tickets -->
    <section id="comprar">
        <h2>Compra tus Tickets</h2>
        <form action="procesar_pago.php" method="post">
            <label for="cantidad_tickets">Cantidad de Tickets:</label>
            <input type="number" id="cantidad_tickets" name="cantidad_tickets" min="1" required>
            
            <label for="fecha">Fecha del Evento:</label>
            <input type="date" id="fecha" name="fecha" required>
            
            <label for="hora">Hora del Evento:</label>
            <input type="time" id="hora" name="hora" required>
            
            <button type="submit">Comprar ahora</button>
        </form>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="contactos">
            <h2>Contactos</h2>
            <ul>
                <li><img src="img/img7.png"> Email: info@parrillada.com</li>
                <li><img src="img/img8.png"> Teléfono: 945281624</li>
                <li><img src="img/img9.png"> Whatsapp: +51 965724576</li>
            </ul>
        </div>
        <div class="pagos">
            <h2>Metodo de pagos</h2>
            <li><img src="img/yape.png" whidth="200" height="40"> YAPE: 965724576</li>
            <li><img src="img/plin.png" whidth="200" height="40"> YAPE: 976935273</li>

        </div>
    </footer>
</body>
</html>