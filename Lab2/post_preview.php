<div
    class="posts-group__big-post-preview"
    style="background-image: url('images/<?= $post['img_modifier'] ?>.png')"
>
    <?php if ($post['adventure']): ?>
        <div class="big-post-preview__label">ADVENTURE</div>
    <?php endif; ?>
    <p class="big-post-preview__header"><?= $post['title'] ?></p>
    <p class="big-post-preview__comment"><?= $post['subtitle'] ?></p>
    <div class="big-post-preview__footer">
        <div class="big-post-preview__author-info">
            <img src="./images/<?= $post['author'] ?>.png" alt="<?= $post['author'] ?>" class="author-info__avatar">
            <p class="author-info__name"><?= $post['author'] ?></p>
        </div>
        <div class="big-post-preview__date"><?= $post['date'] ?></div>
    </div>
</div>