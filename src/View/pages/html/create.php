<?php session_start();if (isset($_SESSION['insert'])){echo $_SESSION['insert'];unset($_SESSION['insert']);}?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Contact create</title>
    <?php include '../layout/others/header.php'?>
                <h1>Create an account</h1>
            </div>
        </header>
        <section>
            <div id="event-create-container" class="col-md-6 offset-md-3">
                <form action="../../../App/Controllers/UserController/store.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="inFname" title="First name">First name</label>
                                <input type="text" name="inFname" id="inFname" title="First name" class="form-control" placeholder="First name" autofocus="" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="inLname" title="Last name">Last name</label>
                                <input type="text" name="inLname" id="inLname" title="Last name" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inCpf" title="CPF">CPF</label>
                        <input type="text" name="inCpf" id="inCpf" title="CPF" maxlength="11" class="form-control" placeholder="CPF" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inEmail" title="Email">E-mail</label>
                        <input type="email" name="inEmail" id="inEmail" title="Email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inPass" title="Password">Password</label>
                        <input type="password" name="inPass" id="inPass" title="Password" class="form-control" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label title="Gender">Gender</label>
                        <p>
                            <input type="radio" name="inGender" class="check" id="fem" title="Feminine" value="Feminine">
                            <label for="fem" title="Feminine">Feminine</label>
                        
                            <input type="radio" name="inGender" class="check" id="male" title="Male" value="Male">
                            <label for="male" title="Male">Male</label>
                        
                            <input type="radio" name="inGender" class="check" id="others" title="Others" value="Others">
                            <label for="others" title="Others">Others</label>
                        </p>
                    </div>
                    <br>
                    <div class="form-group">
                        <label title="Ethnicity">Ethnicity</label>
                        <p>
                            <input type="radio" name="inEth" class="check" id="am" title="Amerindian" value="Amerindian">
                            <label for="am" title="Amerindian">Amerindian</label>
                        
                            <input type="radio" name="inEth" class="check" id="as" title="Asian" value="Asian">
                            <label for="as" title="Asian">Asian</label>
                        
                            <input type="radio" name="inEth" class="check" id="bl" title="Black" value="Black">
                            <label for="bl" title="Black">Black</label>

                            <input type="radio" name="inEth" class="check" id="cb" title="Caboclo" value="Caboclo">
                            <label for="cb" title="Caboclo">Caboclo</label>

                            <input type="radio" name="inEth" class="check" id="cf" title="Cafuzo" value="Cafuzo">
                            <label for="cf" title="Cafuzo">Cafuzo</label>

                            <input type="radio" name="inEth" class="check" id="cc" title="Caucasian" value="Caucasian">
                            <label for="cc" title="Caucasian">Caucasian</label>

                            <input type="radio" name="inEth" class="check" id="mt" title="Mulato" value="Mulato">
                            <label for="mt" title="Mulato">Mulato</label>
                        </p>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inBirth" title="Birthday date">Birthday date</label>
                        <input type="date" name="inBirth" id="inBirth" title="Birthday date" class="form-control" required>
                    </div>
                    <br>
                    <center>
                        <div class="form-group">
                            <input type="file" id="inImage" name="inImage[]" multiple class="from-control-file">
                        </div>
                    </center>
                    <br>
                    <div class="form-group">
                        <p>Message</p>
                        <textarea name="inMsg" cols="104" rows="7" id="inMsg" placeholder="User message"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" title="Register user" value="Register user">
                </form>
                <br>
                <a href="login.php">
                    <input type="submit" class="btn btn-primary" title="Return" value="Return">
                </a>
            </div>
<?php include '../layout/others/footer.php'?>