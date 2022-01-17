<?php
$estiloPagina = 'home.css';
require_once 'header.php';?>

<!--imagem-->
<!--the_post_thumbnail('post-thumbnail', array('class' => 'imagem-solucoes'));-->
<body>
<?php //texto inserido pelo adm
if(have_posts()):
    echo '<main class="boxmodel1">';
    while(have_posts()): the_post();
        echo '<div class="conteudo container">';
        the_content();
        echo '</div>';
    endwhile;
    echo '</main>';
endif;
?>
</body>
<?php
require_once 'footer.php';
