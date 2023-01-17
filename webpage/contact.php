<?php include "include/begin.php"; ?>

<h1>Lorem ipsum dolor.</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet maxime neque ratione.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias beatae consequatur dolor exercitationem fugit id laboriosam laudantium natus porro quidem repudiandae sint, suscipit vero.</p>

<section>
    <h2>Contact us</h2>
    <form method="post" action="contact.php">
        <div>
            <label for = "inputname"><b>Your name</b></label>
            <input type="text" name="name" id="inputname" maxlength="200" placeholder="Name">
        </div>
        <div>
            <label for = "inputemail"><b>Your email</b></label>
            <input type="email" name="email" id="inputemail" maxlength="250" placeholder="Email">
        </div>
        <div>
            <label for = "inputreview"><b>Please select your review grade</b></label>
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
    <?php
    if(isset($_POST["sendmail"])){
        echo '<script>alert("Successfully sent a '.$_POST["review"].' review of the site")</script>';
        //echo '<p>Name: '.$_POST["name"].'</p>';
        //echo '<p>Email: '.$_POST["email"].'</p>';
        //echo '<p>Review: '.$_POST["review"].'</p>';
    }
    /*else if ($_POST["sendmail"] === null){
        echo '<script>alert("Failed to send")</script>';
    }*/
    ?>
</section>

<?php include "include/aside.php"; ?>
<?php include "include/end.php"; ?>
