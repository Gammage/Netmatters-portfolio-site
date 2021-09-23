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
                <h1>Coding Examples</h1>
            </div>
        </div>

        <?php include './assets/components/button.php'; ?>

        <div id="code_container" class="container">
            <div class="row">
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">                           
                            <div class="code">
                                <h3>Javascript</h3>
                                <h4><a href="./public/index.php" target="_blank"><i class="fas fa-angle-right"></i>Website Link</a></h4>
                                <div class="code_text">
                                    <div class="code_text_ctn">
                                        <p>function getimage () &lbrace; axios.get("https://picsum.photos/300")<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;.then(function (response) &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pictureId = response.headers['picsum-id'];<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(response);<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;imageUrl = 'https://picsum.photos/id/' + pictureId + '/300';<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("image_src").src = imageUrl;<br>
                                            &rbrace;)<br>
                                        .catch(function (error) &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;console.log(error)<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;alert("refresh page");<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;);<br>
                                            &rbrace;;
                                        </p>
                                        <span class="expand_this_too"><button class="button_info_accept"><h3>Show Description</h3></button></span>
                                    </div>
                                    <div class="code_info_accept">
                                    </div>
                                    <div class="code_info">
                                        <p>This is used in the JavaScript Reflection, to get images from  <a href="https://picsum.photos/" target="blank">lorem picsum.</a> The ID was collected, saved under 'pictureId' and added to the 'imageUrl' string. The reflection assignment was to assign images to an email address.</p>
                                        <span class="expand_this"><button class="button_info_cancel"><h3>Back <i class="fas fa-caret-down"></i></h3></button></span>
                                    </div>
                                </div>
                                <span><a href="https://github.com/Gammage/javascript_reflection_challenge_two"target="_blank"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">                     
                        <div class="code_example_card">                           
                            <div class="code">
                                <h3>PHP</h3>
                                <h4><a href="./public/index.php" target="_blank"><i class="fas fa-angle-right"></i>Website Link</a></h4>
                                <div class="code_text">
                                    <div class="code_text_ctn">
                                        <p>
                                        &lt;?php
                                        <br>$servername = "localhost";
                                        <br>$username = "root";
                                        <br>$password = "";
                                        <br>$dbname = "netmatters";
                                        <br>

                                        <br>// Create connection<br>
                                        $conn = new mysqli($servername, $username, $password, $dbname);<br>
                                        <br>// Check connection<br>
                                        if ($conn->connect_error) &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;die("Connection failed: " . $conn->connect_error);<br>
                                            &rbrace;<br>
                                        <br>
                                        $sql = "SELECT `posted_on`, `posted_by`, `type`, `image_name`, `title`, `text` FROM `news` LIMIT 3";<br>
                                        $result = $conn->query($sql);<br>
                                        <br>
                                        if ($result->num_rows > 0) &lbrace;<br>
                                        // output data of each row<br>
                                        $records = array();<br>
                                        while($row = $result->fetch_assoc()) &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;$records[] = $row;<br>

                                            &rbrace;<br>
                                        <br>
                                        &rbrace; else &lbrace;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "0 results";<br>
                                        &rbrace;<br>
                                        $conn->close();
                                        <br>?&gt;
                                        </p>
                                        <span class="expand_this_too"><button class="button_info_accept"><h3>Show Description</h3></button></span>
                                    </div>
                                    <div class="code_info_accept">
                                    </div>
                                    <div class="code_info">
                                        <p>This was used to collect data for the news cards shown in the Netmatters reflection, limited to three for styling. This way, Should these need to be updated, it can be done through the database.</p>
                                        <span class="expand_this"><button class="button_info_cancel"><h3>Back <i class="fas fa-caret-down"></i></h3></button></span>
                                    </div>
                                </div>   
                                <span><a href="https://github.com/Gammage/PHP_JS_HTML_CSS_reflection" target="_blank"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 code_example_card_ctn">
                    <div class="code_example_card_squeeze">
                        <div class="code_example_card">     
                            <div class="code">
                                <h3>Sass/Css</h3>
                                <h4><a href="./public/index.php" target="_blank"><i class="fas fa-angle-right"></i>Website Link</a></h4>
                                <div class="code_text">
                                    <div class="code_text_ctn">
                                        <p>@each $name, $light_colour, $dark_colour in $colours &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;.button_#{$name} &lbrace; // compiles into .button_web<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: $light_colour;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            <br>

                                            &nbsp;&nbsp;&nbsp;&nbsp;.button_#{$name}:hover &lbrace;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: $light_colour;<br>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;i &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;.bar_#{$name} { // compiles into .bar_web<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: $dark_colour;<br>
                                            <br>
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;a, span &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;color: white;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;a:hover &lbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;color: white;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&rbrace;<br>
                                            &rbrace;
                                        </p>
                                        <span class="expand_this_too"><button class="button_info_accept"><h3>Show Description</h3></button></span>
                                    </div>
                                    <div class="code_info_accept">
                                    </div>
                                    <div class="code_info">
                                        <p>This Sass mixin was used in the Netmatters reflection task, using predefined colours in a blueprint format. The use of selectors defines styling depending on if they share a similiar name. </p>
                                        <span class="expand_this"><button class="button_info_cancel"><h3>Back <i class="fas fa-caret-down"></i></h3></button></span>
                                    </div>
                                </div>
                                <span><a href="https://github.com/Gammage/PHP_JS_HTML_CSS_reflection" target="_blank"><i class="fas fa-angle-double-right"></i><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </main>
</div>

<?php include './assets/components/script.php'; ?>

</body>
</html>