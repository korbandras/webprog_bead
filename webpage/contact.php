<?php include "include/begin.php"; ?>

<h1>Lorem ipsum dolor.</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet maxime neque ratione.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias beatae consequatur dolor exercitationem fugit id laboriosam laudantium natus porro quidem repudiandae sint, suscipit vero.</p>

<section>
    <h2>Contact us</h2>
<?php
if(isset($_POST["sendmail"])){
    echo '<p class = "success">Sent successfully</p>';
    echo '<p>Name: '.$_POST["name"].'</p>';
    echo '<p>Email: '.$_POST["email"].'</p>';
    echo '<p>Review: '.$_POST["review"].'</p>';
}
?>
    <form method="post" action="contact.php">
        <div>
            <label for = "inputname">Your name</label>
            <input type="text" name="name" id="inputname" maxlength="200">
        </div>
        <div>
            <label for = "inputemail">Your email</label>
            <input type="email" name="email" id="inputemail" maxlength="250">
        </div>
        <div>
            <label for = "inputreview">Please select your review grade</label>
            <select name="review" id="inputreview">
                <option value="Sehr gut">Sehr gut</option>
                <option value="Gut">Gut</option>
                <option value="Mittel">Mittel</option>
                <option value="Ausreichend">Ausreichend</option>
                <option value="Unzureichend">Unzureichend</option>
            </select>
        </div>
        <div>
            <button name="sendmail" type="submit">Send</button>
        </div>
    </form>
</section>

<?php include "include/aside.php"; ?>
<?php include "include/end.php"; ?>
