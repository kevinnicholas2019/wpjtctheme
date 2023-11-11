<article class="container">
    <div class="post mb-5">
        <div class="media d-md-flex d-sm-block">
            <img class="me-md-3 mb-md-0 mb-3 img-fluid post-thumb" src="<?= the_post_thumbnail_url() ?>" alt="image">
            <div class="media-body">
                <h3 class="title mb-1"><?= the_title() ?></h3>
                <div class="meta mb-1"><span class="date"><?= the_date() ?></span><span class="comment"><a href="#"><?= get_comments_number_text() ?></a></span></div>
                <div class="intro"><?= the_excerpt() ?></div>
                <a class="more-link" href="<?= the_permalink() ?>">Read more &rarr;</a>
            </div><!--//media-body-->
        </div><!--//media-->
    </div>
</article>