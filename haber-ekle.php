<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $link = $_POST['link'];

    $newHaber = [
        "title" => $title,
        "content" => $content,
        "image" => $image,
        "link" => $link
    ];

    $data = json_decode(file_get_contents('haberler.json'), true);
    $data[] = $newHaber;

    file_put_contents('haberler.json', json_encode($data, JSON_PRETTY_PRINT));
    echo 'Haber başarıyla eklendi!';
}
?>
