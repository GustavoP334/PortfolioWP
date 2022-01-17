<?php
$estiloPagina = 'projetos.css';
require_once 'header.php';?>

    <!--imagem-->
    <!--the_post_thumbnail('post-thumbnail', array('class' => 'imagem-solucoes'));-->
    <body>
    <?php $args = array('post_type' => 'projetos');
    $query= new WP_Query($args);
    if ($query->have_posts()): ?>
        <main class="page-proj">
            <ul class="lista-proj container-header">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                <li class="col-md-3 solucoes">
                    <a href="<?php get_permalink();?>">
                    <?php the_post_thumbnail();
                    the_title('<p class="titulo-proj">', '</p>');?>
                    </a>
                    <?php the_content(); ?>
                </li>
                <?php endwhile; ?>
            </ul>
        </main>
    <?php endif; ?>
    </body>
<?php
require_once 'footer.php';
