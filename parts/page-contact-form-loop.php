<main class="int-page-body">
    <div class="container pt-5 pb-5 overflow-hidden">
        <div class="row gx-5">
            <div class="col-lg-7">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts or pages matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-lg-5">
                <h4 class="pb-3 sub-title">Call Us Today:</h4>
                <p class="display-6 pb-3"><a href="tel:1+4109390646" style="text-decoration:none;">1-410-939-0646</a></p>
                <h4 class="pb-3 sub-title">Our Location:</h4>
                <div class="ratio ratio-16x9 shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12308.711192938492!2d-76.1220741!3d39.5330429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x960162a989c70172!2sMid-Atlantic%20Propane%20Exchange!5e0!3m2!1sen!2sus!4v1658776225810!5m2!1sen!2sus" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h4 class="sub-title pt-4">Our Address:</h4>
                <div class="">
                    <address class="h5">
                        Mid-Atlantic Propane Exchange<br />
                        1751 Pulaski Highway<br />
                        Havre de Grace, MD 21078<br />
                        <abbr title="Phone">P:</abbr> (410) 939-0646<br />
                    </address>
                </div>
            </div>
        </div>
        
    </div>
</main>
