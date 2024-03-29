<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
?>
<?php include 'header.php';?>

<div class="container loginContainer">
    <h1>New Task</h1>
    <div class="login-box">
        <form method="post" action="newProjectValidation.php">
            <div class="input-box">
                <label for="full">Full Task:</label>
                <input type="text" name="full">
            </div>
            <div class="input-box">
                <label for="short">Shorten Task:</label>
                <input type="text" name="short">
            </div>
            <button type="submit">Add new Task</button>
        </form>
        <?php
            if(isset($_SESSION['addProjectError'])){
                echo $_SESSION['addProjectError'];
                unset($_SESSION['addProjectError']);
            }
        ?>
    </div>
</div>

<?php include 'footer.php';?>