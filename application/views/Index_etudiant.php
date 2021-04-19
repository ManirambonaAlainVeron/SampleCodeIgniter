   <div class="container" style="margin-top: 10px;">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un etudiant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('controller_etudiant/ajouter_etudiant')?>" method="POST">
                <div class="mb-3">
                    <strong><label for="nom" class="form-label">Nom :</label></strong>
                    <input type="text" class="form-control" id="nom" name="nom" >
                </div>
                <div class="mb-3">
                    <strong><label for="prenom" class="form-label">prenom :</label></strong>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <strong><label for="naissance" class="form-label">Date de naissance:</label></strong>
                    <input type="date" class="form-control" id="naissance" name="naissance" >
                </div>
                <div class="mb-3">
                    <strong><label for="contact" class="form-label">Contact :</label></strong>
                    <input type="email" class="form-control" id="contact" name="contact">
                </div>
                <div class="mb-3">
                    <strong><label for="bio" class="form-label">Bio :</label></strong>
                    <input type="text" class="form-control" id="bio" name="bio" >
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Sauvegarde</button>
            </div>
            </form>
            </div>
        </div>
        </div><br/>
        <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date</th>
                <th scope="col">Contact</th>
                <th scope="col">Bio</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) {?>
            <tr>
                <th scope="row"><?php echo $row->id ?></th>
                <td><?php echo $row->nom?></td>
                <td><?php echo $row->prenom?></td>
                <td><?php echo $row->naissance?></td>
                <td><?php echo $row->contact?></td>
                <td><?php echo $row->bio?></td>
                <td><a href="<?php echo base_url('controller_etudiant/editer_etudiant');?>/<?php echo $row->id;?>">Edit</a> | <a href="<?php echo base_url('controller_etudiant/delete_etudiant');?>/<?php echo $row->id;?>">delete</a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
   </div>

