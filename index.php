<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Robin Wilkie web design and development in Glasgow Scotland">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Robin Wilkie">
    <title>Robin Wilkie Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <section id="home">
        <header>
            <div class="logo">
                <img src="images/logo.png" alt="logo for robin wilkie">
            </div>

            <nav>
                <ul>
                    <a href="#about">
                        <li>about</li>
                    </a>
                    <a href="#work">
                        <li>work</li>
                    </a>
                    <a href="#contact">
                        <li>contact</li>
                    </a>
                </ul>
            </nav>
        </header>

        <div id="title">
            <div id="name">
                <h1>ROBIN WILKIE</h1>
            </div>
            <div id="subhead1">
                <h3>web design <span>&</span> development</h3>
            </div>
            <div id="subhead2">
                <p>full site coming soon!</p>
            </div>
        </div>

        <div class="down">
            <a href="#about"><img src="images/downicon.png"></a>
        </div>
    </section>


    <section id="about">
        <div class="up">
            <a href="#home"><img src="images/upiconblack.png"></a>
        </div>

        <div id="aboutme">
            <h2>ABOUT ME</h2>
            <img src="images/robinwilkie.jpg">
            <p>I'm currently an Interactive Media student based in Glasgow, Scotland. I specialise in front-end development using HTML, CSS and Javascript. I'm constantly looking to improve my skills and understanding in all aspects of web and mobile development. I also enjoy music, photography and drinking an unhealthy amount of coffee.</p>
        </div>

        <div id="aboutLinks">
            <a href="https://www.linkedin.com/in/robin-wilkie-901a447b/"><img src="images/LinkedIN_Color.svg" alt="linkedIN logo link to Robin Wilkie linkedIN page" class="icons"></a>
            <a href="https://twitter.com/RobinWilkie"><img src="images/Twitter_Color.svg" alt="Twitter logo link to Robin Wilkie twitter page" class="icons"></a>
            <a href="https://www.facebook.com/robin.wilkie.73"><img src="images/Facebook_Color.svg" alt="facebook logo link to Robin Wilkie facebook page" class="icons"></a>
        </div>

        <div class="down">
            <a href="#work"><img src="images/downiconblack.png"></a>
        </div>

    </section>


    <section id="work">
        <div class="up">
            <a href="#about"><img src="images/upicon.png"></a>
        </div>

        <h2>WORK</h2>

        <div id="workPics">
            <a href="images/work/appmuseumportfolio.jpg" data-lightbox="work" data-title="My caption"><img src="images/work/appmuseumportfolio.jpg" alt="thumbnail" class="thumb"></a>
            <a href="images/work/appmainmenuportfolio.jpg" data-lightbox="work" data-title="My caption"><img src="images/work/appmainmenuportfolio.jpg" alt="thumbnail" class="thumb"></a>
            <a href="images/work/Taps.png" data-lightbox="work"><img src="images/work/Taps.png" alt="thumbnail" class="thumb"></a>
            <a href="images/work/clydeside.png" data-lightbox="work"><img src="images/work/clydeside.png" alt="thumbnail" class="thumb"></a>
            <a href="images/work/Scouts.png" data-lightbox="work"><img src="images/work/Scouts.png" alt="thumbnail" class="thumb"></a>
            <a href="images/work/Options.png" data-lightbox="work"><img src="images/work/Options.png" alt="thumbnail" class="thumb"></a>
            <a href="images/work/DignansPortfolioIndex.jpg" data-lightbox="work"><img src="images/work/DignansPortfolioIndex.jpg#" alt="thumbnail" class="thumb"></a>
            <a href="images/work/georgewilkie.png" data-lightbox="work"><img src="images/work/georgewilkie.png" alt="thumbnail" class="thumb"></a>
        </div>

        <div id="workLinks">
            <a href="https://github.com/RobinWilkie"><img src="images/Github_Color.svg" alt="github icon link" class="icons"></a>
            <a href="http://codepen.io/robinwilkie/"><img src="images/Codeopen_Color.svg" alt="codepen icon link" class="icons"></a>
        </div>

        <div class="down">
            <a href="#contact"><img src="images/downicon.png"></a>
        </div>
    </section>


    <section id="contact">
        <div class="up">
            <a href="#work"><img src="images/upiconblack.png"></a>
        </div>

        <h2>CONTACT</h2>
        <p>Send me a message</p>

        <div id="contactContainer">
            <div class="textBox">
                <form id="contactForm" role="form" method="post" action="">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="eg: John Smith" required>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="eg: example@something.com" required>
                    <label>Message</label>
                    <input type="text" name="message" placeholder="Enter message here..." required>
                    <button class="hvr-ripple-out" type="submit" value="submit">Submit</button>
                    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){ 

    if (!isset($_POST['name']) || !isset($_POST['message']) || !isset($_POST['email'])){ 

        $errors .= 'Please complete all the required fields.'; 
     } 

    if ($_POST['name'] != "") { 
        $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING); 
        if ($_POST['name'] == "") { 
            $errors .= 'Name is not valid.<br/>'; 
        }
    }
 
    if ($_POST['message'] != "") { 
        $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING); 
        if ($_POST['message'] == "") { 
            $errors .= 'Message is not valid.<br/>'; 
        }
    }
 
    if ($_POST['email'] != "") { 
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $errors .= 'Email is not valid.<br/>'; 
        }
    }
 
    if(!$errors) { 
        $to = 'robinwilkieglasgow@hotmail.com'; 
        $from = $_POST['email']; 
        $subject = 'Contact Form Completed'; 
        $content = "
        First Name: " . $_POST['name'] . "
        Message: " . $_POST['message'] . "
        Email: " . $_POST['email']; 

        if(mail($to, $subject, $content, 'From:' . $from)){
            echo '<p class="alert alert-success">Thank you for contacting me, your message has been sent.</p>'; 
        } else { 
           echo '<p class="alert alert-danger">There was a problem sending your message</p>'; 
        } 
    } else { 
        echo '<p class="alert alert-danger">' . $errors . '</p>'; 
    }
}
?>
                </form>
            </div>
        </div>

        <a href="#home" id="back">
            back to top
        </a>

        <p>&copy Robin Wilkie</p>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/animatelo.min.js"></script>
    <script>
        var options = {
            delay: 800,
        };
        window.animatelo.slideInDown('nav', options);
    </script>
    <script>
        $(document).ready(function () {
            $("#name").hide(0).delay(300).fadeIn(3000);
            $("#subhead1").hide(0).delay(310).fadeIn(3000);
            $("#subhead2").hide(0).delay(320).fadeIn(3000);
        });

        $(function () {
            $('a[href*="#"]:not([href="#"])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>


</body>

</html>