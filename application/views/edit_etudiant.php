<div class="container" style="margin-top: 10px;">
        <form action="<?php echo base_url('controller_etudiant/update_etudiant')?>/<?php echo $row->id;?>" method="POST">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row->nom; ?>" >
                </div>
                <div class="mb-3">
                    <strong><label for="prenom" class="form-label">prenom :</label></strong>
                    <input type="text" class="form-control" id="prenom" name="prenom"  value="<?php echo $row->prenom; ?>">
                </div>
                <div class="mb-3">
                    <strong><label for="naissance" class="form-label">Date de naissance:</label></strong>
                    <input type="date" class="form-control" id="naissance" name="naissance" value="<?php echo $row->naissance; ?>" >
                </div>
                <div class="mb-3">
                    <strong><label for="contact" class="form-label">Contact :</label></strong>
                    <input type="email" class="form-control" id="contact" name="contact" value="<?php echo $row->contact; ?>" >
                </div>
                <div class="mb-3">
                    <strong><label for="bio" class="form-label">Bio :</label></strong>
                    <input type="text" class="form-control" id="bio" name="bio" value="<?php echo $row->bio; ?>" >
                </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
</div>