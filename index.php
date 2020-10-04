<!DOCTYPE html>
<html>
<head>
    <title>DBLoader</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main-container">
        <table class="table-pgsql">
            <tr>
                <th>district</th>
            </tr>
            <?php
                include('conexion.php');

                $objeto = new Conexion();
                $conn = $objeto->Conectar(3);
                
                $sql = "SELECT COUNT(*) FROM address";
                if ($res = $conn->query($sql)) {
                    if ($res->fetchColumn() > 0) {
                        $sql = "SELECT district FROM address;";

                        foreach ($conn->query($sql) as $row) {
                            echo "<tr><td>". $row["district"]. "</td></tr>";
                        }
                    }
                    else {
                        print "No rows matched the query.";
                    }
                }
            ?>
        </table>
        <table class="table-sqlsrv">
            <tr>
                <th>City</th>
            </tr>
            <?php
                $conn = $objeto->Conectar(2);
                
                $sql = "SELECT COUNT(*) FROM person.address";
                if ($res = $conn->query($sql)) {
                    if ($res->fetchColumn() > 0) {
                        $sql = "SELECT * FROM person.address";

                        foreach ($conn->query($sql) as $row) {
                            echo "<tr><td>". $row["City"]. "</td></tr>";
                        }
                    }
                    else {
                        print "No rows matched the query.";
                    }
                }
                $res = null;
                $conn = null;
            ?>
        </table>
    </div>
</body>
</html>