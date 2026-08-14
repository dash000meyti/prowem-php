<?php
namespace Prowem;

class Footer {
    public function render(): void {
        echo '
        <footer class="site-footer">
          <div class="footer-inner">
            <div class="footer-left">
              <img src="./logo.svg" alt="Prowem" class="footer-logo">
              <p>prowem © 2025 - all rights reserved</p>
            </div>
            <div class="footer-right">
              <a href="index.php?page=impressum">Impressum</a>
              <a href="index.php?page=about_us">About us</a>
              <a href="index.php?page=datenschutz">Datenschutz</a>
              <a href="index.php?page=agbs">AGBs</a>
            </div>
          </div>

          <script>
          document.addEventListener("DOMContentLoaded",function(){
            const burgerBtn=document.querySelector(".burger-btn");
            const burgerMenu=document.querySelector(".burger-menu");
            if(burgerBtn&&burgerMenu){
              burgerBtn.addEventListener("click",function(){
                burgerMenu.classList.toggle("open");
              });
            }
          });
          </script>

          <script>
          document.addEventListener("DOMContentLoaded",()=>{
            document.addEventListener("click",async(e)=>{
              const btn=e.target.closest(".status-btn");
              if(!btn)return;
              const username=btn.dataset.username;
              const status=btn.dataset.status;
              if(!username||!status)return;
              const action=(status==="accepted")?"accept":"deny";
              const url=`index.php?action=${action}&username=${encodeURIComponent(username)}&ajax=1`;
              try{
                const res=await fetch(url,{headers:{"Accept":"application/json"},credentials:"same-origin"});
                const ct=(res.headers.get("content-type")||"").toLowerCase();
                if(ct.includes("application/json")){
                  const data=await res.json();
                  if(data&&data.ok){
                    const row=btn.closest("tr");
                    if(row){
                      row.querySelectorAll(".status-btn").forEach(b=>{
                        const active=(b.dataset.status===data.status);
                        b.disabled=active;
                        b.classList.toggle("active",active);
                        b.classList.toggle("inactive",!active);
                      });
                    } else location.reload();
                    return;
                  }
                }
                location.reload();
              }catch(_){}
            });
          });
          </script>

          <!-- Modal -->
          <div class="modal" id="legal-modal" aria-hidden="true" role="dialog" aria-modal="true">
            <div class="modal__overlay" data-close-legal></div>
            <div class="modal__dialog" role="document">
              <div class="modal__header">
                <div class="modal__title" id="legal-modal-title">Rechtliches</div>
                <button class="modal__close" type="button" aria-label="Schließen" title="Schließen" data-close-legal>&times;</button>
              </div>
              <div class="modal__body" id="legal-modal-body"></div>
            </div>
          </div>

          <script>
          (function(){
            const modal=document.getElementById("legal-modal");
            const body=document.getElementById("legal-modal-body");
            const title=document.getElementById("legal-modal-title");
            function openModal(url,label){
              title.textContent=label||"Rechtliches";
              body.innerHTML="<p>Wird geladen…</p>";
              modal.classList.add("open");
              document.body.style.overflow="hidden";
              fetch(url,{credentials:"same-origin"})
                .then(r=>r.ok?r.text():Promise.reject(r.status))
                .then(html=>{body.innerHTML=html;})
                .catch(()=>{body.innerHTML="<p>Leider konnte der Inhalt nicht geladen werden.</p>";});
            }
            function closeModal(){modal.classList.remove("open");document.body.style.overflow="";}
            modal.addEventListener("click",e=>{if(e.target.matches("[data-close-legal]"))closeModal();});
            document.addEventListener("keydown",e=>{if(e.key==="Escape"&&modal.classList.contains("open"))closeModal();});
            document.addEventListener("click",e=>{
              const a=e.target.closest("a"); if(!a)return;
              const href=a.getAttribute("href")||"";
              if(href.includes("page=impressum")){e.preventDefault();openModal("impressum.tpl","Impressum");}
              else if(href.includes("page=datenschutz")){e.preventDefault();openModal("datenschutz.tpl","Datenschutz");}
            });
          })();
          </script>
        </footer>';
    }
}
