<?php
namespace Prowem;

class Footer {
  public function render(): void {
    echo '
    <footer class="prowem-footer">
      <style>
        .prowem-footer{background:#FF6249;color:#111;padding:60px 0;font-family:\'Ubuntu\',sans-serif;}
        .prowem-footer-inner{max-width:1200px;margin:0 auto;padding:0 24px;display:grid;grid-template-columns:260px 1fr 1fr 1fr;gap:40px;align-items:start;}
        .footer-brand{display:flex;flex-direction:column;gap:14px;}
        .footer-brand img{width:140px;height:auto;}
        .footer-brand span{font-size:13px;opacity:.7;}
        .footer-col{display:flex;flex-direction:column;gap:2px;}
        .footer-title{font-size:12px;font-weight:700;letter-spacing:1px;opacity:.6;margin-bottom:12px;}
        .footer-link{color:#111;text-decoration:none;font-size:14px;line-height:1.1;}
        .footer-link:hover{text-decoration:underline;line-height:1.1;}
        .footer-text{font-size:14px;line-height:1.1;}
        @media(max-width:900px){
          .prowem-footer-inner{grid-template-columns:1fr;gap:32px;}
        }
      </style>

      <div class="prowem-footer-inner">

        <div class="footer-brand">
          <img src="./logo.png" alt="Prowem">
          <span>prowem © 2026 – all rights reserved</span>
        </div>

        <div class="footer-col">
          <div class="footer-title">INFO</div>
          <a class="footer-link" href="?page=app">Event-App</a>
          <a class="footer-link" href="?page=videomanager">Video Manager</a>
          <a class="footer-link" href="?page=socialmedia">Socialmedia-Manager</a>
          
        </div>

        <div class="footer-col">
          <div class="footer-title">CONTACT US</div>
          <div class="footer-text">+43 6641973537</div>
          <div class="footer-text">office@prowem.com</div>
        </div>

        <div class="footer-col">
          <div class="footer-title">FIND US</div>
          <div class="footer-text">Lacknergasse 94/7<br>1180 Wien</div>
          
        </div>

      </div>
    </footer>
    ';
  }
}
