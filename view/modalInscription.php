<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php?action=sinscrire">
                    <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom" required>
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
                    <label for="sexe">Sexe:</label>
                    <div id="sexe" class="radio">
                        <label class="radio-inline"><input type="radio" name="sexe">Homme</label>
                        <label class="radio-inline"><input type="radio" name="sexe">Femme</label>
                    </div>
                    <label for="datedenaissance">Date de naissance:</label>
                    <input type="text" id="birthdate" name="datedenaissance" class="form-control" placeholder="JJ/MM/AAAA" required>
                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" class="form-control" name="adresse" placeholder="Ex: 5 rue Dupuy" required>
                    <label for="codepostal">Code Postal:</label>
                    <input type="text" id="codepostal" class="form-control" placeholder="75001" name="cp" required>
                    <label for="ville">Ville:</label>
                    <input type="text" id="ville" class="form-control" placeholder="Ex: Paris,Lyon,Marseille,etc.." name="ville" required>
                    <label for="tel">Téléphone:</label>
                    <input type="text" id="tel" class="form-control" name="telephone" placeholder="Ex: XX-XX-XX-XX-XX" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" placeholder="xxxx@xxx.com" name="email" required>
                    <label for="mdp">Mot de Passe:</label>
                    <input type="password" id="mdp" class="form-control" name="mdp" required>
                    <label for="confpassword">Confirmer mot de passe:</label>
                    <input type="password" id="confpassword" class="form-control" name="confmdp" required>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="Inscription" >S'inscrire</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
         </form>
        </div>
    </div>
</div>