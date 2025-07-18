<?php
// test
?>
<section class="book-section">
    <div class="book-container larger-container left-container flex">
        <img src="<?= $book->getImg(); ?>" alt="Couverture du livre <?= $book->getTitle(); ?>" class="book-presentation-img">
        <div class="book-details flex flex-col">
            <div class="book-basic-infos flex flex-col">
                <h1><?= $book->getTitle() ?></h1>
                <p>Par <?= $book->getAuthor() ?></p>
            </div>
            <div class="separator"></div>
            <div class="book-description-container flex flex-col">
                <p class="column-title">Description</p>
                <p class="book-description"><?= $book->getReview() ?></p>
            </div>
            <div class="book-owner-container flex flex-col">
                <p class="column-title">Propriétaire</p>
                <div class="book-owner flex flex-row items-center w-fit-content">
                    <img src="<?= $book->getImg(); ?>" alt="Photo de profil de " class="book-owner-img">
                    <p class="book-owner-username">Alexlecture</p>
                </div>
            </div>
            <a href="" class="btn btn-primary w-full">Envoyer un message</a>
        </div>
    </div>
</section>