<?php session_start();if (isset($_SESSION['insert'])){echo $_SESSION['insert'];unset($_SESSION['insert']);}?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
    <?php include '../layout/others/header.php'?>
                <h1>Login</h1>
            </div>
        </header>
        <section>
            <div id="event-create-container" class="col-md-6 offset-md-3">
                <form action="../../../App/Controllers/WebController/login.php" name="Login" method="POST">
                    <div class="form-group">
                        <label for="loginEmail" title="Email">E-mail</label>
                        <input type="email" name="logEmail" id="logEmail" title="Email" class="form-control" autofocus="" placeholder="E-mail" required="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="loginPass" title="Password">Password</label>
                        <input type="password" name="logPass" id="logPass" title="Password" class="form-control" placeholder="Password" required="">
                    </div>
                    <br>
                    <center>
                        <input type="submit" class="btn btn-primary" title="Enter" value="Enter">
                    </center>
                </form>
                <br>
                <center>
                    <a href="create.php" title="Create an account">
                        <p>Create an account</p>
                    </a>
                </center>
            </div>
<?php include '../layout/others/footer.php'?>