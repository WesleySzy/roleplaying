<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <?php include_once('include/head.php'); ?>
    <!-- Bootstrap CSS -->
</head>

<body>
    <?php include_once('include/header.php'); ?>

    <div class="container">
        <div class="row py-5">
            <div class="col-md-3 d-flex flex-column">
                <img src="https://scontent.fldb1-1.fna.fbcdn.net/v/t1.0-9/118765451_107382697764738_1455136094544867385_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=lDx5qF1RvBsAX9gqOoO&_nc_ht=scontent.fldb1-1.fna&oh=ce7f61217c9bc465a0f3d3cff48c071d&oe=5F7991C0"
                    alt="..." class="img-thumbnail">
                <a href="" class="py-1">SUPER XANDAO</a>


                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" class="py-1">Feed</a>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" class="py-1">Grupos</a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">

                <!-- AQUI ONDE FAZ PUBLICACAO -->
                <form action="gravar/gravar_pubs.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 px-0 all-borders rounded-borders">
                        <div class="col-md-12 p-0 bg-light rounded-borders">
                            <p class="px-3 pt-3">Criar Publicacao</p>
                            <hr>
                        </div>
                        <div class="col-md-12 pb-3">
                            <textarea name="feed_message" id="feed_message" class="form-control" cols="30"
                                rows="10"></textarea>
                            <output id="list"></output>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <div class="custom-file-upload pr-3">
                                <label for="file-upload" class="custom-file-upload">
                                    <span class="btn btn-success"><i class="far fa-images"></i> Selecionar Imagem</span>
                                </label>
                                <input id="file-upload" name="file-upload" type="file" />
                            </div>
                            <label for="">
                                <button type="submit" class="btn btn-primary">Publicar</button>
                            </label>
                        </div>
                    </div>
                </form>
                <br>

                <!-- AQUI COMECA AS PUBS -->
                <?php
                $sql_publicacao = mysqli_query($conexao, "SELECT * from feed join usuario where feed.user_id = usuario.user_id order by feed_date DESC");
                while($l = mysqli_fetch_array($sql_publicacao)){
                ?>
                <div class="col-md-12 p-0 mb-3 all-borders rounded-borders">
                    <div class="col-md-12 d-flex align-items-center px-0 py-1 bg-light rounded-borders">
                        <div class="row px-3">
                            <div class="col-md-3 d-flex align-items-center">
                                <a href=""><i class="fas fa-futbol text-dark fa-2x"></i></a>
                            </div>
                            <div class="col-md-9">
                                <a href="" class="text-decoration-none"><?php echo $l['user_name'] ?></a>
                                <br>
                                <small><?php echo data_br($l['feed_date']) ?></small>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12 py-5">
                        <div class="col-md-12">
                            <span><?php echo $l['feed_message'] ?></span>
                        </div>
                        <?php
                        if($l['feed_image'] != ''){
                        ?>
                        <div class="col-md-12 text-center">
                            <a href="<?php echo $urlProjeto?>userfiles/img-pubs/<?php echo $l['feed_image'] ?>"
                                data-toggle="lightbox">
                                <img src="<?php echo $urlProjeto?>userfiles/img-pubs/<?php echo $l['feed_image'] ?>"
                                    class="img-fluid">
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include_once('include/scripts-footer.php'); ?>
    <script>
        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function (theFile) {
                    return function (e) {
                        // Render thumbnail.
                        var span = document.createElement('span');
                        span.innerHTML = ['<img class="thumb img-fluid" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'
                        ].join('');
                        document.getElementById('list').insertBefore(span, null);
                    };
                })(f);

                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        document.getElementById('file-upload').addEventListener('change', handleFileSelect, false);
    </script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
   
</body>

</html>