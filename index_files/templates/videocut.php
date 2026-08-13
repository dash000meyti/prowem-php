<section class="app-section">
  <h2 class="app-title">Videotools – wähle deinen Modus</h2>

  <div class="app-grid">
    <div class="app-box" onclick="window.location.href='index.php?page=video'" style="cursor:pointer;">
      <img src="img/video.jpg" alt="Video abspielen" class="app-img">
      <div class="app-text">
        <h3>Video schneiden</h3>
        <p>Spiele ein vorhandenes Video ab und schneide die Tore und Highlights mit Mouseklick.</p>
      </div>
    </div>

    <div class="app-box" onclick="window.location.href='index.php?page=recorder'" style="cursor:pointer;">
      <img src="img/recorder.jpg" alt="Recorder" class="app-img">
      <div class="app-text">
        <h3>Recorder</h3>
        <p>Nehme direkt im Browser auf. Du kannst direkt bei Tore und Highlights per Klick am Ende eine Zusammenfassung erhalten.</p>
      </div>
    </div>

    <div class="app-box" onclick="window.location.href='index.php?page=timer'" style="cursor:pointer;">
      <img src="img/timer.jpg" alt="Nur Timer" class="app-img">
      <div class="app-text">
        <h3>Der Timer</h3>
        <p>Lass den Timer laufen und speichere die besten Szenen. Du kannst nachher das Video dann schneiden, ohne nachträglich zu markieren.</p>
      </div>
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
  font-size: 28px;
  margin-bottom: 40px;
}
.app-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
}
.app-box {
  flex: 1 1 calc(30% - 20px);
  background: #1b2436;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.5);
  transition: transform .3s ease, box-shadow .3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.app-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.6);
}
.app-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  filter: brightness(0.85);
}
.app-text {
  padding: 20px;
}
.app-text h3 {
  color: #f5c542;
  margin-bottom: 10px;
}
.app-text p {
  color: #e0e0e0;
  font-size: 14px;
  line-height: 1.5;
}
@media(max-width:900px){
  .app-box { flex: 1 1 45%; }
}
@media(max-width:600px){
  .app-box { flex: 1 1 100%; }
  .app-img { height: 160px; }
}
</style>
