<!DOCTYPE html>
<html lang="en">

<?php include '../public/assets/components/head.php'; ?>

<body>

<div id="site_wrapper">

<?php include '../public/assets/components/navbar.php'; ?>


    <main class="main">
        <div id="banner_sub">
            <div class="banner_text">
                <h1>Coding Examples</h1>
            </div>
        </div>

        <?php include '../public/assets/components/button.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">                           
                            <div class="code">
                                <h3>Javascript</h3>
                                <h4><a href="#"><i class="fas fa-angle-right"></i> src="Html/css Reflection</a></h4>
                                <p>function getimage () { axios.get("https://picsum.photos/300")<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;.then(function (response) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pictureId = response.headers['picsum-id'];<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(response);<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;imageUrl = 'https://picsum.photos/id/' + pictureId + '/300';<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("image_src").src = imageUrl;<br>
                                    })<br>
                                    .catch(function (error) {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;console.log(error)<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;alert("refresh page");<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;});<br>
                                    };</p>
                                  <span><a href="https://github.com/Gammage/javascript_reflection_challenge_two"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">                           
                            <div class="code">
                                <h3>PHP/Laravel</h3>
                                <h4><a href="#"><i class="fas fa-angle-right"></i> Html/css Reflection</a></h4>
                                <p>bla bla</p>
                                <span><a href="https://github.com/Gammage/PHP_JS_HTML_CSS_reflection"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">     
                            <div class="code">
                                <h3>Html/Css</h3>
                                <h4><a href="#"><i class="fas fa-angle-right"></i> src="Html/css Reflection</a></h4>
                                <p>bla bla</p>
                                <span><a href="https://github.com/Gammage/PHP_JS_HTML_CSS_reflection"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">
                            
                            <div class="code">
                                <h3>Coming soon</h3>
                                <p>bla bla</p>
                                <span><a href=""><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </main>
</div>

<?php include '../public/assets/components/script.php'; ?>

</body>
</html>