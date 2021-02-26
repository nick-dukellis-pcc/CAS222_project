<!--
File Name: template.html
Date: 02/12/2021
Programmer: Niko Dukellis
-->
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="author" content="Niko Dukellis">
        <base target="_blank">
        <title>Ace In The Hole Athletics</title>
        <!-- Links to fonts used and css pages -->
        <link rel="" href="">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/navigation.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.inc.html.php'; ?>
        <main>
            <div class="grid grid-pad">
                <aside class="col-1-4" id="desktop"><!-- Social Media Feed 1 --> 
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                </aside>
                <section class="col-1-2"> <!-- About Us content on main page. would be changed to a <form> for both the contact and register pages. -->
                    <article>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                        <p>Suspendisse ornare quam mollis, congue nulla sed, euismod nunc. Curabitur nec hendrerit erat, sit amet molestie metus. Aenean eget tellus sapien. Pellentesque id justo id risus volutpat lacinia. Aenean tempor tristique orci, sed vulputate tellus scelerisque at. Sed at nibh ligula. Aenean pharetra hendrerit felis, nec tempor velit viverra ac. Etiam quis auctor lectus. Curabitur vulputate mauris id aliquet posuere.</p>
                    </article>
                    <article>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                        <p>Suspendisse ornare quam mollis, congue nulla sed, euismod nunc. Curabitur nec hendrerit erat, sit amet molestie metus. Aenean eget tellus sapien. Pellentesque id justo id risus volutpat lacinia. Aenean tempor tristique orci, sed vulputate tellus scelerisque at. Sed at nibh ligula. Aenean pharetra hendrerit felis, nec tempor velit viverra ac. Etiam quis auctor lectus. Curabitur vulputate mauris id aliquet posuere.</p>
                    </article>
                    <article id="responsive-tablet">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                        <p>Suspendisse ornare quam mollis, congue nulla sed, euismod nunc. Curabitur nec hendrerit erat, sit amet molestie metus. Aenean eget tellus sapien. Pellentesque id justo id risus volutpat lacinia. Aenean tempor tristique orci, sed vulputate tellus scelerisque at. Sed at nibh ligula. Aenean pharetra hendrerit felis, nec tempor velit viverra ac. Etiam quis auctor lectus. Curabitur vulputate mauris id aliquet posuere.</p>
                    </article>
                    <article id="responsive-desktop">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                        <p>Suspendisse ornare quam mollis, congue nulla sed, euismod nunc. Curabitur nec hendrerit erat, sit amet molestie metus. Aenean eget tellus sapien. Pellentesque id justo id risus volutpat lacinia. Aenean tempor tristique orci, sed vulputate tellus scelerisque at. Sed at nibh ligula. Aenean pharetra hendrerit felis, nec tempor velit viverra ac. Etiam quis auctor lectus. Curabitur vulputate mauris id aliquet posuere.</p>
                    </article>
                </section>
                 <aside class="col-1-4" id="tablet"><!-- Social Media Feed 1 --> 
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                </aside>
                <aside id="float" class="col-1-4"><!-- Social Media Feed 2 --> 
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2> 
                </aside>
            </div>
        </main>
        <?php include 'includes/footer.inc.html.php'; ?>
    </body>
</html>