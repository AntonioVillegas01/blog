<?php require 'header.php' ?>
<div class="container">
    <div class="tr-content">
        <div class="row">
            <div class="col-sm-12 col-md-12 tr-sticky">
                <div class="theiaStickySidebar">
                    <div class="breadcrumbs">
                        <a href="<?php echo RUTA ?>index">ADMIN</a>
                        <span>/&nbsp;</span>NUEVO POST
                        <div class="post-counter">
                            <span class="count-number"></span>
                        </div>
                    </div>
                    <div class="blog-list masonry clearfix">
                        <div class="row pull-right" style="margin-bottom:  30px">
                            <div class="col-lg-12 ">
                                <a href="nuevo.php" class="btn btn-primary">New Post</a>

                                <a href="../admin/signout.php" class="btn btn-warning">Log Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-fluid">
                            <h2>NUEVO ARTICULO</h2>
                            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <label>Titulo</label>
                                <input type="text" name="titulo" class="form-control"  >
                                <label>Extracto</label>
                                <input type="text" name="extracto" class="form-control">
                                <label>Texto del Artículo</label>
                                <textarea class="form-control" name="texto" id=""
                                          style="min-height:200px; min-width: 100% "></textarea>
                                <input type="file" name="thumb">
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>

                </div><!-- /.theiaStickySidebar -->
            </div>


        </div><!-- /.row -->

    </div><!-- /.tr-content -->
</div><!-- /.container -->


<?php require 'footer.php' ?>

<?php require 'scripts.php' ?>



</body>
</html>


