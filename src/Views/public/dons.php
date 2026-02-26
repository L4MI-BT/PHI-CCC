<div class="m-5">
    <div class="container">
        <h1 class="m-5 text-center">FAIRE UN DON</h1>
        <div class="card">
            <!-- Onglets -->
            <div class="tabs">
                <button class="tab-btn active" onclick="switchTab('courrier', this)">
                    <span class="icon">✉️</span> Par Courrier
                </button>
                
                <button class="tab-btn" onclick="switchTab('helloasso', this)">
                    <span class="icon">💚</span> HelloAsso
                </button>
            </div>

            <!-- Panel : Par Courrier -->
            <div id="panel-courrier" class="tab-panel active">
                <div class="info-box">
                <h3>Comment faire un don par courrier ?</h3>
                <ul>
                    <li>Téléchargez et imprimez le bon de don ci-dessous</li>
                    <li>Remplissez le formulaire avec vos coordonnées</li>
                    <li>Envoyez le tout à notre adresse postale : 534, Avenue Jean Giraudoux 18200 SAINT AMAND MONTROND</li>
                </ul>
                </div>

                <a href="https://www.phi.asso.fr/docs/don-courrier-phi.pdf" target="_blank" download class="btn btn-success">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                Télécharger le bon de don (PDF)
                </a>
            </div>

            <!-- Panel : HelloAsso -->
            <div id="panel-helloasso" class="tab-panel">

                <div class="helloasso-intro">
                    <p>Faites votre don en ligne directement via HelloAsso, en toute sécurité et sans frais.</p>
                </div>

                <div class="iframe-wrapper">                
                    <iframe
                        id="haWidget"
                        src="https://www.helloasso.com/associations/pharmacie-humanitaire-internationale/formulaires/1/widget"
                        style="width:100%; height:800px; border:none;"
                        scrolling="auto"
                        allow="payment">
                    </iframe>
                </div>

                <hr class="divider"/>

                <!-- Lien vers site HelloAsso -->
                <a href="https://www.helloasso.com/associations/pharmacie-humanitaire-internationale/formulaires/1" target="_blank" class="visit-link">
                <div class="link-icon">🔗</div>
                <div class="link-text">
                    <strong>Visiter le site HelloAsso</strong>
                    <span>Accédez directement à votre page de don en ligne</span>
                </div>
                <span class="arrow">›</span>
                </a>

  </div>

</div>
    </div>
</div>

