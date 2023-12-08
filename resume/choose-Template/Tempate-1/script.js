
function generatePDF() {
    
  const element = document.getElementsByTagName("body")[0];
  html2pdf().from(element).save('download.pdf'); 
  }
generatePDF();