<div class="banner" style="background-image: url('<?php echo $args
['background'];?>');">
    <div class="banner__container">
        <div class="banner__block banner__block-blue">
            <div class="banner__block--content banner__block--content-blue">
                <h1><?php echo $args['heading'];?></h1>
                <p><?php echo $args['content'];?></p>
                <?php if ($args['link'] !== NULL) :?>
                    <a href="<?php echo $args['link'];?>"><?php echo $args['button'];?></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>