<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/WebController/home.php';

    cabecalho('Home')
?>
    <link rel="stylesheet" href="../../resources/css/style.css">
    <div id="search-container" class="col-md-12">
        <div class="container">
            <?php if (isset($_SESSION['insert'])){echo $_SESSION['insert'];}?>
        </div>
        <form action="search.php" id="form-search" method="GET">
            <div class="box-search">
                <input type="text" id="search" name="search" title="Search" class="form-control w-75" placeholder="Search...">
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <br>
    <img src="../../resources/storage/public/img/42573d7391a7bc9dcdef39375562aa088c386c85.jpg" width="100%" class="img-fluid" title="Logo" alt="Logo">
    <div id="events-container" class="col-md-11">
        <br>
        <h4>Users</h4>
        <p class="subtitle">See all registered users:</p>
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
        </div>
    </div>
<?php include '../layout/footer.php'?>