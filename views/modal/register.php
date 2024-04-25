<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <main class="form-signin w-100 m-auto card p-3">
                    <form method="post" action="index.php?action=signup">
                        <h1 class="h4 mb-3 fw-normal">Enregistrer un nouvel admin </h1>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating ">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <br>
                        <p class="mt-5 mb-3 text-body-secondary">© LeCoderon</p>
                </main>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button class="btn btn-primary w-100 py-2" type="submit">Ajouter</button>
                </form>

            </div>
        </div>
    </div>
</div>