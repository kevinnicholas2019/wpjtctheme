<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?= the_date() ?></span>
            <?php
            the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            <span class="ms-1 me-1">|</span> <span class="comment"> <a href="#comments"><i class='fas fa-comment me-1'></i><?= comments_number()  ?></a></span>
        </div>
    </header>
    <?php
    the_content();
    ?>
</div>