<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 my-5">
                <h1>CRUD en PHP</h1>
                <h5>Liste des apprenants | Formation DKERTECH </h5>
                <hr>
                <br>
                <div class="d-flex gap-2 mb-5">
                    <a href="#create" data-bs-toggle="modal" class="btn btn-success">Ajouter un apprenant</a>
                    <a href="#logout" data-bs-toggle="modal" class="btn btn-danger">Déconnexion</a>

                    <a href="#register" data-bs-toggle="modal" class="btn btn-primary ms-auto">Ajouter un Admin</a>

                </div>
                <?php if (isset($learners)) : ?>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['success']; ?>
                            <?php $_SESSION['success'] = null; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error']; ?>
                            <?php $_SESSION['error'] = null; ?>
                        </div>
                    <?php endif; ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col bg-danger">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($learners as $learner) : ?>
                                <tr>
                                    <th scope="row"><?= $learner->id ?></th>
                                    <td><?= $learner->lastname ?></td>
                                    <td><?= $learner->firstname ?></td>
                                    <td><?= $learner->email ?></td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="#show<?= $learner->id ?>" data-bs-toggle="modal" class="btn btn-info">Voir</a>
                                            <?php include("views/modal/show.php") ?>

                                            <a href="#edit<?= $learner->id ?>" data-bs-toggle="modal" class="btn btn-success">Editer</a>
                                            <?php include("views/modal/edit.php") ?>

                                            <a href="#delete<?= $learner->id ?>" data-bs-toggle="modal" class="btn btn-danger">Supprimer</a>
                                            <?php include("views/modal/delete.php") ?>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert alert-info">Aucun apprenant enregistré</div>
                <?php endif; ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!-- Modals -->
    <?php include("views/modal/logout.php") ?>
    <?php include("views/modal/register.php") ?>
    <?php include("views/modal/create.php") ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>