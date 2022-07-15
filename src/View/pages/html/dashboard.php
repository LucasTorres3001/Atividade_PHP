<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/WebController/dashboard.php';

    cabecalho('Dashboard')
?>
    <section>
        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h1>Users list</h1>
        </div>
        <?php if (isset($_SESSION['msg'])){echo $_SESSION['msg'];unset($_SESSION['msg']);}?>
        <div class="col-md-10 offset-md-1 dashboard-events-container">
            <?php if (count($users) > 0):?>
                <table class="table">
                    <tr>
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Usernames</th>
                            <th scope="col">Email</th>
                            <th scope="col">Images</th>
                            <th scope="col">Actions</th>
                        </thead>
                    </tr>
                    <tbody>
                        <?php foreach ($users as $u):?>
                            <tr>
                                <td scope="row"><?=$n++?></td>
                                <td><?="{$u['firstName']} {$u['lastName']}"?></td>
                                <td><?=$u['email']?></td>
                                <td>
                                    <img src="../../resources/storage/public/img/<?=$u['image']?>" class="img-fluid" width="81" height="81" title="<?="{$u['firstName']} {$u['lastName']}"?>" alt="<?="{$u['firstName']} {$u['lastName']}"?>">
                                </td>
                                <td>
                                    <a href="edit.php?id_user=<?=$u['id_user']?>" title="Edit datas" class="btn btn-info edit-btn">
                                        <ion-icon name="create-outline"></ion-icon> Edit
                                    </a>
                                    <a href="../../../App/Controllers/UserController/destroy.php?id_user=<?=$u['id_user']?>" title="Delete users" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon> Delete
                                    </a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            <?php else:?>
                <p>There are no registered users, <a href="add.php">Add users</a></p>
            <?php endif?>
        </div>
    </section>
<?php include '../layout/footer.php'?>