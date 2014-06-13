function replaceText(){

	for(var artistes in artJson){

			if(artJson[artistes].idart == idartiste){

				if(document.getElementById('result')){

					var result = document.getElementById('result'); // pour du gros texte
					result.innerHTML = artJson[artistes].nom;
				}

				if(document.getElementById('titleevent')){

					var titleevent = document.getElementById('titleevent'); // pour du gros texte
					titleevent.innerHTML = artJson[artistes].titre;
				}

				if(document.getElementById('dateevent')){

					var dateevent = document.getElementById('dateevent'); // pour du gros texte 
					dateevent.innerHTML = artJson[artistes].date;
				}

				if(document.getElementById('categorie1')){

					var categorie1 = document.getElementById('categorie1'); // pour du gros texte 
					categorie1.innerHTML = artJson[artistes].categorie1;
				}

				if(document.getElementById('categorie1detail')){

					var categorie1detail = document.getElementById('categorie1detail'); // pour du gros texte 
					categorie1detail.innerHTML = artJson[artistes].categorie1detail;
				}

				if(document.getElementById('categorie2')){

					var categorie2 = document.getElementById('categorie2'); // pour du gros texte 
					categorie2.innerHTML = artJson[artistes].categorie2;
				}

				if(document.getElementById('categorie2detail')){

					var categorie2detail = document.getElementById('categorie2detail'); // pour du gros texte 
					categorie2detail.innerHTML = artJson[artistes].categorie2detail;
				}

				if(document.getElementById('categorie3')){

					var categorie3 = document.getElementById('categorie3'); // pour du gros texte 
					categorie3.innerHTML = artJson[artistes].categorie3;
				}

				if(document.getElementById('categorie3detail')){

					var categorie3detail = document.getElementById('categorie3detail'); // pour du gros texte 
					categorie3detail.innerHTML = artJson[artistes].categorie3detail;
				}

				if(document.getElementById('categorie4')){

					var categorie4 = document.getElementById('categorie4'); // pour du gros texte 
					categorie4.innerHTML = artJson[artistes].categorie4;
				}

				if(document.getElementById('categorie4detail')){

					var categorie4detail = document.getElementById('categorie4detail'); // pour du gros texte 
					categorie4detail.innerHTML = artJson[artistes].categorie4detail;
				}

				if(document.getElementById('categorie5')){

					var categorie5 = document.getElementById('categorie5'); // pour du gros texte 
					categorie5.innerHTML = artJson[artistes].categorie5;
				}

				if(document.getElementById('categorie5detail')){

					var categorie5detail = document.getElementById('categorie5detail'); // pour du gros texte 
					categorie5detail.innerHTML = artJson[artistes].categorie5detail;
				}

				if(document.getElementById('categorie5pack')){

					var categorie5pack = document.getElementById('categorie5pack'); // pour du gros texte 
					categorie5pack.innerHTML = artJson[artistes].categorie5pack;
				}


				if(document.getElementById('categorie6')){

					var categorie6 = document.getElementById('categorie6'); // pour du gros texte 
					categorie6.innerHTML = artJson[artistes].categorie6;
				}

				if(document.getElementById('categorie6detail')){

					var categorie6detail = document.getElementById('categorie6detail'); // pour du gros texte 
					categorie6detail.innerHTML = artJson[artistes].categorie6detail;
				}

				if(document.getElementById('categorie6pack')){

					var categorie6pack = document.getElementById('categorie6pack'); // pour du gros texte 
					categorie6pack.innerHTML = artJson[artistes].categorie6pack;
				}

				if(document.getElementById('achat')){

					var achat = document.getElementById('achat'); // pour du gros texte 
					achat.setAttribute('href',artJson[artistes].tickets);
				}

				if(document.getElementById('artistpic')){

					var artistpic = document.getElementById('artistpic'); // pour du gros texte 
					artistpic.style.backgroundImage = 'url(img/artists/' + artJson[artistes].artistpic + ')';
				}

				if(document.getElementById('artistpic1')){

					var artistpic1 = document.getElementById('artistpic1'); // pour du gros texte 
					artistpic1.style.backgroundImage = 'url(img/artists/' + artJson[artistes].artistpic1 + ')';
				}

				if(document.getElementById('artistpic2')){

					var artistpic2 = document.getElementById('artistpic2'); // pour du gros texte 
					artistpic2.style.backgroundImage = 'url(img/artists/' + artJson[artistes].artistpic2 + ')';
				}

				if(document.getElementById('artistpic3')){

					var artistpic3 = document.getElementById('artistpic3'); // pour du gros texte 
					artistpic3.style.backgroundImage = 'url(img/artists/' + artJson[artistes].artistpic3 + ')';
				}

				if(document.getElementById('picresult')){

					var picresult = document.getElementById('picresult'); // pour du gros texte 
					picresult.style.backgroundImage = 'url(img/' + artJson[artistes].picresult + ')';
				}

				// if(document.getElementById('balise')){

				// 	var monlien = document.getElementById('monlien'); // pour un lien
				// }

				if(document.getElementById('details')){

					var details = document.getElementById('details').children; // pour une liste

					details[0].children[0].innerHTML = artJson[artistes].date;
					details[1].children[0].innerHTML = artJson[artistes].heure;
					details[2].children[0].innerHTML = artJson[artistes].partie;
					details[5].children[0].children[0].setAttribute('href',artJson[artistes].tickets);
					details[6].children[0].innerHTML = artJson[artistes].tournee;
					details[7].children[0].children[0].setAttribute('href',artJson[artistes].site);
				}

				if(document.getElementById('marchandises')){

					var marchandises = document.getElementById('marchandises').children; // pour une liste

					marchandises[0].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch1 + ')';
					marchandises[1].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch2 + ')';
					marchandises[2].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch3 + ')';
					marchandises[3].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch4 + ')';
					marchandises[4].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch5 + ')';
					marchandises[5].style.backgroundImage = 'url(img/merch/' + artJson[artistes].merch6 + ')';
				}

				if(document.getElementById('marchandises')){

					var boutique = document.getElementsByClassName('boutique'); // pour une liste

					boutique[0].innerHTML = artJson[artistes].objet1;
					boutique[1].innerHTML = artJson[artistes].objet1prix;
					boutique[2].innerHTML = artJson[artistes].objet2;
					boutique[3].innerHTML = artJson[artistes].objet2prix;
					boutique[4].innerHTML = artJson[artistes].objet3;
					boutique[5].innerHTML = artJson[artistes].objet3prix;
					boutique[6].innerHTML = artJson[artistes].objet4;
					boutique[7].innerHTML = artJson[artistes].objet4prix;
					boutique[8].innerHTML = artJson[artistes].objet5;
					boutique[9].innerHTML = artJson[artistes].objet5prix;
					boutique[10].innerHTML = artJson[artistes].objet6;
					boutique[11].innerHTML = artJson[artistes].objet6prix;
				}		
			
		}
	}

};











