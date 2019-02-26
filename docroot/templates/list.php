<!-- templates/list.php -->
<?php $title = 'List of Posts' ?>

<?php ob_start() ?>
<h1>List of Posts</h1>
<ul>
  <?php foreach ($posts as $post): ?>
      <li>
          <a href="show.php?id=<?= $post['id'] ?>">
            <?= $post['title'] ?>
          </a>
      </li>
  <?php endforeach ?>
</ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>