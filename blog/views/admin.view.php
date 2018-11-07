


<?php require '../views/header.php'; ?>

<div class="container">
    <div class="tr-content">
        <div class="row">
            <div class="col-sm-12 col-md-12 tr-sticky">
                <div class="theiaStickySidebar">
                    <div class="breadcrumbs">
                        <a href="">ADMIN</a>
                        <span>/&nbsp;</span>CONTROL PANEL
                        <div class="post-counter">
                            <span class="count-number"></span>
                            <span class="count-text">Total Post</span>
                        </div>
                    </div>
                    <div class="blog-list masonry clearfix">
                        <div class="row pull-right" style="margin-bottom:  30px" >
                            <div class="col-lg-12 " >
                                <a href="nuevo.php" class="btn btn-primary">New Post</a>

                                <a href="../admin/signout.php" class="btn btn-warning">Log Out</a>

                            </div>
                        </div>

                        <div class="row">
                            <?php foreach ($posts as $post): ?>
                                <div class="col-sm-12 col-md-12">
                                    <div class="panel" style="background-color: whitesmoke">
                                        <div class="panel-body">
                                            <h2><?php echo $post ['id'] . '.-' . $post ['titulo'] ?></h2>
                                            <a href="editar.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Editar</a>
                                            <a href="../article.php?id=<?php echo $post['id'] ?>"
                                               class="btn btn-primary">Ver</a>
                                            <a href="borrar.php?id=<?php echo $post['id'] ?>" class="btn btn-danger">Borrar</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                    <!-- Pagination -->
                    <?php require '../paginacion.php'; ?>

                </div><!-- /.theiaStickySidebar -->
            </div>


        </div><!-- /.row -->

    </div><!-- /.tr-content -->
</div><!-- /.container -->

<?php require '../views/footer.php'; ?>

<!-- JS -->
<script src="<?php echo RUTA ?>js/jquery.min.js"></script>
<script src="<?php echo RUTA ?>js/bootstrap.min.js"></script>
<script src="<?php echo RUTA ?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo RUTA ?>js/jquery.magnific-popup.js"></script>
<script src="<?php echo RUTA ?>js/theia-sticky-sidebar.js"></script>
<script src="<?php echo RUTA ?>js/main.js"></script>



</body>
</html>