<?php
/**
 * Template Name: Despre noi
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="page-intro" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/i/page-intro.jpg')">
    <div class="container">
        <div class="page-intro__content">
            <h3 class="page-intro__title"><?php the_title(); ?></h3>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url(); ?>"><?php echo get_the_title(12); ?></a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>
</div>

<div class="section single-post page-about">
    <div class="container">
        <div class="single-post__wrap">
            <div class="single-post__item">
                <header class="section__header">
                    <h3 class="section__subtitle">Suntem Solustrid</h3>
                    <h2 class="section__title">Transformarea cu inovații</h2>
                </header>
                <div class="single-post__content">
                    <b>Conectarea tuturor industriilor și crearea unei punți între toate în această
                        eră revoluționară a industrializării și dezvoltării cu anii noștri de experiență</b>
                    <p>Solustrid stă la dispoziție inovație, servicii, certificare, producție, dezvoltare. Singurul și
                        singurul nostru obiectiv este să susținem economia mondială, oferind cele mai bune servicii
                        pentru
                        că credem „Lumea ești tu”.

                    </p>
                    <p>Instalarea unui contor de gaz este un lucru necesar. În primul rând, plata cu contorul va fi mult
                        mai
                        mică decât cea plătită la tarifele standard. Cât de cubi de gaz cheltuiți, exact ceea ce trebuie
                        să
                        plătiți. Acei rezidenți care nu au instalat un contor de gaz plătesc de mai multe ori. Și în al
                        doilea rând, veți începe să economisiți gaze naturale și nu îl veți irosi. Prin instalarea unui
                        contor de gaz, vă veți economisi banii.</p>

                    <h3>Echipamente cu gaz</h3>

                    <p>Solustrid stă la dispoziție inovație, servicii, certificare, producție, dezvoltare.
                        Singurul și singurul nostru obiectiv este să susținem economia mondială, oferind
                        cele mai bune servicii pentru că credem „Lumea ești tu”.</p>
                    <p>Instalarea unui contor de gaz este un lucru necesar. În primul rând, plata cu contorul va fi mult
                        mai mică decât cea plătită la tarifele standard. Cât de cubi de gaz cheltuiți, exact ceea ce
                        trebuie să plătiți. Acei rezidenți care nu au instalat un contor de gaz plătesc de mai multe
                        ori. Și în al doilea rând, veți începe să economisiți gaze naturale și nu îl veți irosi. Prin
                        instalarea unui contor de gaz, vă veți economisi banii.</p>
                </div>
            </div>
            <div class="single-post__item">
	            <?php require __DIR__.'/template-parts/single-post-images.php';?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
