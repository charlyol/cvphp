<?php
$metaTitle='Hobby';
require 'header.php';

?>
    <link rel="stylesheet" href="hobby.css">
    <title><?php echo $metaTitle?></title>
<body>
<div>
    <section class="titre2">
        Hobby
    </section>
    <section>
        <p class="hobby">
            Télépilotage de drone
        </p>
    </section>
    <section>
        <p class="para">
            Paragraphe
        </p>
    </section>
    <div class="wrapvideo">
        <section class="video" >
            <div class="video-responsive">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7FBv5j35Xro?si=E-0-VOKTCdQT5yRm"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <figcaption>
                Vidéo filmée par un DJI Mini 2
            </figcaption>
        </section>
    </div>
</div>
</body>
<?php require 'footer.php'; ?>