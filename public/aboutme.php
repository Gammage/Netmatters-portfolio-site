<!DOCTYPE html>
<html lang="en">

<?php include './assets/components/head.php'; ?>

<body>

<div id="site_wrapper">

<?php include './assets/components/navbar.php'; ?>

<div class="site_overlay"></div>

    <main class="main">
        <div id="banner_sub">
            <div class="banner_text">
                <h1>About Me</h1>
            </div>           
        </div>

        <?php include './assets/components/button.php'; ?>
    
        <div class="container name_card_ctn">
            <div class="row">
                <div class="col-12 about_content">
                    <h3 class=card_title>I'm Ben</h3>
                <div class="container-fluid name_card_content">
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 img_ctn bio_img">
                        <div class="selfie_container">
                            <img src="./assets/images/selfie/selfiefornetmatters.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 bio_p">
                        <p class="card_desc">A Web Developer training with Netmatters and based in Ipswich. Thanks to The <a href="https://www.netmatters.co.uk/scions-coalition-scheme" target="_blank">Scion Coalition Scheme</a> I have been able to start a exciting new career, and I'm looking for opportunities to further my skills.</p>
                        <span class="card_line"></span>
                        <p class="card_desc">Below are languages I have experience with. Whilst I do have a particular interest with the languages/services listed, Im open to any opportunites to learn and further my career. To that end, please do not hesitate to <a href="index.php#contact">contact me</a></p>
                    </div>
                    </div>
                </div>
                </div>
             </div>        
        </div>

        <div class="container code_section">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="code_card">
                        <div class="code_head"><h3><i class="fab fa-html5"></i></h3></div>
                        <div class="code_content">
                            <h3>Html</h3>
                            <p>Website creation</p>
                            <span><h4><i class="fab fa-wordpress"></i><i class="fab fa-bootstrap"></i></h4></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="code_card">
                        <div class="code_head"><h3><i class="fab fa-sass"></i></h3></div>
                        <div class="code_content">
                            <h3>Scss</h3>
                            <p>Scss, mixins, variables, Media queries, partials</p>
                            <span><h4><i class="fab fa-css3"></i><i class="fab fa-bootstrap"></i></h4></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="code_card">
                        <div class="code_head"><h3><i class="fab fa-js"></i></h3></div>
                        <div class="code_content">
                            <h3>JavaScript</h3>
                            <p>Callback functions, functions, Dynamic styling, client-side validation</p>
                            <span><h4><i class="fab fa-npm"></i><i class="fab fa-bootstrap"></i></h4></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="code_card">
                        <div class="code_head"><h3><i class="fab fa-php"></i></h3></div>
                        <div class="code_content">
                            <h3>PHP</h3>
                            <p>CMS, database management, functions, server validation, API calls</p>
                            <span><h4><i class="fab fa-laravel"></i><i class="fas fa-database"></i></h4></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="code_card">
                        <div class="code_head"><h3><i class="fab fa-wordpress"></i></h3></div>
                        <div class="code_content">
                            <h3>Wordpress</h3>
                            <p>Plugins, theme editing, Child themes, SEO</p>
                            <span><h4><i class="fas fa-database"></i></h4></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container skills">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </main>
</div>

<?php include './assets/components/script.php'; ?>

</body>
</html>