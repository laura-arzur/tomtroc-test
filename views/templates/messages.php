<?php
    // test
?>

<aside style="width:308px;">
    <h1>Messagerie</h1>
    <?php 
    foreach($conversations as $conversation) { ?>
        <div style="display:flex;flex-direction:row;gap:12px;align-items:center;padding-top:18px;padding-right:42px;padding-bottom:18px;padding-left:34px;">
            <div style="width:fit-content;height:fit-content;">
                <img style="width:48px;height:48px;border-radius:50%;" src="<?= $conversation[1]->getAvatar(); ?>" alt="Photo de profil de <?= $conversation[1]->getUsername(); ?>">
            </div>
            <div style="display:flex;flex-direction:column;gap:7px;width:100%">
                <div style="display:flex;flex-direction:row;justify-content:space-between;">
                    <p><?= $conversation[1]->getUsername(); ?></p>
                    <p>15:43</p>
                </div>
                <p><?= $conversation[0]->getContent(); ?></p>
            </div>
        </div>
    <?php } ?>
</aside>
<div>
        <article>
            <h2>.</h2>

            <p></p>
        </article>
</div>