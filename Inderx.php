<!DOCTYPE html>
<html>
<head>
    <title>Conexión a Base de Datos</title>
</head>
<body>
    <h2>Prueba de conexión a MySQL y PostgreSQL</h2>
    <?php
    // === Conexión a MySQL ===
    $mysql_host = "mysqlprd01jdr.private.mysql.database.azure.com";
    $mysql_user = "administrador@mysqlprd01jdr";
    $mysql_pass = "Fr8f823tg2384!";
    $mysql_db = "testdb";

    echo "<h3>Conectando a MySQL...</h3>";
    $mysql_conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

    if (!$mysql_conn) {
        echo "<p style='color:red'>❌ Error al conectar a MySQL: " . mysqli_connect_error() . "</p>";
    } else {
        echo "<p style='color:green'>✅ Conectado correctamente a MySQL.</p>";
        mysqli_close($mysql_conn);
    }

    // === Conexión a PostgreSQL ===
    $pg_host = "psqlprd01.private.postgres.database.azure.com";
    $pg_user = "administrador@psqlprd01";
    $pg_pass = "Fr8f823tg2384!";
    $pg_db = "postgres";

    echo "<h3>Conectando a PostgreSQL...</h3>";
    $pg_conn = pg_connect("host=$pg_host dbname=$pg_db user=$pg_user password=$pg_pass");

    if (!$pg_conn) {
        echo "<p style='color:red'>❌ Error al conectar a PostgreSQL.</p>";
    } else {
        echo "<p style='color:green'>✅ Conectado correctamente a PostgreSQL.</p>";
        pg_close($pg_conn);
    }
    ?>
</body>
</html>
