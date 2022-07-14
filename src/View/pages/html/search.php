<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/WebController/home.php';

    cabecalho('User search')
?>
    <img src="../../resources/storage/public/img/42573d7391a7bc9dcdef39375562aa088c386c85.jpg" width="100%" class="img-fluid" title="Logo" alt="Logo">
    <div id="events-container" class="col-md-11">
        <br>
        <h3>Search for: <?=$username?></h3>
        <div id="cards-container" class="row">
            <?php foreach ($users as $u):?>
                <div class="card col-md-2">
                    <img src="../../resources/storage/public/img/<?=$u['image']?>" title="<?="{$u['firstName']} {$u['lastName']}"?>" alt="<?="{$u['firstName']} {$u['lastName']}"?>">
                    <div class="card-body">
                        <p class="card-date"><?=date('d/m/Y', strtotime($u['birth']))?></p>
                        <h5 class="card-title"><?="{$u['firstName']} {$u['lastName']}"?></h5>
                        <p class="card-participants"> <?=$u['ethnicity']?></p>
                        <a href="show.php?id_user=<?=$u['id_user']?>" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            <?php endforeach?>
            <?php if (count($users) == 0 and !empty($username)):?>
                <p>Could not find any users with <strong><?=$username?></strong>! <a href="welcome.php">See all</a></p>
            <?php elseif (count($users) == 0):?>
                <p>No registered users.</p>
            <?php endif?>
        </div>
    </div>
<?php include '../layout/footer.php'?>