

<!-- Modal -->
<div class="modal fade" id="delete<?= $learner->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supprimer l'apprenant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h1 class="display-5 fw-bold"><?= $learner->firstname ?> <?= $learner->lastname ?></h1>
                        <p class="lead mb-4">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="col-lg-1">Id</th>
                                    <td scope="col-lg-1 bg-danger"><?= $learner->id ?></td>
                                </tr>
                                <tr>
                                    <th scope="col-lg-1">Email</th>
                                    <td scope="col-lg-1 bg-danger"><?= $learner->email ?></td>
                                </tr>
                                <tr>
                                    <th scope="col-lg-1">Numéro</th>
                                    <td scope="col-lg-1 bg-danger"><?= $learner->phone ?></td>
                                </tr>
                                <tr>
                                    <th scope="col-lg-1">Ville/Quartier</th>
                                    <td scope="col-lg-1 bg-danger"><?= $learner->city ?></td>
                                </tr>
                                <tr>
                                    <th scope="col-lg-1">A soldé ?</th>
                                    <td scope="col-lg-1 bg-danger"><?= $learner->paid ? "Oui" : "Non" ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <a href="index.php?action=delete&id=<?= $learner->id ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </div>
</div>