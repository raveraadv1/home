(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      window.open("https://go.perfectpay.com.br/PPU38CK56M7?src=Facebook-Voltar","_blank");
    },0);
  }
}, false);
}(window, location));