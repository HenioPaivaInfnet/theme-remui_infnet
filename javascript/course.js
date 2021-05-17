console.info('Course');
//Retira o o codigo da classe no nome da disciplina
function codesHeader() {
  var header = document.querySelectorAll(".page-title.mb-0");
  var rgx = /\[([0-9]{2}[A-Z]{6}[0-9]{2}[A-Z]{3}[0-9]{3})\]\s(.{1,})\s\[([0-9]{2}E[0-9]{1}_[0-9]{1})\]/;

  for (var i = 0; i <= header.length-1; i++) {
    var fullname = header[i].innerHTML;
    var groups = fullname.match(rgx);

    if (groups != null) {
      console.log(groups);
      header[i].innerHTML = '<span class="page-header-course-code">'+ groups[1] +' </span><span class="page-header-period-code"> '+ groups[3]+'</span><span class="disciplina-fullname">'+ groups[2] + '</span>';
    }
  }
}
// Identifica se o TP tem o label "Obrigatorio" e aplica o estilo(falta aplica o css no remui!!!)
function rubricComp() {
  var itens = document.querySelectorAll('.modtype_assign');
  var i;
  for (i = 0; i < itens.length; i++) {
    itens[i].innerHTML = itens[i].innerHTML.replace(/\[Obrigatório\]/gi,"<span class='required_assign'>Obrigatório</span>");
  }
}
//Sobe a tag P e IMG para proxima child de summary, afim de ajustar a img das secoes do curso
/*function imgSummary() {
  var p = document.querySelectorAll('h1 + p');
  p.forEach(e => e.remove());
  var sumary = document.querySelectorAll('.summary');
  sumary.forEach((e, i) => e.prepend(p[i]));
}*/
rubricComp();
codesHeader();
//imgSummary();
