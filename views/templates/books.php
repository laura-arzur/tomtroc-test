<?php
    // test
?>

<div>
    <?php foreach($books as $book) { ?>
        <article>
            <h2><?= $book->getTitle() ?></h2>
        </article>
    <?php } ?>
</div>