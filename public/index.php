<!DOCTYPE html>
<html lang="en">
<title> Bens Website Portfolio</title>
<link rel="shortcut icon" type="image/png" href="./assets/images/faviconimage.png"/>

<?php include './assets/components/head.php'; ?>

<?php include './assets/components/contactsubmit.php'; ?>

<body>

<div id="site_wrapper">

<?php include './assets/components/navbar.php'; ?>

    <div class="site_overlay"></div>

        <main class="main">

            <div id="banner">
                <div class="banner_background"></div>
                <div class="banner_text">
                    <h1>My name is Benjamin Gammage</h1>
                    <h2>I'm a web Developer</h2>
                </div>
                <div id="scroll_down">
                    <a class="scrolling" href="#content_index">Scroll Down<br><i class="fas fa-arrow-down"></i></a>
                </div>
            </div>

            <?php include './assets/components/button.php'; ?>

            <div class="container" id="content_index">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 section">
                        <a href="./public/index.php" target="_blank">
                            <span class="img_ctn"><img src="./assets/images/portfolio_imgs/netmattersreflection.png" alt="netmatters image"></span>
                            <h3 class="card_title">Netmatters reflection task</h3>                        
                            <p class="card_desc">My first project from Netmatters was to emulate the homepage of their website. This was achieved using the languages mentioned above, alongside database management using xampp.</p>
                            <span class="button"></span>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 section">
                        <a>
                            <span class="img_ctn"><img src="https://picsum.photos/1600/900" alt=""></span>
                            <h3 class="card_title">WordPress Woocommerce - Coming soon</h3>  
                            <p class="card_desc">Working on a woocommerce project</p>
                            <span class="button"></span>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 section">
                        <a>
                            <span class="img_ctn"><img src="./assets/images/portfolio_imgs/wordpresstask.png" alt="Wordpress image"></span>
                            <h3 class="card_title">Wordpress reflection</h3>
                            <p class="card_desc">Using the CMS wordpress, I created a website my sister could use for her business.</p>
                            <span class="button"></span>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 section">
                        <a href="./javascriptreflectiontask/index.html" target="_blank">  
                            <span class="img_ctn"><img src="./assets/images/portfolio_imgs/javascriptreflectiontask.png" alt="javascript reflection"></span>
                            <h3 class="card_title">Javascript reflection</h3>
                            <p class="card_desc">This projected demonstrated how I could pull a random image from an API, which could then be assigned to an email address which was validated using regex.</p>
                            <span class="button"></span>
                        </a>
                    </div>


                </div>  
            </div>

            <div class="container" id="contact">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <h3>Get in Touch</h3>
                        <p>Feel free to use the contact form for any inquiries. I will get back to you as soon as I can!</p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                        <form id="contact_form" method="POST" action="index.php#contact">
                            <table>
                                <tbody>
                                    <tr class="ctn_pull">
                                        <td>
                                            <b>First Name*</b>
                                            <input type="text" id="first_name" class="field_style <?php if ($firstnameError){echo "has-error";} ?>" name="first_name" value="<?php if (empty($firstname)) {
                                                echo '';
                                            } else {
                                                echo $firstname;
                                            }?>">
                                        </td>
                                        <td>
                                            <b>Last Name*</b>
                                            <input type="text" id="last_name" class="field_style <?php if ($lastnameError){echo "has-error";} ?>" name="last_name" value="<?php if (empty($lastname)) {
                                                echo '';
                                            } else {
                                                echo $lastname;
                                            }?>">
                                        </td>
                                    </tr>
                                    <tr class="ctn_pull">
                                        <td colspan="2">
                                            <b>Email*</b>
                                            <input type="text" id="email_address" name="email_address" class="field_style <?php if ($emailvalid){echo "has-error";} ?>" value="<?php if (empty($email)) {
                                                echo '';
                                            } else {
                                                echo $email;
                                            }?>">
                                        </td>
                                    </tr>
                                    <tr class="ctn_pull">
                                        <td colspan="2">
                                            <b>Subject*</b>
                                            <input type="text" id="subject" name="subject" class="field_style <?php if ($subjectvalid){echo "has-error";} ?>" value="<?php if (empty($subject)) {
                                                echo '';
                                            } else {
                                                echo $subject;
                                            }?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <b>Message*</b>
                                            <textarea name="message" id="message" class="field_style <?php if ($messagevalid){echo "has-error";} ?>" ><?php if (empty($message)) {
                                                echo '';
                                            } else {
                                                echo $message;
                                            }?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="contact_form_submit">
                                <button type="submit" value="submit">Submit</button>
                                <p class="errormsg <?php if ($firstnameError || $lastnameError || $emailvalid || $subjectvalid || $messagevalid){echo "has-error";} else { echo '';} ?>">Please enter valid details in the red fields</p>
                                <p class="successmsg <?php if($success == 1){echo "success";} else {echo '';} ?>">Message Sent! Will get back to you shortly</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div id="scroll_up">
                <a class="scrolling" href="#banner"><i class="fas fa-arrow-up"></i><br>Scroll Up</a>
            </div>
        </main>
</div>
<?php include './assets/components/script.php'; ?>

</body>
</html>