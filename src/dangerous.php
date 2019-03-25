<html>
    <form method="post">
        <textarea rows="10" cols="120" name="phpcode">
        <?php echo $_POST['phpcode']; ?>
        </textarea><br /><br />
        <input type="submit" name="submit" value="submit">
    </form>
</html>

<?php

// WARNING: do not upload this on production

$phpCode = $_POST['phpcode'];

eval($phpCode);
