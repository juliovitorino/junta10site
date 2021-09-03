<!-- aqui deve carregar meu cabeçalho (header.php) -->
<?php get_header(); ?>

<!-- navigation area -->    
    <nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="http://junta10.com/" class="logo">
                        <img src="http://junta10.com/assets/img/junta10.png" width="64px" alt="Junta10">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="http://junta10.com">Home</a>
                    </li>
                    <li><a href="http://junta10.com/#about">Sobre</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Como funciona</a>
                        <ul class="sub-menu">
                            <li><a href="http://junta10.com/#como-funciona-cliente">para Cliente</a></li>
                            <li><a href="http://junta10.com/#como-funciona-empreendedor">para Empreendedor</a></li>
                        </ul>
                    </li>
                    <li><a href="http://junta10.com/#pricing">Planos</a></li>
                    <li><a href="http://junta10.com/#contact">Fale Conosco</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="button-wrapper">
                        <a href="http://junta10.com/#baixar-agora" class="boxed-btn btn-rounded">Baixe Agora</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navigation area -->    

<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title"><?php the_title() ?></h1>
                    <ul class="page-navigation">
                        <li><a href="#"> Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <?php the_post_thumbnail('thumbnail', 'full');?>
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d')?>-<?php echo get_the_date('M')?>-<?php echo get_the_date('Y')?></a></li>
                                <li><a href="#"><i class="far fa-user"></i> Por <?php the_author(); ?></a></li>
                                <!--
                                <li class="cat"><i class="fas fa-tags"></i> <a href="#">Lifestyle</a> <a href="#">Travel</a><a href="#">Music</a></li>
                                -->
                            </ul>
                            <h4 class="title"><?php the_title() ?></h4>
                            <p><?php the_content() ?></p>
                        </div>
                        <div class="entry-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title">Tags: </li>
                                    <li><a href="#">Marketing</a><a href="#">Design</a></li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //. entry footer -->
                        
                        <!-- comment area start -->
                        <div class="comment-area"><!-- comment area -->
                            <h3 class="comment-title">03 Comments</h3>
                            <ul class="comment-list">
                                <li>
                                    <div class="single-comment-wrap"><!-- single comment wrap -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.jpg" alt="comment images">
                                           
                                        </div>
                                        <div class="content">
                                                <span class="date">12 Sep,18</span>
                                            <h4 class="title">Steve Smith</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div><!-- //. single comment wrap -->
                                </li>
                                <li class="has-children">
                                    <ul>
                                        <li>
                                            <div class="single-comment-wrap"><!-- single comment wrap -->
                                                <div class="thumb">
                                                    <img src="assets/img/comments/02.jpg" alt="comment images">
                                                    
                                                </div>
                                                <div class="content">
                                                     <span class="date">12 Sep,18</span>
                                                    <h4 class="title">Jhon Martin</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                            </div><!-- //. single comment wrap -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="single-comment-wrap"><!-- single comment wrap -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.jpg" alt="comment images">
                                           
                                        </div>
                                        <div class="content">
                                                <span class="date">12 Sep,18</span>
                                            <h4 class="title">Warner Martin</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div><!-- //. single comment wrap -->
                                </li>
                            </ul>
                        </div>
                        <!-- comment area - end -->

                        <!-- comment form wrap start -->
                        <div class="comment-form-wrap"> 
                            <h3 class="title">Leave A Comment</h3>
                            <form action="blog-details.html" class="comment-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject...">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group textarea">
                                    <textarea name="message" id="message" class="form-control" placeholder="Message..." cols="30" rows="10"></textarea>
                                </div>
                                <button class="submit-btn" type="submit">Post Comment</button>
                            </form>
                        </div>
                        <!-- //.comment form wrap end --> 
                    </div> 
            </div>
            <div class="col-lg-4">
                    <div class="sidebar widget-area"><!-- widget area -->

                        <div class="widget widget_search"><!-- widget  -->
                            <h4 class="widget-title">Pesquisar</h4>
                            <form action="blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- //. widget -->
    
                        <div class="widget widget_categories"><!-- widget  -->
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li class="cat-item"><a href="#">Lifestyle</a></li>
                                <li class="cat-item"><a href="#">Travel</a></li>
                                <li class="cat-item"><a href="#">Fashion</a></li>
                                <li class="cat-item"><a href="#">Music</a></li>
                                <li class="cat-item"><a href="#">Branding</a></li>
                                <li class="cat-item"><a href="#">History</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_popular_posts"><!-- widget  -->
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul>
    
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/01.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/02.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
                                <li class="single-popular-post-item"><!-- single popular post item -->
                                    <div class="thumb">
                                        <img src="assets/img/popular-post/03.jpg" alt="popular post image">
                                    </div>
                                    <div class="content">
                                        <span class="time">June 20, 18</span>
                                        <h4 class="title"><a href="#">Aliquam eu mauris euismod lacus vel.</a></h4>
                                    </div>
                                </li><!-- //. single popular post item -->
    
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud"><!-- widget -->
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">Events</a>
                                <a href="#">Love</a>
                                <a href="#">Story</a>
                                <a href="#">Gift</a>
                                <a href="#">Events</a>
                                <a href="#">First Metting</a>
                                <a href="#">Couple</a>
                            </div>
                        </div>
    
                    </div>
            </div>
        </div>
    </div>
</div>



<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about_widget">
                        <a href="http://junta10.com" class="footer-logo"><img src="http://junta10.com/assets/img/junta10.png" alt=""></a>
                        <p>
                            Junta10 é uma plataforma completa e flexível para criação de um programa de cashback, campanhas e recompensas pela 
                            fidelidade de seu cliente.
                        </p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Links Úteis</h4>
                        <ul>
                            <li><a href="http://junta10.com"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="http://junta10.com/#about"><i class="fas fa-chevron-right"></i> Sobre</a></li>
                            <li><a href="http://junta10.com/#como-funciona-cliente"><i class="fas fa-chevron-right"></i> Cliente</a></li>
                            <li><a href="http://junta10.com/#como-funciona-empreendedor"><i class="fas fa-chevron-right"></i> Empreendedor</a></li>
                            <li><a href="http://junta10.com/#pricing"><i class="fas fa-chevron-right"></i> Planos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Quer Ajuda?</h4>
                        <ul>
                            <li><a href="http://junta10.com/#faq-area"><i class="fas fa-chevron-right"></i> Perguntas Frequentes</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Privacidade</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Suporte</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Termo</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Baixar</h4>
                        <ul>
                            <li><a href="http://bit.ly/junta10iOS"><i class="fab fa-apple"></i> Versão IOS</a></li>
                            <li><a href="http://bit.ly/junta10"><i class="fab fa-android"></i> Versão Android</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area"><!-- left content area -->
                            &copy; Copyrights 2021 Junta10 Todos os direitos reservados.
                        </div><!-- //. left content aera -->
                        <div class="right-content-area"><!-- right content area -->
                            Designed by <strong>Love</strong>
                        </div><!-- //. right content area -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
<div class="preloader-wrapper" id="preloader">
    <div class="preloader" >
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
</div>

  <!-- preloader area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

<?php get_footer(); ?>