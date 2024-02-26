<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $to = "albertojuniorleal@hotmail.com"; // Troque para o seu endereço de email
    $subject = "Mensagem do formulário de contato";
    $body = "Nome: $name\nEmail: $email\nTelefone: $phone\n\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>