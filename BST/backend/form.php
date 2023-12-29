<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "mgomez@biostreamtech.com";
    $subject = "Nuevo mensaje de contacto";

    $emailBody = "Nombre: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Teléfono: $phone\n\n";
    $emailBody .= "Mensaje:\n$message";

    mail($to, $subject, $emailBody);

    // Puedes redirigir al usuario a una página de confirmación
    //header("Location: confirmation.html");
    exit();
}
?>
