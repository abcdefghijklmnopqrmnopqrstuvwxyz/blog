<?php

session_start();

function saveData($title, $text, $image) {
    $tmp_name = $_FILES['image']['tmp_name'];
    $image_data = file_get_contents($tmp_name);
    $image_type = mime_content_type($tmp_name);
    $image_data_uri = 'data:' . $image_type . ';base64,' . base64_encode($image_data);

    $article = array(
        'title' => $title,
        'text' => $text,
        'image' => $image_data_uri
    );

    $_SESSION['articles'][] = $article;

    header("Location: ../../home");
}

saveData($_POST["title"], $_POST["text"], $_POST["image"]);

?>