<?php
// Page présentant les livres à l'échange
?>

<section>
    <div class="books-introduction-container smaller-container flex flex-col">
        <div class="flex search-bar-container">
            <h1>Nos livres à l'échange</h1>
            <input id="search-bar" type="text" placeholder="Rechercher un livre">
        </div>
        <div class="books-container">
            <?php foreach ($books as $book) { ?>
                <a href="index.php?action=book&id=<?= $book->getId(); ?>">
                    <article class="book-card h-full">
                        <img src="<?= $book->getImg(); ?>" alt="Couverture du livre <?= $book->getTitle(); ?>" class="book-card-img">
                        <div class="book-card-content flex flex-col justify-between">
                            <div class="book-card-infos flex flex-col">
                                <p><?= $book->getTitle(); ?></p>
                                <p class="book-card-author"><?= $book->getAuthor(); ?></p>
                            </div>
                            <p class="book-card-owner">Vendu par :</p>
                        </div>
                    </article>
                </a>
            <?php } ?>
        </div>
    </div>
</section>