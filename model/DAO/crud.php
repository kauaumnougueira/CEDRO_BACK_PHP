<?php 
    include('C:\xampp\htdocs\PHP-Login\model\banco\conexao.php');
   
   // Create new user
    function createUser($nome, $email, $senha) {
        global $mysqli;
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Read user
    function readUsers() {
        global $mysqli;
        $sql = "SELECT * FROM usuarios ORDER BY id";
        $result = $mysqli->query($sql);
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    // Update user
    function updateUser($id, $nome, $email, $senha) {
        global $mysqli;
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Delete user
    function deleteUser($id) {
        global $mysqli;
        $sql = "DELETE FROM usuarios WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }