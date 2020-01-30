<?php require_once 'header.php';
if(!isset($_SESSION['auth'])):
    header('Location: index.php');
endif; ?>

    <div class="container_search">
        <h1> Trouver des membres près de chez vous </h1>
    
        <form action="../Controller/searchController.php" method="GET">

        <div class="form-section_search">
            <div class="form-group_search">
                <select name="genre" id="genre">
                    <option value="">Genre</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="form-group_search">
                <input id="ville" type="text" name="ville" class="form-control" placeholder="Sa ville" minlength="2" maxlength="30"/>
            </div>

            <div class="form-group_search">
                <input id="loisir" type="text" name="loisir" class="form-control" placeholder="Son/Ses loisir(s)" minlength="2" maxlength="30"/>
            </div>
        
            <div class="form-group_search">
                <select name="age" id="age">
                    <option value="">Tranche d'âge</option>
                    <option value="18_25">18/25</option>
                    <option value="25_35">25/35</option>
                    <option value="35_45">35/45</option>
                    <option value="45_plus">45 et +</option>
                </select>
            </div>
        </div>

        <button type="submit" class="search_button">Rechercher</button>

        <div class="disconnect_flex">
            <p><a class="disconnect" href="index.php">Se déconnecter</a><p>
            <p><a class="disconnect" href="profil.php">Mon profil</a><p>
        </div>
        </form>
    </div>
<?php require_once 'footer.php'; 
