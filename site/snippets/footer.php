
 <!-- Footer -->
    <footer>
        <div class="container footer-custom">
            <div class="row">
                <div class="col-lg-6 col-md-6" >
                    <div class="copyright"><?php echo $site->copyright()->kirbytext() ?></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="list-inline text-right">
                        <li>
                            <a href="<?php echo $site->facebook() ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $site->twitter() ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <?php echo js("assets/js/jquery.js") ?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo js("assets/js/bootstrap.min.js") ?>

    <!-- Custom Theme JavaScript -->
    <?php echo js("assets/js/clean-blog.js") ?>

</body>

</html>