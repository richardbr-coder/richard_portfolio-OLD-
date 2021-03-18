<?php
$errors = '';
$myemail = 'richard@codedad.ca';
if (empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['subject']) ||
   empty($_POST['message'])) {
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address
)) {
    $errors .= "\n Error: Invalid email address";
}

if (empty($errors)) {
    $to = $myemail;

    $email_subject = "Contact form submission: $name";

    $email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to, $email_subject, $email_body, $headers);

    //redirect to the 'thank you' page

    $message1 = "Your Message has been sent";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description"
            content="0xFolio is a free HTML template designed by Ali Raza. It is highly responsive and contains clean code. It uses sass and bootstrap.">
        <meta name="keywords" content="0xFolio, Free HTML Template, Bootstrap Template, Free, CSS Template">
        <meta name="author" content="Ali Raza">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/favicon/site.webmanifest">
        <link rel="stylesheet" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Richard Randell</title>
    </head>

    <body>

        <header class="header" id="header">
            <!-- Top fixed navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark header__navbar">
                <div class="container-lg">
                    <a class="navbar-brand" href="#">Richard Randell</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTopCollapsible" aria-controls="navbarTopCollapsible" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTopCollapsible">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#header">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#work">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/blog/wordpress/">BLOG</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <!-- Centered content -->
            <div class="header__content">
                <div class="header__img-box">
                    <img src="./img/r-photo.png" alt="John Doe" class="header__img">
                </div>
                <h1 class="heading-primary">
                    <span class="heading-primary--main">
                          <!-- Begin page content -->
                            <div style="" class="col-xs-12">
                                <div class="row">
                                <div style="padding-right: 0;" class="col-xs-12 headline">
                                    <div class="container">
                                    <p><span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                    </span>
                </h1>
                <div class="header__cta-box">
                    <a href="#about" class="btn btn--full">About</a>
                    <a href="#work" class="btn btn--ghost">Work</a>
                </div>
            </div>


            <!-- Absolute positioned social icons -->
            <div class="header__social-icons social-icons">
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-facebook"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-twitter"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-instagram"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-whatsapp"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-discord"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-linkedin"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="./img/SVG/symbol-defs.svg#icon-medium"></use>
                    </svg>
                </a>

            </div>

        </header>

        <section class="about" id="about">
            <div class="container">
                <h2 class="heading-secondary">About me</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="about__content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem eligendi harum,
                                laboriosam in corporis ea ex temporibus reiciendis consequuntur, non totam nihil
                                asperiores quia porro beatae aliquid quam sunt.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus repellat vitae
                                facilis quae veniam dolor soluta, harum dolore quasi, pariatur sunt odio, blanditiis
                                ipsa? Sunt consequatur quod voluptatem sit amet consectetur adipisicing elit. Aliquam
                                molestiae, ipsam perspiciatis perferendis fugiat, dolores corporis sint illum laboriosam
                                nam asperiores voluptatibus et natus enim officia atque? Sunt, sit itaque?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, perferendis commodi
                                aliquam blanditiis dicta porro assumenda, similique sunt eaque aut praesentium at vitae
                                totam repellendus! Deserunt ratione sit quidem nulla.Quaerat, alias aspernatur delectus
                                aliquid sed cupiditate laboriosam vel officia illum veritatis fugit! Veniam adipisci,
                                nostrum eligendi est distinctio vero atque nulla hic quae non voluptatibus, laboriosam
                                nam esse qui.</p>
                        </div>
                        <div class="about__skills my-4">
                            <h3 class="heading-tertiary">Technologies I know:</h3>
                            <div class="about__skills-icons mt-2">
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-html5"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-css3"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-javascript"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-php"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-laravel"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-angular"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-jquery"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-mysql"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-bootstrap"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-sass"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-git"></use>
                                </svg>
                                <svg class="icon about__skills-icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-linux"></use>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="about__cta-box text-center">
                    <a href="#" class="btn btn--ghost">
                        <svg class="icon btn__icon-left">
                            <use xlink:href="./img/SVG/symbol-defs.svg#icon-file-pdf"></use>
                        </svg>
                        Resume
                    </a>
                    <a href="#" class="btn btn--full">Contact</a>
                </div>
            </div>
        </section>

        <section class="work" id="work">

            <div class="container">
                <h2 class="heading-secondary">Things I've made</h2>

                <ul class="nav nav-tabs justify-content-center mt-5 mb-4" id="workTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="projects-tab" data-toggle="tab" href="#projects" role="tab"
                            aria-controls="projects" aria-selected="true">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="snippets-tab" data-toggle="tab" href="#snippets" role="tab"
                            aria-controls="snippets" aria-selected="false">Snippets</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Technology</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">HTML</a>
                            <a class="dropdown-item" href="#">CSS</a>
                            <a class="dropdown-item" href="#">PHP</a>
                            <a class="dropdown-item" href="#">Laravel</a>
                        </div>
                    </li>

                </ul>

                <div class="tab-content">

                    <div class="work__content work__content--projects tab-pane fade show active" id="projects"
                        role="tabpanel" aria-labelledby="projects-tab">
                        <div class="row justify-content-center">
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-1.jpg" alt="Project 1" class="project__img img-fluid">
                                    </div>

                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Lmet consectetur adipisicing elit.</h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-2.jpg" alt="Project 2" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Lamet sicing elit Deleniti verit</h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-3.jpg" alt="Project 3" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Sequi aspernatur vel Necessi</h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-4.jpg" alt="Project 4" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Lorem rerum enim quia </h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-5.jpg" alt="Project 5" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">magnam dolores aliquid sed.</h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="./img/project-6.jpg" alt="Project 6" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Eveniet sed harum sequi</h3>
                                        <p class="project__details"> Architecto enim sunt amet doloremque ratione
                                            tenetur
                                            cum cupiditate? Iure corrupti, expedita sed laboriosam qui ipsum ex
                                            minus
                                            aspernatur
                                            quaerat porro amet!</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-earth"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 mb-2 mt-n1 text-center"><a href="#" class="btn btn--full">Show all</a>
                            </div>
                        </div>
                    </div>

                    <div class="work__content work__content--snippets tab-pane fade" id="snippets" role="tabpanel"
                        aria-labelledby="snippets-tab">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <table class="table table-sm table-responsive-sm table-bordered table-striped my-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Technology</th>
                                            <th scope="col">Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">Lorem ipsum doloraing elit.</a></td>
                                            <td>Laravel</td>
                                            <td>05-12-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><a href="#">Sapiente autem cum doloribus eius</a></td>
                                            <td>PHP</td>
                                            <td>04-10-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><a href="#">Lonsectetur adipisicing ratione</a></td>
                                            <td>HTML</td>
                                            <td>02-08-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td><a href="#">Libero expedita esse debitis fuga</a></td>
                                            <td>Angular</td>
                                            <td>01-01-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td><a href="#">Lsoluta tenetur quibusdam commodi.</a></td>
                                            <td>JavaScript</td>
                                            <td>25-10-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td><a href="#">Vitae labore laboriosam illum explicabo</a></td>
                                            <td>Laravel</td>
                                            <td>05-10-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td><a href="#">Voluptatibus nostrum neque vel quas</a></td>
                                            <td>React</td>
                                            <td>02-11-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">Impedit odio vitae itaque suscipit.</a></td>
                                            <td>HTML</td>
                                            <td>03-10-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">Qui amet atque repellat.</a></td>
                                            <td>Sass</td>
                                            <td>09-05-2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">Itaque suscipit debitis perferendis.</a></td>
                                            <td>PHP</td>
                                            <td>01-08-2019</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <nav aria-label="Work Code Snippets" class="my-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="counter__box">
                            <div class="counter__icon-box">
                                <svg class="icon counter__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-embed"></use>
                                </svg>
                            </div>
                            <span class="counter__count">24835</span>
                            <p class="counter__title">Lines of code</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="counter__box">
                            <div class="counter__icon-box">
                                <svg class="icon counter__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-github"></use>
                                </svg>
                            </div>
                            <span class="counter__count">187</span>
                            <p class="counter__title">Projects done</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="counter__box">
                            <div class="counter__icon-box">
                                <svg class="icon counter__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-edit"></use>
                                </svg>
                            </div>
                            <span class="counter__count">247</span>
                            <p class="counter__title">Articles written</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="counter__box">
                            <div class="counter__icon-box">
                                <svg class="icon counter__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-sun"></use>
                                </svg>
                            </div>
                            <span class="counter__count">33</span>
                            <p class="counter__title">Years lived</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h2 class="heading-secondary ">Contact me</h2>
                        <form method=”POST” enctype=”multipart/form-data” name=”EmailForm” action=”mailto:richard@codedad.ca”>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input required type="text" name="name" class="form-control" id="Username">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input required type="email" name="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input required type="text"  class="form-control" id="subject">
                            </div>

                            <div class="form-group">
                                <label for="message">Your message</label>
                                <textarea required type="text" class="form-control" id="message" rows="4"></textarea>
                            </div>


                            <button type="submit" class="mt-2 btn btn--full float-right">Send <svg
                                    class="icon btn__icon-right">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-paper-plane"></use>
                                </svg></button>
                        </form>
                        <?php echo $message1 ?>
                    </div>
                </div>
            </div>
        </section>

        
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12  py-5 text-center mb-2">
                        <h3 class="mb-4 heading-tertiary footer__social-heading">Stay connected</h3>
                        <!-- Absolute positioned social icons -->
                        <div class=" social-icons social-icons--lg">
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-facebook"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-twitter"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-instagram"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-whatsapp"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-discord"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-linkedin"></use>
                                </svg>
                            </a>
                            <a href="#" class="social-icons__link">
                                <svg class="icon social-icons__icon">
                                    <use xlink:href="./img/SVG/symbol-defs.svg#icon-medium"></use>
                                </svg>
                            </a>

                        </div>
                    </div>
                    
                    <div class="col-12 mt-auto">
                        <nav class="nav footer__nav justify-content-around">
                            <a class="nav-link active" href="#">Home</a>
                            <a class="nav-link" href="#">Projects</a>
                            <a class="nav-link" href="#">Blog</a>
                            <a class="nav-link" href="#">Contact</a>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>



        <script src="./js/vendors/jquery/jquery.min.js"></script>
        <script src="./js/vendors/waypoints/jquery.waypoints.min.js"></script>
        <script src="./js/vendors/popper/popper.min.js"></script>
        <script src="./js/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="./js/script.js"></script>
    </body>

</html>