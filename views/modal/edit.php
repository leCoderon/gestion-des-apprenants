<!-- Modal -->
<div class="modal fade" id="edit<?= $learner->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier l'apprenant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?action=update&id=<?= $learner->id ?>" class="card p-3" method="post">
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error']; ?>
                            <?php $_SESSION['error'] = null; ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" value="<?= $learner->firstname ?>" id="nom" name="lastname" placeholder="Entrez le nom de l'apprenant">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" value="<?= $learner->lastname ?>" name="firstname" id="prenom" placeholder="Entrez le prénom de l'apprenant ">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?= $learner->email ?>" id="email" name="email" placeholder="Entrez l'email de l'apprenant">
                    </div>
                    <div class="mb-3">
                        <label for="quartier" class="form-label">Quartier - Ville</label>
                        <input type="text" class="form-control" value="<?= $learner->city ?>" id="quartier" name="city" placeholder="Entrez le quartier de l'apprenant">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" value="<?= $learner->phone ?>" id="phone" name="phone" placeholder="Entrez le numéro de l'apprenant">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="hidden" name="paid" value="0">
                            <input class="form-check-input" type="checkbox" name="paid" value="1"
                             id="flexCheckChecked" <?= $learner->paid ? 'checked' : '' ?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                L'apprenant a soldé ? <span class="<?= $learner->paid ? 'text-success' : 'text-danger' ?>"><?= $learner->paid ? 'soldé' : 'non soldé' ?></span>
                            </label>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <div class="flex justify-content-end">
                    <input type="submit" value="Modifier" class="btn btn-primary">
                </div>
                </form>                      

            </div>
        </div>
    </div>
</div>