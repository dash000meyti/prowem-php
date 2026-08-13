<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Video Auswahl</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style_main.css">
<style>
.page-videocut {
  background:#0a0e1a;
  color:#fff;
  font-family:'Poppins',sans-serif;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
}
.videocut-container {
  width:100%;
  max-width:1240px;
  margin:60px auto;
  padding:0 20px;
  text-align:center;
}
.videocut-container h1 {
  font-size:2.2rem;
  color:#f5c542;
  margin-bottom:40px;
}
.videocut-grid {
  display:grid;
  gap:30px;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
}
.videocut-feature {
  background:#1b2436;
  border-radius:12px;
  padding:30px;
  box-shadow:0 4px 10px rgba(0,0,0,.4);
  display:flex;
  flex-direction:column;
  align-items:center;
  min-height:220px;
  transition:transform .2s,box-shadow .2s;
  cursor:pointer;
}
.videocut-feature:hover {
  transform:translateY(-5px);
  box-shadow:0 8px 18px rgba(0,0,0,.6);
}
.videocut-feature img {
  width:100%;
  max-width:260px;
  border-radius:10px;
  margin-bottom:12px;
  object-fit:cover;
}
.videocut-feature h3 {
  font-size:1.2rem;
  color:#f5c542;
  margin-bottom:10px;
}
.videocut-feature p {
  font-size:0.95rem;
  color:#ddd;
  line-height:1.5;
}
</style>
</head>
<body class="page-videocut">

  <div class="videocut-container">
    <h1>Modus wählen</h1>
    <div class="videocut-grid">

      <div class="videocut-feature" onclick="window.location='video.php'">
        <img src="img/video.jpg" alt="Video abspielen">
        <h3>Video abspielen</h3>
        <p>Wähle ein gespeichertes Video aus und spiele es ab, um Highlights zu markieren oder Clips zu schneiden.</p>
      </div>

      <div class="videocut-feature" onclick="window.location='recorder.php'">
        <img src="img/recorder.jpg" alt="Video aufnehmen">
        <h3>Recorder</h3>
        <p>Starte eine Aufnahme direkt über dein Gerät. Perfekt für Spielmitschnitte und Live-Aktionen.</p>
      </div>

      <div class="videocut-feature" onclick="window.location='timer.php'">
        <img src="img/timer.jpg" alt="Nur Timer">
        <h3>Nur Timer</h3>
        <p>Nutze den integrierten Timer, um Highlight-Zeiten manuell zu erfassen, ohne ein Video zu laden.</p>
      </div>

    </div>
  </div>

</body>
</html>
