<div class="portfolio__block" id="<?php echo $args['id'];?>" data-aos="fade-right" data-aos-delay="200">
    <div class="portfolio__block--container">
    <div class="portfolio__block--right <?php echo $args['right']['class'];?>">
            <img src="<?php echo $args['right']['url'];?>" alt="Project afbeelding" width="720px" />
        </div>

        <div class="portfolio__block--left-two">
            <div class="portfolio__block--left-content">
                <h3>
                    <?php echo $args['heading'];?>
                </h3>
                <h4>
                    <?php echo $args['subheading'];?>
                </h4>
                <?php echo $args['content'];?>
                <a href="/contact/#contact">
                    <?php echo $args['button'];?>
                </a>
            </div>
        </div>
    </div>
</div>