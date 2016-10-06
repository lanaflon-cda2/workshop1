<div id="modalCarte" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter une CB:</h4>
            </div>
            <div class="modal-body">
                <form action="index.php?action=connexion" method="post">
                    <label for="numeroCarte">Numéro de carte:</label>
                    <input type="text" name="numero" id="numeroCarte" class="form-control" placeholder="XXXXXXXXXXXXXXXX">
                    <label for="date">Date:</label>
                    <input type="text" name="date" class="form-control" id="date" placeholder="XXXX/XX">
                    <label for="crypto">Cryptogramme Visuel:</label>
                    <input type="text" name="drypto" class="form-control" id="date" placeholder="XXX">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Enregistrer</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>

    </div>
</div>