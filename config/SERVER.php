<?php

// --- Configuración de la Base de Datos ---
$host = 'localhost'; // O la IP de tu servidor de base de datos
$db   = 'light_agency_db'; // El nombre de tu base de datos
$user = 'root'; // Tu usuario de base de datos
$pass = 'root'; // Tu contraseña de base de datos
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanzar excepciones en caso de error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devolver resultados como array asociativo
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Desactivar la emulación de preparaciones para mayor seguridad
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión a la base de datos establecida con éxito.<br><br>";

    // --- AGREGAR 10 REGISTROS A LA TABLA 'categorias' ---
    echo "Agregando 10 registros a la tabla 'categorias'...<br>";
    for ($i = 1; $i <= 10; $i++) {
        $nombre = "Categoría " . ($i + 10); // Para que no se repitan los nombres si ya tienes algunas
        $stmt = $pdo->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $stmt->execute([$nombre]);
    }
    echo "10 registros agregados a 'categorias'.<br><br>";

    // --- AGREGAR 10 REGISTROS A LA TABLA 'usuarios' ---
    echo "Agregando 10 registros a la tabla 'usuarios'...<br>";
    for ($i = 1; $i <= 10; $i++) {
        $nombre = "Usuario_" . ($i + 10);
        $email = "usuario_" . ($i + 10) . "@example.com";
        $password = password_hash("password" . ($i + 10), PASSWORD_DEFAULT); // Cifrar contraseña
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $password]);
    }
    echo "10 registros agregados a 'usuarios'.<br><br>";

    // --- AGREGAR 10 REGISTROS A LA TABLA 'productos' ---
    // Necesitamos IDs de categorías existentes para esto
    $stmt = $pdo->query("SELECT id FROM categorias ORDER BY id DESC LIMIT 1");
    $last_category_id = $stmt->fetchColumn(); // Obtiene el ID de la última categoría insertada

    echo "Agregando 10 registros a la tabla 'productos'...<br>";
    for ($i = 1; $i <= 10; $i++) {
        $nombre = "Producto " . ($i + 20);
        $descripcion = "Descripción del producto " . ($i + 20);
        $precio = round(mt_rand(1000, 50000) / 100, 2); // Precio aleatorio entre 10 y 500
        $categoria_id = $last_category_id - (10 - $i); // Asignar una categoría existente
        $stmt = $pdo->prepare("INSERT INTO productos (nombre, descripcion, precio, categoria_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nombre, $descripcion, $precio, $categoria_id]);
    }
    echo "10 registros agregados a 'productos'.<br><br>";

    // --- AGREGAR 10 REGISTROS A LA TABLA 'pedidos' ---
    // Necesitamos IDs de usuarios existentes para esto
    $stmt = $pdo->query("SELECT id FROM usuarios ORDER BY id DESC LIMIT 1");
    $last_user_id = $stmt->fetchColumn();

    echo "Agregando 10 registros a la tabla 'pedidos'...<br>";
    for ($i = 1; $i <= 10; $i++) {
        $usuario_id = $last_user_id - (10 - $i); // Asignar un usuario existente
        $total = round(mt_rand(5000, 200000) / 100, 2); // Total aleatorio entre 50 y 2000
        $estado = ($i % 2 == 0) ? 'completado' : 'pendiente'; // Alternar estado
        $stmt = $pdo->prepare("INSERT INTO pedidos (usuario_id, total, estado) VALUES (?, ?, ?)");
        $stmt->execute([$usuario_id, $total, $estado]);
    }
    echo "10 registros agregados a 'pedidos'.<br><br>";

    // --- AGREGAR 10 REGISTROS A LA TABLA 'detalles_pedido' ---
    // Necesitamos IDs de pedidos y productos existentes para esto
    $stmt = $pdo->query("SELECT id FROM pedidos ORDER BY id DESC LIMIT 1");
    $last_order_id = $stmt->fetchColumn();
    $stmt = $pdo->query("SELECT id FROM productos ORDER BY id DESC LIMIT 1");
    $last_product_id = $stmt->fetchColumn();

    echo "Agregando 10 registros a la tabla 'detalles_pedido'...<br>";
    for ($i = 1; $i <= 10; $i++) {
        $pedido_id = $last_order_id - (10 - $i); // Asignar un pedido existente
        $producto_id = $last_product_id - (10 - $i); // Asignar un producto existente
        $cantidad = mt_rand(1, 5); // Cantidad aleatoria
        $precio_unitario = round(mt_rand(100, 10000) / 100, 2); // Precio unitario aleatorio
        $stmt = $pdo->prepare("INSERT INTO detalles_pedido (pedido_id, producto_id, cantidad, precio_unitario) VALUES (?, ?, ?, ?)");
        $stmt->execute([$pedido_id, $producto_id, $cantidad, $precio_unitario]);
    }
    echo "10 registros agregados a 'detalles_pedido'.<br><br>";

    echo "¡Script completado exitosamente!";

} catch (PDOException $e) {
    die("Error de conexión o de base de datos: " . $e->getMessage());
}

?>