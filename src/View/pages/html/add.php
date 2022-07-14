<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/acesso.php';
    if (isset($_SESSION['msg'])){echo $_SESSION['msg'];unset($_SESSION['msg']);}

    cabecalho('Contact add')
?>
    <section>
        <header>
            <div class="container">
                <h1>User add</h1>
            </div>
        </header>
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <form action="../../../App/Controllers/UserController/add.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="addFname" title="First name">First name</label>
                            <input type="text" name="addFname" id="addFname" title="First name" class="form-control" placeholder="First name" autofocus="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="addLname" title="Last name">Last name</label>
                            <input type="text" name="addLname" id="addLname" title="Last name" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="addCpf" title="CPF">CPF</label>
                    <input type="text" name="addCpf" id="addCpf" maxlength="11" title="CPF" class="form-control" placeholder="CPF" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="addEmail" title="Email">E-mail</label>
                    <input type="email" name="addEmail" id="addEmail" title="Email" class="form-control" placeholder="E-mail" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="addPass" title="Password">Password</label>
                    <input type="password" name="addPass" id="addPass" title="Password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <div class="form-group">
                    <label title="Gender">Gender</label>
                    <p>
                        <input type="radio" name="addGender" class="check" id="fem" title="Feminine" value="Feminine">
                        <label for="fem" title="Feminine">Feminine</label>
                    
                        <input type="radio" name="addGender" class="check" id="male" title="Male" value="Male">
                        <label for="male" title="Male">Male</label>
                    
                        <input type="radio" name="addGender" class="check" id="others" title="Others" value="Others">
                        <label for="others" title="Others">Others</label>
                    </p>
                </div>
                <br>
                <div class="form-group">
                    <label title="Ethnicity">Ethnicity</label>
                    <p>
                        <input type="radio" name="addEth" class="check" id="am" title="Amerindian" value="Amerindian">
                        <label for="am" title="Amerindian">Amerindian</label>
                    
                        <input type="radio" name="addEth" class="check" id="as" title="Asian" value="Asian">
                        <label for="am" title="Asian">Asian</label>
                    
                        <input type="radio" name="addEth" class="check" id="bl" title="Black" value="Black">
                        <label for="bl" title="Black">Black</label>

                        <input type="radio" name="addEth" class="check" id="cb" title="Caboclo" value="Caboclo">
                        <label for="cb" title="Caboclo">Caboclo</label>

                        <input type="radio" name="addEth" class="check" id="cf" title="Cafuzo" value="Cafuzo">
                        <label for="cf" title="Black">Cafuzo</label>

                        <input type="radio" name="addEth" class="check" id="cc" title="Caucasian" value="Caucasian">
                        <label for="cc" title="Caucasian">Caucasian</label>

                        <input type="radio" name="addEth" class="check" id="mt" title="Mulato" value="Mulato">
                        <label for="mt" title="Mulato">Mulato</label>
                    </p>
                </div>
                <br>
                <div class="form-group">
                    <label for="addBirth" title="Birthday date">Birthday date</label>
                    <input type="date" name="addBirth" id="addBirth" title="Birthday date" class="form-control" required>
                </div>
                <br>
                <center>
                    <div class="form-group">
                        <input type="file" id="iImage" name="addImage[]" multiple class="from-control-file">
                    </div>
                </center>
                <br>
                <div class="form-group">
                    <p>Message</p>
                    <textarea name="addMsg" cols="104" rows="7" id="addMsg" placeholder="User message"></textarea>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" title="Register user" value="Register user">
            </form>
            <br>
            <a href="dashboard.php">
                <input type="submit" class="btn btn-primary" title="Return" value="Return">
            </a>
        </div>
    </section>
<?php include '../layout/footer.php'?>