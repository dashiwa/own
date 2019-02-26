<!-- templates/show.php -->
<?php $title = $post['title'] ?>

<?php ob_start() ?>
    <h1><?= $post['title'] ?></h1>

    <div class="date"><?= $post['created_at'] ?></div>
    <div class="body">
        <?= $post['body'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>