class Automobil{
  constructor(model, cena, godiste, boja, gorivo, stanje, grad, registrovan){
    this.model = model;
    this.cena = cena;
    this.godiste = godiste;
    this.boja = boja;
    this.gorivo = gorivo;
    this.stanje = stanje;
    this.grad = grad;
    this.registrovan = registrovan;
  }
}

let nizAutomobila = [];



let Auto = new Automobil("BMW", "3000", "2010", "Crna", "Benzin", "Polovan", "Krusevac", "12.06.2023.");
let content = document.getElementById("content");
window.addEventListener('load', function(){
  content.innerHTML = `
  <td>${Auto.model}</td>
  <td>${Auto.cena}</td>
  <td>${Auto.godiste}</td>
  <td>${Auto.boja}</td>
  <td>${Auto.gorivo}</td>
  <td>${Auto.stanje}</td>
  <td>${Auto.grad}</td>
  <td>${Auto.registrovan}</td>
  `;
})