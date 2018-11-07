<?php require 'header.php' ?>
<div class="container">
    <div class="tr-content">
        <div class="row">
            <div class="col-sm-12 col-md-12 tr-sticky">
                <div class="theiaStickySidebar">
                    <div class="breadcrumbs">
                        <a href="<?php echo RUTA ?>index">ADMIN</a>
                        <span>/&nbsp;</span>EDIT POST
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
                            <h2>EDIT ARTICLE</h2>
                            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <input type="hidden"  name="id" value="<?php echo $post['id']; ?>">
                                <label>Titulo</label>
                                <input type="text" name="titulo" class="form-control" value="<?php echo $post['titulo']; ?>" >
                                <label>Extracto</label>
                                <input type="text" name="extracto" class="form-control" value="<?php echo $post['extracto']; ?>">
                                <label>Texto del Artículo</label>
                                <textarea class="form-control" name="texto" maxlength="5000" style="min-height:200px; min-width: 100%">
                                     <?php echo $post['texto']; ?>
                                </textarea>
                                <input type="file" name="thumb">
                                <input type="hidden"  name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
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


