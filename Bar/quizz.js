function afficheMessage() {
  var rep = prompt("Quel est notre spécialité ?");
  if (rep == "Rhum" || rep == "RHUM" || rep == "rhum") {
    alert("BRAVO !!!");
  } else {
    alert("Réponse incorrect !");
  }
}

function affichePopup() {
  var rep = document.getElementById("reponse").value.trim();
  if (rep == "mugiwara") {
    alert("BRAVO !!!");
  } else {
    alert("Réponse incorrect !");
  }
}

const bonneImageId = "img2";

function verifierClic(event) {
  if (event.target.id === bonneImageId) {
    alert("Bravo !");
  } else {
    alert("Réessaie !");
  }
}

const images = document.querySelectorAll("img");
images.forEach((img) => {
  img.addEventListener("click", verifierClic);
});

function devinerImage() {
  const indice =
    "Indice : C'est le capitaine d'un équipage de pirates célèbre.";
  const bonneReponse = "luffy"; // réponse attendue (en minuscules)

  const reponse = prompt(indice + "\nQui est sur l'image ?");

  if (!reponse) {
    alert("Tu n'as rien écrit, réessaie !");
    return;
  }

  if (reponse.trim().toLowerCase() === bonneReponse) {
    document.getElementById("mystere").style.display = "block";
    alert("Bravo, tu as trouvé !");
  } else {
    alert("Mauvaise réponse, réessaie !");
  }
}

function corriger() {
  var points = 0;

  // Question 1
  var r1 = document.getElementsByName("q1");
  if (r1[1].checked) points = points + 1;

  // Question 2
  var r2 = document.getElementsByName("q2");
  if (r2[3].checked) points = points + 1;

  // Question 3
  var r3 = document.getElementsByName("q3");
  if (r3[1].checked) points = points + 1;

  alert("Votre Score est : " + points + "/3");
}
