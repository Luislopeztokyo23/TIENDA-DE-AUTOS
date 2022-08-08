<?php
include_once "/xampp/htdocs/tienda/templates/includes/header.php"
?>

<main class="contenedor">
    <h1>AUTOS</h1>
    <div class="contenedor informacion">
        <img src="/img/529809_73fdee19_image 800-400.jpg">
        <div class="contenido">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nostrum inventore explicabo, necessitatibus eius accusantium ut cupiditate delectus eaque, iusto qui excepturi aperiam, pariatur corporis ipsum amet numquam! Odit, commodi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nostrum inventore explicabo, necessitatibus eius accusantium ut cupiditate delectus eaque, iusto qui excepturi aperiam, pariatur corporis ipsum amet numquam! Odit, commodi?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis quam tenetur quos expedita ipsa iusto enim, ex veritatis sed qui neque! Laborum, nobis quae nam ipsa tempore aliquid dolores eveniet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nostrum inventore explicabo, necessitatibus eius accusantium ut cupiditate delectus eaque, iusto qui excepturi aperiam, pariatur corporis ipsum amet numquam! Odit, commodi?</p>
            <form class="formulario-pedido">
                <select class="talla campo">
                    <option value="ch">2 Puertas</option>
                    <option value="m">4 Puertas</option>
                    <option value="g">Camioneta</option>
                </select>
                <input type="number" min="1" class="cantidad campo">
                <input type="submit" class="boton" values="agregar al carrito">
            </form>
        </div>
    </div>
    <?php
    include_once "/xampp/htdocs/tienda/templates/includes/footer.php"
    ?>