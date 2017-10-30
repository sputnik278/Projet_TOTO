<div class="container">
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="prenom">Prénom: </label>
      <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="stu_firstname" value="<?php $stu_firstname; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="nomDeFamille">Mon de famille: </label>
      <input type="text" class="form-control" id="nomDeFamille" placeholder="Nom de famille" name="stu_lastname" value="<?php $stu_lastname; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dateDeNaissance">Date de naissance: </label>
      <input type="text" class="form-control" id="dateDeNaissance" placeholder="Date de naissance séparé de YYYY-MM-DD " name="stu_birthdate" value="<?php $stu_birthdate; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="eMail">Email: </label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="stu_email" value="<?php $stu_email; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Sympathie</label>
      <input type="text" class="form-control" id="sympathie" placeholder="Niveau de sympathie de 1 à 5" name="stu_friendliness" value="<?php $stu_friendliness; ?>">
    </div>
  </div>
    <div class="form-group col-md-5">
      <label for="inputState">Session de formation: </label>
      <select id="inputState" class="form-control" name="tra_name">
        <option selected disabled>Choisir la session...</option>
        <option value=""><?php echo $listSessionPD['ses_number']?></option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputState">Ville de la session: </label>
      <select id="inputState" class="form-control">
        <option selected disabled>Choisir la ville...</option>
        <option><?php echo $listLocationPD; ?></option>
      </select>
    <br>
    <br>
    <button type="submit" class="btn btn-dark" name="tra_name">Ajouter</button>
  </div>
  
</form>
</div>