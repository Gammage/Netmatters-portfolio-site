<!DOCTYPE html>
<html lang="en">

<?php include './assets/components/head.php'; ?>

<!-- <?php include './assets/componentscontactsubmit.php'; ?> -->

<body>

<div id="site_wrapper">

<?php include './assets/components/navbar.php'; ?>

<div class="site_overlay"></div>

    <main class="main">

        <div id="banner">
            <div class="banner_background"></div>
            <div class="banner_text">
                <h1>My name is Benjamin Gammage</h1>
                <h2>Im a web Developer</h2>
            </div>
            <div id="scroll_down">
                <a href="#contact">Scroll Down<br><i class="fas fa-arrow-down"></i></a>
            </div>
        </div>

        <?php include './assets/components/button.php'; ?>

        <div class="container" id="content_index">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 section">
                    <a href="#">
                        <span class="img_ctn"><img src="https://picsum.photos/250" alt=""></span>
                        <h3 class="card_title">HTML/JS/PHP Task</h3>                        
                        <p class="card_desc">My first task assigned from Netmatters. This was to emulate the website using skills I have learnt, Including the aforementioned languages in the title and database management, using Xampp.</p>
                        <span class="button"></span>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 section">
                    <a href="#">
                        <span class="img_ctn"><img src="https://picsum.photos/250" alt=""></span>
                        <h3 class="card_title">Pairs project</h3>  
                        <p class="card_desc">I was paired with another sudent for this collaborative task, creating a website from scatch. Much like netmatters, This had to be pixel accurate from the image given.</p>
                        <span class="button"></span>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 section">
                    <a href="#">
                        <span class="img_ctn"><img src="https://picsum.photos/250" alt=""></span>
                        <h3 class="card_title">Wordpress reflection</h3>
                        <p class="card_desc">Using the CMS wordpress, I was tasked with creating a website. I decided to create a concept website my sister could use for her business!</p>
                        <span class="button"></span>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 section">
                    <a href="#">  
                        <span class="img_ctn"><img src="https://picsum.photos/250" alt=""></span>
                        <h3 class="card_title">Javascript reflection</h3>
                        <p class="card_desc">Demonstrating the use of Javascript by using an API that would load a random image, which could be assigned to an email address, which was validated.</p>
                        <span class="button"></span>
                    </a>
                </div>


            </div>  
        </div>

        <div class="container" id="contact">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <h3>Get in Touch</h3>
                    <p>Feel free to use the contact form for any enquiries. I will get back to you as soon as I can!</p>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <form id="contact_form" method="POST" action="index.php#contact">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" id="first_name" name="first_name" placeholder="First Name*">
                                    </td>
                                    <td>
                                        <input type="text" id="last_name" name="last_name" placeholder="last Name*">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" id="email_address" name="email_address" placeholder="Email Address*">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" id="subject" name="subject" placeholder="Subject">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <textarea name="message" id="message" placeholder="Enter your message here"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="contact_form_submit">
                            <button type="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div id="scroll_up">
            <a href="#banner"><i class="fas fa-arrow-up"></i><br>Scroll Up</a>
        </div>
    </main>
</div>
<?php include '../assets/components/script.php'; ?>

</body>
</html>