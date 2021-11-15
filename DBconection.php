<?php
class DBconection{
    public static function databaseConection()
    {
        $servername = "localhost";
        $database = "solid";
        $username = "root";
        $password = "";
        // Create connection
        $CONN = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$CONN)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo("Connected successfully");
        return $CONN;
    }
}
?>