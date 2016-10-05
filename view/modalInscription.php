<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form>
                    <label for="firstname">Prénom:</label>
                    <input type="text" id="firstname" class="form-control" placeholder="Prenom">
                    <label for="lastname">Nom:</label>
                    <input type="text" id="lastname" class="form-control" placeholder="Nom">
                    <label for="sexe">Sexe:</label>
                    <div id="sexe" class="radio">
                        <label class="radio-inline"><input type="radio" name="sexe">Homme</label>
                        <label class="radio-inline"><input type="radio" name="sexe">Femme</label>
                    </div>
                    <label for="firstname">Date de naissance:</label>
                    <input type="text" id="birthdate" class="form-control" placeholder="JJ/MM/AAAA">
                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" class="form-control" placeholder="Ex: 5 rue Dupuy">
                    <label for="codepostal">Code Postal:</label>
                    <input type="text" id="codepostal" class="form-control" placeholder="75001">
                    <label for="ville">Ville:</label>
                    <input type="text" id="ville" class="form-control" placeholder="Ex: Paris,Lyon,Marseille,etc..">
                    <label for="tel">Téléphone:</label>
                    <input type="text" id="tel" class="form-control" placeholder="Ex: XX-XX-XX-XX-XX">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" placeholder="xxxx@xxx.com">
                    <label for="mdp">Mot de Passe:</label>
                    <input type="password" id="mdp" class="form-control">
                    <label for="confpassword">Confirmer mot de passe:</label>
                    <input type="password" id="confpassword" class="form-control">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>

    </div>
</div>