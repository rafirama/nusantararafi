<?php
$conn = mysqli_connect("localhost", "root", "", "db_user");

    function query($query ){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while( $baju = mysqli_fetch_assoc($result) ){
            $wadah[] = $baju;
        }
        return $wadah;
    }



    function register($data){
        global $conn;
        
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $confirmpassword = mysqli_real_escape_string($conn, $data["confirmpassword"]);

        $result = mysqli_query($conn, "SELECT * FROM `data_users` WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username sudah pernah masuk, Silahkan masuk dengan Username baru'); 
                </script>";     
            return false;
        }

        if($password !== $confirmpassword){
            echo "<script>
                    alert('Konfirmasi password tidak sesuai!')
                </script>"; 
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO data_users VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }

?>