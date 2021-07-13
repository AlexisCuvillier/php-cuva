
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include './includes/head.inc.html' ?>
</head>

<body>
    <header>
        <?php include './includes/header.inc.html' ?>
    </header>
    <div>
        <nav class="d-inline col-6">
            <button type="button" class="btn border-dark col-2 m-3">Home</button>

        </nav>
        <button type="button" class=" btn bg-primary col-2 text-light">Ajouter des données</button>

        <section class="  justify-content-end p-4">
            <form>
                <label for="prename" class="col-form-label ">Prénom</label>
                <input type="prename" id="prenom" class="form-control" placeholder="Renseignez votre prénom">

                <label for="name" class="col-form-label">Nom</label>
                <input type="name" id="nom" class="form-control">

                <label for="age" class="col-form-label">Age (18 à 60ans)</label>
                <input type="number" id="age" class="form-control">

                <label for="name" class="col-form-label">Nom</label>
                <input type="name" id="nom" class="form-control">

                <div class="input-group pt-4 w-100">
                    <span class="input-group-text">Taille (entre 1,6 et 2m)</span>
                    <input type="number" aria-label="First name" class="form-control">
                    <span class="input-group-text">M</span>
                </div>


                <div class="form-chek pl-2 pt-3">
                    <input type="radio" id="apprenant" name="choix" class="form-chek-input" checked="">
                    <label for="apprenant" class="form-chek-label">Apprenant</label>
                </div>

                <div class="form-chek pl-2">
                    <input type="radio" id="formateur" name="choix" class="form-chek-input" checked="">
                    <label for="formateur" class="form-chek-label">Formateur</label>
                </div>
                <button type="button" class=" btn bg-primary  m-2 text-light ">Enregistrer les
                    données</button>

            </form>


    </div>
    </section>


    <footer>
        <?php include './includes/footer.inc.html' ?>
    </footer>
</body>

</html>

