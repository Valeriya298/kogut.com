<?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message"></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>
<form method="POST" action="contact.php">
    <input type="text" name="name" placeholder="Ваше имя" required>
    <input type="email" name="email" placeholder="Ваш email" required>
    <textarea name="message" placeholder="Сообщение" required></textarea>
    <button type="submit">Отправить</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Пример: сохранить в файл
    file_put_contents("messages.txt", "$name <$email>: $message\n", FILE_APPEND);

    echo "Сообщение отправлено!";
}
?>


