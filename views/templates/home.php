<?php
// test
?>
<section class="darker-bg-section">
    <div class="home-introduction-container container flex flex-row justify-center items-center">
        <div class="content-container flex flex-col">
            <div class="text-container flex flex-col">
                <h1>Rejoignez nos lecteurs passionnés</h1>
                <p>Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres.</p>
            </div>
            <a href="index.php?action=books" class="btn btn-primary">Découvrir</a>
        </div>
        <div class="img-container flex flex-col items-end">
            <img src="../../img/hamza-nouasria-unsplash.jpg" alt="Vieil homme lisant devant une librairie remplie de livres">
            <p class="photographer-name">Hamza</p>
        </div>
    </div>
</section>
<section>
    <div class="books-introduction-container container flex flex-col items-center">
        <h2>Les derniers livres ajoutés</h2>
        <div class="books-container flex flex-row">
            <?php foreach ($books as $book) { ?>
                <article class="book-card">
                    <img src="<?= $book->getImg(); ?>" alt="Couverture du livre <?= $book->getTitle(); ?>" class="book-card-img">
                    <div class="book-card-content flex flex-col justify-between">
                        <div class="book-card-infos flex flex-col">
                            <p><?= $book->getTitle(); ?></p>
                            <p class="book-card-author"><?= $book->getAuthor(); ?></p>
                        </div>
                        <p class="book-card-owner">Vendu par :</p>
                    </div>
                </article>
            <?php } ?>
        </div>
        <a href="index.php?action=books" class="btn btn-primary">Voir tous les livres</a>
    </div>
</section>
<section class="darker-bg-section">
    <div class="steps-introduction-container container flex flex-col items-center">
        <div class="steps-introduction-title-div flex flex-col items-center">
            <h2>Comment ça marche ?</h2>
            <p class="text-center">Échanger des livres avec TomTroc c’est simple et amusant ! Suivez ces étapes pour commencer :</p>
        </div>
        <div class="steps-container flex flex-row">
            <article class="step-card">
                <p class="text-center">Inscrivez-vous gratuitement sur notre plateforme.</p>
            </article>
            <article class="step-card">
                <p class="text-center">Ajoutez les livres que vous souhaitez échanger à votre profil.</p>
            </article>
            <article class="step-card">
                <p class="text-center">Parcourez les livres disponibles chez d'autres membres.</p>
            </article>
            <article class="step-card">
                <p class="text-center">Proposez un échange et discutez avec d'autres passionnés de lecture.</p>
            </article>
        </div>
        <a href="index.php?action=books" class="btn btn-secondary">Voir tous les livres</a>
    </div>
</section>
<section class="bg-img-section">
</section>
<section class="darker-bg-section">

</section>