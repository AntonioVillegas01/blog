<?php require 'header.php'; ?>

<div class="container">
    <div class="tr-content">
        <div class="row">
            <div class="col-sm-8 col-md-9 tr-sticky">
                <div class="theiaStickySidebar">
                    <div class="breadcrumbs">
                        <a href="">Home</a>
                        <span>/&nbsp;</span>Article Details
                    </div>
                    <div class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-list-desc">
                                <h3><?php echo $posts ['titulo'] ?></h3>
                                <label>
                                    <span>admin&nbsp;‐</span>
                                    <?php echo fecha($posts ['fecha'])  ?>
                                    <span class="blog-comments">
												<i class="fa fa-comment-o"></i>
												<a href="">
												0</a>
											</span>
                                </label>
                            </div>

                            <!-- Post Thumbnail -->
                            <div class="blog-image">
                                <img src="img/uploads/<?php echo $posts ['thumb'] ?>"
                                     alt="<?php echo $posts ['titulo'] ?>" class="img-article">
                            </div>
                            <div class="blog-text">
                                <p><?php echo  nl2br ($posts['texto'])  ?></p>

                                <blockquote class="typo_style2 "><p><?php echo $posts ['extracto'] ?></p></blockquote>

                            </div>
                        </div>

                        <!-- Tags -->
                        <ul class="blog-tags clearfix">
                            <li><span>Tags</span></li>
                            <li><a href="">natural</a></li>
                            <li><a href="">super</a></li>
                        </ul>


                        <div class="blog-share">
                            <ul class="clearfix">
                                <li>
                                    <a href="" class="facebook"><i class="fa fa-facebook fa-lg"></i>Facebook</a>
                                </li>
                                <li>
                                    <a href="" class="twitter"><i class="fa fa-twitter fa-lg"></i>Twitter</a>
                                </li>
                                <li>
                                    <a href="" class="gplus"><i class="fa fa-google-plus fa-lg"></i>Google+</a>
                                </li>
                                <li>
                                    <a href="" class="pinterest"><i class="fa fa-pinterest fa-lg"></i>Pinterest</a>
                                </li>
                            </ul>
                        </div><!-- Share Post -->

                        <div class="post-link-blog clearfix">
                            <div class="prev-post clearfix">
                                <a href="" rel="prev">Previous Article</a>
                                <span>
											<a href=""><img src="images/theater-hannover-43x39.jpg" alt="Image"
                                                            class="img-responsive"></a>
										</span>
                                <label><a href="">Freies Theater Hannover</a></label>
                            </div>
                        </div><!-- /.post-link-blog -->

                        <div class="blog-author clearfix">
                            <img alt="Image"
                                 src="http://1.gravatar.com/avatar/1986f5007ea888ec7ba6542025be0310?s=64&amp;r=g">
                            <div class="author-desc">
                                <h4>Mark Abucayon</h4>
                                <ul class="author-socials clearfix">
                                    <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-globe fa-lg"></i></a></li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div><!-- /.blog-author -->

                        <div class="blog-other-post clearfix">
                            <h5>You may also like</h5>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="masonry-item">
                                        <div class="blog-mask">
                                            <a href="http://themecss.com/wp/Desilog/new-swedish-books/"
                                               class="blog-format-image-hover">
                                                <i class="fa fa-external-link fa-3x"></i>
                                            </a>

                                            <!-- Post Thumbnail -->
                                            <div class="blog-image">
                                                <a href=""><img src="images/new-swedish-263x238.jpg" alt="Image"
                                                                class="img-responsive"></a>
                                            </div>

                                        </div>
                                        <div class="blog-list-desc">
                                            <span class="categories"><a href="">Branding</a></span>
                                            <h4><a href="">New Swedish Books</a></h4>
                                            <label>
                                                <span>admin&nbsp;‐</span>
                                                April 20, 2016
                                            </label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="masonry-item">
                                        <div class="blog-mask">
                                            <div class="blog-audio">
                                                <a href="" class="blog-format-image-hover">
                                                    <i class="fa fa-external-link fa-3x"></i>
                                                </a>
                                                <span class="blog-format-audio">Audio</span>
                                                <a href=""><img src="images/featuring-color-green-263x238.jpg"
                                                                alt="Image" class="img-responsive"></a>
                                            </div>
                                        </div>
                                        <div class="blog-list-desc">
                                            <span class="categories"><a href="">Editorial Design</a></span>
                                            <h4><a href="">Featuring the color GREEN</a></h4>
                                            <label>
                                                <span>admin&nbsp;‐</span>
                                                April 20, 2016
                                            </label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="masonry-item">
                                        <div class="blog-mask">
                                            <a href="" class="blog-format-image-hover">
                                                <i class="fa fa-external-link fa-3x"></i>
                                            </a>
                                            <div class="blog-image">
                                                <a href=""><img src="images/theater-hannover-263x238.jpg" alt="Image"
                                                                class="img-responsive"></a>
                                            </div>
                                        </div>
                                        <div class="blog-list-desc">
                                            <span class="categories"><a href="" rel="category tag">Character Design</a> <a
                                                        href="">Drawing</a></span>
                                            <h4><a href="">Freies Theater Hannover</a></h4>
                                            <label>
                                                <span>admin&nbsp;‐</span>
                                                April 20, 2016
                                            </label>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- Other Posts -->

                        <div class="contact-form comment-form clearfix">
                            <h4>Leave a Comment</h4>
                            <form class="contact-form" name="contact-form" method="post" action="#">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" required="required" class="form-control" rows="7"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required"
                                                   placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" required="required"
                                                   placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required"
                                                   placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="wpcf7-form-control wpcf7-submit">Post a Message
                                    </button>
                                </div>
                            </form><!-- /.contact-form -->
                        </div><!-- /.contact-form -->
                    </div>
                </div><!-- /.theiaStickySidebar -->
            </div>
            <?php require 'side-bar-right.php'; ?>

        </div><!-- /.row -->

    </div><!-- /.tr-content -->
</div><!-- /.container -->

<?php require 'footer.php'; ?>

<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/main.js"></script>
</body>
</html>