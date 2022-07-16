<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/UserController/edit.php';

    cabecalho("{$name} {$surname}")
?>
    <section>
        <header>
            <div class="container">
                <h1><?="{$name} {$surname}"?></h1>
            </div>
        </header>
        <div id="vacancy-create-container" class="col-md-6 offset-md-3">
            <?php if (isset($_SESSION['up'])){echo $_SESSION['up'];unset($_SESSION['up']);}?>
            <form action="../../../App/Controllers/UserController/update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?=$id?>">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="upFname" title="First name">First name</label>
                            <input type="text" name="upFname" id="upFname" title="First name" value="<?=$firstName?>" class="form-control" placeholder="First name" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="upLname" title="Last name">Last name</label>
                            <input type="text" name="upLname" id="upLname" title="Last name" value="<?=$lastName?>" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="upEmail" title="Email">E-mail</label>
                    <input type="email" name="upEmail" id="upEmail" title="Email" value="<?=$email?>" class="form-control" placeholder="E-mail" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="upPass" title="Password">Password</label>
                    <input type="password" name="upPass" id="upPass" title="Password" value="<?=$password?>" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <center>
                    <div class="form-group">
                        <input type="file" id="upImage" name="upImage[]" multiple class="from-control-file">
                    </div>
                </center>
                <br>
                <div class="form-group">
                    <p>Message</p>
                    <textarea name="upMsg" cols="104" rows="7" id="upMsg" placeholder="User message"><?=$message?></textarea>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" title="Update user" value="Update user">
            </form>
            <br>
            <a href="dashboard.php">
                <input type="submit" class="btn btn-primary" title="Return" value="Back to panel">
            </a>
        </div>
    </section>
<?php include '../layout/footer.php'?>