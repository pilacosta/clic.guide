<?php
require_once  'defines.php';
require_once 'db/db_access.php';
require_once 'views/page_head.php';
require_once 'views/header.php';


$id = $_GET['id'];
$user = get_user_by_id($id);
//var_dump($user);

//var_dump();

/*$user_mail = get_user_by_mail($username);
var_dump($user_mail);*/

?>


<main>

    <div class="container">

        <div class="row">
            <div class="col-9">

               <!-- --><?php /*foreach ($user_mail as $profil) { */?>
                <div class="row">

                    <div class="container-prof">
                        <div class="bg-bienvenue" >
                            <h1>Bienvenue sur <span>clic.guide.montreal</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                                lacinia eu ante quis, fringilla hendrerit leo. Donec finibus augue ut urn. </p>
                        </div>

                        <hr class="col-12">
                        <div class="mod-profil">
                            <p><a href="form-inscription.php">Modifier mon profil</a></p>
                        </div>


                        <div class="profil-base">
                            <div class="col-6 col-m-6 profil-gouche">
                                <h1><?= utf8_encode($user['titre']) ?></h1>
                                <p><?= $user['quartier'] ?></p>

                            </div>

                            <div class="col-6 col-m-6 profil-droite">
                                <a href="" class="bouton-ajouter">Ajouter un logo</a>
                                <form action="">
                                    <label for="images-up" required="required">Image (format JPEG ou PNG)</label>
                                    <input id="" type="file" name="images-up">
                                </form>
                                <p><?= $user['courriel'] ?></p>
                            </div>
                        </div>


                        <hr class="col-12">

                        <!--    Ajout image -->


                        <form enctype="multipart/form-data" action="" method="POST">

                            <input name="uploadedfile" type="file">
                            <input type="submit" value="Ajouter une image">
                        </form>
                        <div class="text-img-upload">
                            <p>Image (format JPEG ou PNG)</p>
                        </div>
                        <?php
                        $uploadedfileload="true";
                        $uploadedfile_size=$_FILES['uploadedfile'][size];
                        echo $_FILES[uploadedfile][name];
                        if ($_FILES[uploadedfile][size]>200000)
                        {$msg=$msg."Le fichier est supérieure à 200 KB, vous devez le réduire avant de télécharger<BR>";
                            $uploadedfileload="false";}

                        /*if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif" OR $_FILES[uploadedfile][type] =="image/png"))
                        {$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
                        $uploadedfileload="false";}*/

                        $file_name=$_FILES[uploadedfile][name];
                        $add="uploads/$file_name";

                        if($uploadedfileload=="true"){

                            if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
                                echo " Image téléchargée avec succès";
                            }else{echo "Télécharger le fichier";}

                        }else{echo $msg;}
                        ?>



<!--                            <div class="row ">-->
                                <!--<div class=" ajout-image-btn">
                                    <a href="" class="bouton">Ajouter une image</a>
                                </div>-->
                        <!--<form action="">
                            <label for="images-up" required="required">Image (format JPEG ou PNG)</label>
                            <input id="" type="file" name="images-up">
                        </form>-->


<!--                            </div>-->

                            <div class="row sec-upload-img">
                                <div class="col-4 col-m-2 upload-image">
                                    <?php
                                    echo "<img src='uploads/$file_name' >";
                                    ?>
                                </div>
                                <div class="col-8 col-m-10 mod-image">
                                    <a href="" class="bouton-mod">Modifier</a>
                                    <a href="" class="bouton-sup">Supprimer</a>
                                </div>
                            </div>



                    </div><!--fin container-->

                </div>

               <!-- --><?php /*} */?>

            </div><!--fin annonces-->

            <?php
            require_once 'views/col-droite.php';
            ?>
        </div><!--fin row-->
    </div><!--fin container-->

</main>


<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
