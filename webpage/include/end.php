                </main>
                <aside>

                </aside>
                <footer>
                    <div class = "centerbox">
                        <div class = "left">
<?php
$open = 9;
$close = 17;
$indo = "Contact Us!";
$now = (int)date("H");

if($now < $close){
    $next = $open - $now;
    $indo = "We are currently closed, open in ".$next." hours";
}
else if ($now > $close){
    $next = 24-$now+$open;
    $indo = "Today we stay closed, next open in ".$next." hours";
}

echo   '<h4>Contact us</h4>
        <p>Phone: 555 123456</p>
        <p>Open hours: M-F, '.$open.'-'.$close.'</p>
        <p>'.$indo.'</p>
        </>'
?>
                        </div>
                        <div class = "right">
                            <h4>Menu</h4>
                            <ul><?php Menu(); ?></ul>
                        </div>
                    </div>
                </footer>
    </body>
</html>
