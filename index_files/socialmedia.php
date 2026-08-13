<section class="app-section">
  <h2 class="app-title">Social Media Automation – alles aus einer App</h2>

  <div class="app-grid app-grid-3">
    
    <!-- 1️⃣ Auto-Torschützengrafik -->
    <div class="app-box">
      <div class="app-icon">
        <!-- Fußball -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c1.51 0 2.91.45 4.08 1.23L13 7l1 4-2 2-4-1-2-2 1-3.5L4.07 6.92A8 8 0 0112 4zm0 16a7.96 7.96 0 01-6.36-3.11L8 15l4 1 2-2 1.36 2.89A7.96 7.96 0 0112 20z"/>
        </svg>
      </div>
      <h3>Auto Torschützengrafik</h3>
      <p>Nach jedem Tor wird automatisch eine stylische Grafik erstellt – ideal für Stories, Posts oder Liveticker.</p>
    </div>

    <!-- 2️⃣ Next Game -->
    <div class="app-box">
      <div class="app-icon">
        <!-- -:- Symbol -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 24" fill="currentColor">
          <text x="20" y="18" font-size="20" font-weight="700" font-family="Arial" fill="currentColor">-:-</text>
        </svg>
      </div>
      <h3>Nächstes Spiel</h3>
      <p>Dein nächstes Match perfekt präsentiert – Datum, Gegner und Ort automatisch als Grafik erstellt.</p>
    </div>

    <!-- 3️⃣ Tabelle & Statistik -->
    <div class="app-box">
      <div class="app-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M4 22h16v-2H4v2zm3-8h2v4H7v-4zm4-4h2v8h-2V10zm4-3h2v11h-2V7z"/>
        </svg>
      </div>
      <h3>Tabelle & Statistik</h3>
      <p>Teile Tabellenstände, Spielerwertungen und Teamstatistiken direkt aus der App – automatisch aktualisiert.</p>
    </div>

    <!-- 4️⃣ Infos & Besonderheiten -->
    <div class="app-box">
      <div class="app-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 10h2v6h-2v-6zm0 8h2v2h-2v-2zm1-14a8 8 0 11-8 8 8 8 0 018-8z"/>
        </svg>
      </div>
      <h3>Infos & Besonderheiten</h3>
      <p>Von Spielabsagen bis Aktionen – informiere dein Publikum automatisch und professionell.</p>
    </div>

    <!-- 5️⃣ Umfragen & Gewinnspiele -->
    <div class="app-box">
      <div class="app-icon">
        <!-- Eurozeichen -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 3c4.97 0 9 4.03 9 9 0 4.97-4.03 9-9 9-4.64 0-8.44-3.5-8.94-8H2v-2h1.06c.5-4.5 4.3-8 8.94-8 1.48 0 2.87.4 4.08 1.1l-1.26 1.52A6.97 6.97 0 0012 5a7 7 0 00-6.93 6H15v2H5.07A7 7 0 0012 19a6.97 6.97 0 005.82-3.12l1.26 1.52A8.94 8.94 0 0112 21c-4.97 0-9-4.03-9-9s4.03-9 9-9z"/>
        </svg>
      </div>
      <h3>Umfragen & Gewinnspiele</h3>
      <p>Starte automatisierte Fan-Votings, Verlosungen oder Umfragen – direkt mit Social Media Anbindung.</p>
    </div>

    <!-- 6️⃣ Eigene Contentverwaltung -->
    <div class="app-box">
      <div class="app-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M4 4h16v16H4V4zm2 2v12h12V6H6zm3 3h6v2H9V9zm0 4h6v2H9v-2z"/>
        </svg>
      </div>
      <h3>Eigenes Content-Management</h3>
      <p>Verwalte Farben, Logos und Layouts deiner Posts zentral – immer im passenden Branding deines Teams.</p>
    </div>

  </div>
</section>

<style>
.app-section {
  padding: 60px 20px;
  text-align: center;
  background: #0a0e1a;
}
.app-title {
  color: #f5c542;
  font-size: 32px;
  margin-bottom: 50px;
}
.app-grid {
  display: grid;
  gap: 30px;
  justify-content: center;
  max-width: 1240px;
  margin: 0 auto;
}
.app-grid-3 {
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
}
.app-box {
  background: #1b2436;
  border-radius: 14px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.5);
  padding: 30px 20px;
  transition: transform .3s ease, box-shadow .3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.app-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.6);
}
.app-icon {
  width: 64px;
  height: 64px;
  background: rgba(245,197,66,0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #f5c542;
  margin-bottom: 18px;
}
.app-icon svg {
  width: 34px;
  height: 34px;
}
.app-box h3 {
  color: #f5c542;
  margin: 10px 0;
  font-size: 18px;
}
.app-box p {
  color: #e0e0e0;
  font-size: 14px;
  line-height: 1.5;
  max-width: 280px;
}
@media(max-width:900px){
  .app-icon{width:90%;}
  .app-icon svg{width:26px;height:26px;}
  .app-box h3{font-size:16px;}
  .app-box p{font-size:13px;}
}
</style>
