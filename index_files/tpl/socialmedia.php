<?php /* videomanager.php */ ?>

<section class="video-manager">

  <h1 class="video-manager-title">Was bietet unser Socialmedia-Manager?</h1>

  <div class="video-manager-list">

    <!-- BLOCK 1 (BESTEHEND – UNVERÄNDERT) -->
    <div class="video-block">
      <div class="video-img">
        <img src="img/app/socialmedia.png" alt="Video Recording">
      </div>
      <div class="video-text">
        <div class="video-topic">AUTO CONTENT GENERATOR</div>
        <p>
          Unsere Software erstellt aus den Daten eines Events, einer Liga oder eines Spiels automatisch Social-Media-Content. Nach einem einmaligen Set-up für Veranstalter oder Vereine werden alle relevanten Informationen direkt aus dem System verarbeitet und für die Content-Erstellung genutzt – ganz ohne zusätzlichen Aufwand oder manuelle Bearbeitung.

Dabei können individuelle Inhalte wie Torschützen, Man of the Match oder besondere Spielszenen definiert werden. Je nach Ereignis erzeugt PROWEM automatisch passende Grafiken und Beiträge und veröffentlicht diese auf Wunsch direkt nach einem Tor in WhatsApp- oder Telegram-Kanälen. Der gesamte Prozess läuft vollautomatisch im Hintergrund. 
        </p>
      </div>
    </div>

    <!-- FLOW -->
    <div class="flow-steps">

      <div class="flow-box">
        <img src="img/app/2.png" alt="Dateneingabe">
        <div class="flow-title">DATENEINGABE</div>
        <p>Die Daten des Spiels werden in Echtzeit eingegeben.</p>
      </div>

      <div class="flow-arrow"></div>

      <div class="flow-box">
        <img src="img/app/3.png" alt="Verarbeitung">
        <div class="flow-title">VERARBEITUNG</div>
        <p>Die Daten werden in Echtzeit im Hintergrund bearbeitet und mit den Set-Up Grafiken zusammengeführt.</p>
      </div>

      <div class="flow-arrow"></div>

      <div class="flow-box">
        <img src="img/app/SM.png" alt="Export">
        <div class="flow-title">AUSGABE & POSTING</div>
        <p>Die Daten werden sowohl zum Download bereitgestellt als auch automatisch direkt gepostet.</p>
      </div>

    </div>

  </div>

</section>

<style>

.video-manager{width:100%;padding:90px 0;background:url('img/app/bg.png') center center / cover no-repeat;}
.video-manager-title{text-align:center;font-size:52px;font-weight:800;color:#E4E4E4;margin-bottom:60px;}

.video-manager-list{max-width:1100px;margin:0 auto;display:flex;flex-direction:column;gap:80px;padding:0 16px;}

.video-block{display:flex;align-items:flex-start;gap:40px;}
.video-img{flex:0 0 350px;}
.video-img img{width:350px;height:auto;display:block;}

.video-text{flex:1;}
.video-topic{font-size:22px;font-weight:900;color:#FF6249;letter-spacing:1px;margin-bottom:14px;}
.video-text p{font-size:15px;line-height:1.7;color:#E4E4E4;max-width:720px;}

/* FLOW */
.flow-steps{display:flex;align-items:flex-start;justify-content:space-between;gap:24px;margin-top:40px;flex-wrap:wrap;}
.flow-box{text-align:center;flex:1;min-width:240px;}
.flow-box img{width:180px;height:auto;margin-bottom:20px;}
.flow-title{font-size:18px;font-weight:900;color:#FF6249;margin-bottom:10px;letter-spacing:1px;}
.flow-box p{font-size:14px;line-height:1.6;color:#E4E4E4;}

.flow-arrow{width:40px;min-height:120px;position:relative;}
.flow-arrow:after{content:'→';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:36px;color:#FF6249;font-weight:800;}

@media(max-width:900px){

.video-block{flex-direction:column;align-items:center;text-align:center;}
.video-text p{max-width:100%;}
.flow-steps{flex-direction:column;align-items:center;}
.flow-box{max-width:340px;}
.flow-arrow{display:none;}
.video-img{flex:unset;}
.video-img img{width:100%;max-width:350px;margin:0 auto;}
.video-manager-title{font-size:36px;margin-bottom:80px;}
}
</style>
