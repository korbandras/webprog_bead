<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Water polo</title>
        <link href = "css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div id = "siteTitle">
                <a href = "mvlsz.hu"></a>
            </div>
            <div class = "headerimg" style="background-image: url()">
                <div class = "centerbox">
                    <section>
<?php
$data = [
    ['title' => "The best of waterpolo",'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci impedit natus ullam."],
    ['title' => "Dark side of water polo",'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti expedita necessitatibus temporibus vero, voluptates."],
    ['title' => "Happening under water",'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, nisi?"],
    ['title' => "Refs",'text' => "Lorem ipsum dolor sit amet."],
];
$idk = rand(0, count($data)-1);
$data = $data[$idk];
echo '<h3>'. $data['title'] .'</h3><p>'. $data['text'] .'</p>';

?>
                    </section>
                </div>
            </div>
        </header>
        <div id = "page">
            <div class = "centerbox">
                <main id = "content">
