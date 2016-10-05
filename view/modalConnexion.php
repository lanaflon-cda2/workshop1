<div id="modalConnexion" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Connectez-vous!</h4>
            </div>
            <div class="modal-body">
                <form action="index.php?action=connexion" method="post">
                    <label for="login">E-mail:</label>
                    <input type="email" name="email" id="login" class="form-control" placeholder="Exemple:xxx@xxx.com">
                    <label for="password">Mot de passe:</label>
                    <input type="password" name="password" class="form-control" id="password">
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Se connecter</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>

    </div>
</div>