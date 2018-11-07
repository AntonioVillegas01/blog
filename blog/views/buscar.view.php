<?php require 'header.php'; ?>
<?php require 'menubar.php'; ?>

<div class="container">
    <div class="tr-content">
        <div class="row">
            <h2><?php echo $titulo;?></h2>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-9 tr-sticky">
                <div class="theiaStickySidebar">
                    <div class="breadcrumbs">
                        <a href="">Home</a>
                        <span>/&nbsp;</span>Results
                        <div class="post-counter">
                            <span class="count-number"></span>
                            <span class="count-text">Total Post</span>
                        </div>
                    </div>
                    <div class="blog-list masonry clearfix">
                        <div class="row">
                            <?php foreach ($result as $post): ?>
                                <div class="col-sm-12 col-md-12">
                                    <div class="masonry-item clearfix">
                                        <div class="blog-mask">
                                            <a href="article.php?id=<?php echo $post['id'] ?>"
                                               class="blog-format-image-hover">
                                                <i class="fa fa-external-link fa-3x"></i>
                                            </a>
                                            <div class="blog-image">
                                                <a href="article.php?id=<?php echo $post['id'] ?>"><img
                                                        src="img/uploads/<?php echo $post['thumb'] ?>"
                                                        alt="super-natural" class="thumb"></a>
                                            </div>
                                        </div>
                                        <div class="blog-list-desc">
												<span class="categories">
													<a href="">Graphic Design</a>
													</span>
                                            <h4>
                                                <a href="article.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo'] ?></a>
                                            </h4>
                                            <label>
                                                <span>admin&nbsp;‐</span><?php echo  fecha($post['fecha'])  ?>
                                            </label>
                                            <p><?php echo $post ['extracto'] ?>...
                                                <a href="article.php?id=<?php echo $post['id'] ?>">
                                                    <span class="badge-doex">Continuar Leyendo</span>
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                    <!-- Pagination -->
                    <?php require 'paginacion.php'; ?>

                </div><!-- /.theiaStickySidebar -->
            </div>

        </div><!-- /.row -->

    </div><!-- /.tr-content -->
</div><!-- /.container -->

<?php require 'footer.php' ?>

<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/main.js"></script>
</body>
</html>