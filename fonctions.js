function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}

function MM_reloadPage(init) {
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function enter(url,title,w,h) {
    window.open(url,title,'toolbar=no,location=0,directories=no,menubar=0,resizable=0,scrollbars=no,status=no,width='+w+',height='+h+'');
}



