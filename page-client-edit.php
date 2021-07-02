<?php require 'script/page-client-edit.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<?php require 'base/head.php'; ?>

<body>
<div class="container-scroller">

    <?php require 'base/header.php'; ?>

    <div class="container-fluid page-body-wrapper">

        <?php require 'base/header-left.php'; ?>

        <div class="main-panel">

            <div class="content-wrapper">

                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-warning text-white mr-2"><i class="fa fa-newspaper-o"></i></span>Modifier un client
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><a href="page-clients">Clients</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Modifier un client</span></li>
                        </ul>
                    </nav>
                </div>

                <!-- client -->
                <div class="card grid-margin">
                    <form method="POST" action="#">
                        <div class="card-body">
                            <h4 class="card-title">Gestion du client</h4><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nom</label><br>
                                        <input type="text" name="nom" class="form-control" maxlength="255" placeholder="Nom du client" required value="<?php echo $client['cl_nom'];?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Adresse du client</label><br>
                                        <input type="text" name="adresse" class="form-control" maxlength="255" placeholder="Adresse du client" required value="<?php echo $client['cl_adresse'];?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-gradient-warning pull-right mr-3" name="edit_client"><i class="fa fa-floppy-o mr-2" aria-hidden="true"></i> ENREGISTRER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>



    </div>
    <!-- page-body-wrapper ends -->
</div>

<?php require 'base/script.php'; ?>
<script src="assets/vendors/tinymce/tinymce.min.js"></script>
<script src="assets/vendors/tinymce/themes/modern/theme.js"></script>

<script type="text/javascript">

    document.getElementById("cliH").className += " active";

</script>

</body>
</html>