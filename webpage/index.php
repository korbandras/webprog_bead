<?php include "include/begin.php"; ?>

<h1>Welcome</h1>
<article>
<?php
$intro = file_get_contents("content/idk.txt");
$text = file_get_contents("content/idk.txt");
$img = "content/idk.jpg";

echo   '<h2 class = lead>'.$intro.'</h2>
        <img src = "'.$img.'">
        <p>'.nl2br($text).'</p>'
?>
    <h2>Phasellus hendrerit malesuada pulvinar</h2>
    <p>Phasellus hendrerit malesuada pulvinar. Nulla imperdiet et orci in vehicula. Sed tincidunt imperdiet augue a pellentesque. Aliquam dignissim dignissim scelerisque. Sed at ante ut nulla feugiat pellentesque nec eget turpis. Sed tempor ex a dignissim semper. Praesent ullamcorper finibus arcu, quis scelerisque augue pulvinar id. Nulla vitae ante vitae massa vestibulum consequat ac eu risus. Pellentesque id fringilla tellus. Donec quis velit sapien. Quisque interdum quis magna vitae dictum. Nunc purus ligula, elementum dapibus vestibulum at, lacinia in est. Duis fringilla sapien massa, in consectetur purus condimentum at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce dui massa, dictum non nisl eget, facilisis convallis nisi. Etiam ac leo malesuada, luctus nisl vitae, sollicitudin risus.</p>

</article>
<?php
$valamitxt = [
    'In B.C. 462 the leader of the "sailing people, Ephialtes was elected strategist',
    'Athens stove to spread democracy in the Dhelos alliance it lead, but its external assessment was negative',
    'Rather, it denotes the truth and covers a morally based system of norms',
    'Nothing is true, everything is permitted',
    "The man's ability to marry at the age of 18, the bride was the object of the agreement, not the subject",
];

echo '<section><h3>Lorem ipsum dolor sit amet.</h3><ul>';
foreach($valamitxt as $line){
    echo '<li>'.$line.'</li>';
}
echo'</ul></section>';
?>

<?php include "include/end.php"; ?>
