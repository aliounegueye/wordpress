<?php

    get_header();
    ?>
<main>

        <h2>lorem</h2>
        <?php
        if(have_posts())
        {
            while (have_posts())
            {
                the_post();


                ?>
                <article>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div>
                            <?php the_post_thumbnail();?>
                    </div>
                    <div>
                        <?php the_content();?>
                    </div>
                    <div>
                        <?php the_date();?>
                    </div>
                </article>
           <?php }

        }
        get_footer()
        ?>

</main>
