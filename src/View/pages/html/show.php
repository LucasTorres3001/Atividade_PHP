<?php

    use function Src\Services\Function\cabecalho;

    include '../../../Services/Function/cabecalho.php';
    include '../../../App/Controllers/WebController/show.php';

    cabecalho("{$name} {$surname}")
?>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="../../resources/storage/public/img/<?=$image?>" class="img-fluid" title="<?="{$name} {$surname}"?>" alt="<?="{$name} {$surname}"?>">
            </div>
            <div id="info-container" class="col-md-6">
                <h1><?="{$name} {$surname}"?></h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon> <?=$gender?> / <?=$ethnicity?>
                </p>
                <p class="event-date">
                    <ion-icon name="date-outline"></ion-icon> <?=$birthday?>
                </p>
                <p class="events-participants">
                    <ion-icon name="people-outline"></ion-icon> <?=$email?>
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon> <?="{$name} {$surname}"?>
                </p>
                <a href="welcome.php" class="btn btn-primary" id="user-submit">
                    Back to welcome page
                </a>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>About the user:</h3>
                <p class="event-description"><?=$message?></p>
            </div>
        </div>
    </div>
<?php include '../layout/footer.php'?>