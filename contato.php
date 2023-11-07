<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    $db = new SQLite3('contatos.db');
    $db->exec("CREATE TABLE IF NOT EXISTS contatos (email TEXT, message TEXT)");
    $stmt = $db->prepare("INSERT INTO contatos (email, message) VALUES (:email, :message)");
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    $stmt->execute();
    $db->close();


    $to = "gugameira223@gmail.com.com";
    $subject = "Novo contato recebido";
    $body = "Novo contato recebido:\n\nEmail: $email\nMensagem: $message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    header("Location: contato2.html");
    exit();
}
?>
