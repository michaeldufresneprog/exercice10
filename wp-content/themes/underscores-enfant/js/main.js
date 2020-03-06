
window.addEventListener("load",function(evt){
    let collectionBtnNouvelle = document.querySelectorAll(".button-css");
    if (collectionBtnNouvelle){
        for (let btn of collectionBtnNouvelle){
                btn.addEventListener('click',Ajax)
        }
    }
});
 //let collectionNouvelle = 


function Ajax(evt){
    if(evt.target.classList.contains("active")){
        let id = evt.target.getAttribute("id");
        viderSection(id);
        return;
    }
    evt.target.classList.add("active");
    let id = evt.target.getAttribute("id");
    let numberId = evt.target.getAttribute("data");
    let maRequete = new XMLHttpRequest();
    maRequete.open('GET', 'http://localhost/wordpress/wp-json/wp/v2/posts'); // modifier ici
    maRequete.onload = function () {
        if (maRequete.status >= 200 && maRequete.status < 400) {
            let data = JSON.parse(maRequete.responseText);
            creationHTML(data[id] ,id);
        } else {
            console.log('La connexion est faite mais il y a une erreur')
        }
    }
    maRequete.onerror = function () {
        console.log("erreur de connexion");
    }
    maRequete.send()
    }

    // instructions à ajouter


///////////////////////////////////////////////////////

function creationHTML(postsData, id){
    console.log(id);
    let contenuNouvelle = document.querySelectorAll(".division-vide");
    console.log(contenuNouvelle);
    let monHtmlString = '';
        monHtmlString += '<h2>' + postsData.title.rendered + '</h2>';
        monHtmlString += postsData.content.rendered;
    contenuNouvelle[id].innerHTML = monHtmlString; 
}
function viderSection(id){
    let contenuNouvelle = document.querySelectorAll(".division-vide");
    contenuNouvelle[id].innerHTML = ""; 
}



