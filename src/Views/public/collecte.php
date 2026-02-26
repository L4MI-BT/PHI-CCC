<div class="m-5">
    <div class="container">
        <h2 class="m-5 text-center">LES POINTS DE COLLECTE</h2>
        <div class="row">
            <div class="col-lg-8 offset-2">
                <div>
                    <h3 class="mb-2 mt-2 text center">POURQUOI DONNER VOTRE MATERIEL MEDICALE ?</h3>
                    <P class="m-1">
                        Chez <strong>Pharmacie Humanitaire Internationale (PHI)</strong>, l’autre volet majeur de notre action repose sur <strong>la collecte, le tri, la réhabilitation et la réutilisation du matériel médical. <br> Nous récupérons notamment: </strong>
                    </P>
                    <ul>
                        <li>Des cannes anglaises,</li>
                        <li>Des fauteuils roulants,</li>
                        <li>Des lits médicalisés,</li>
                        <li>ainsi que des dispositifs médicaux : compresses, pansements, chevillières, orthèses…</li>
                    </ul>
                    <p>
                        Dans une démarche à la fois solidaire et responsable, nous encourageons le grand public à déposer ce matériel auprès de nos associations départementales. <br><br> Sur le terrain, nos bénévoles agissent chaque jour : tri, vérification, remise en état et préparation du matériel pour qu’il puisse être redistribué en toute sécurité aux structures de soins qui en ont besoin.
                    </p>
                    <p>
                        Chaque geste compte : en donnant votre matériel, vous contribuez à améliorer l’accès aux soins pour ceux qui en ont le plus besoin, tout en limitant le gaspillage.
                    </p>
                </div>
                <h4 class="mb-4">RETROUVER LE POINT DE COLLECTE PRES DE CHEZ VOUS</h4>
                <form action="?controller=asso&method=search" method="POST">
                    <div class="row g-3 align-items-end">

                        <div class="col">
                            <label for="villeInput" class="form-label fw-semibold">Ville</label>
                            <input type="text" class="form-control" name="ville" id="villeInput" placeholder="Ex : Paris">
                        </div>

                        <div class="col">
                            <label for="monInput" class="form-label fw-semibold">Code postal</label>
                            <input type="text" class="form-control" name="codepostal" id="monInput" placeholder="Ex : 75001">
                        </div>

                        <div class="col">
                            <label for="departementInput" class="form-label fw-semibold">Département</label>
                            <input type="text" class="form-control" name="departement" id="departementInput" placeholder="Ex : 75">
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                    <div id="result"></div>
                </form>
            </div>
        </div>
    </div>
</div>

