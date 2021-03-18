let form = document.querySelector('form[action="/slots"]');
let date = document.querySelector("input[type='date']");
let horaire = document.querySelector('select[name="horaire"]');
let ordinateur = document.querySelector('select[name="ordinateur"]');

let choixOrdi = document.querySelector("#choixOrdi");
let tmp = document.getElementsByClassName("tmp");

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

date.addEventListener("change", async () => {
    for (let i = tmp.length - 1; i >= 0; --i) {
        tmp[i].remove();
    }

    fetch("/slots/create?d=" + date.value + "&h=" + horaire.value, {
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": document.head.querySelector(
                "[name=csrf-token][content]"
            ).content,
        },
        method: "get",
    }).then((response) => {
        response = response
            .json()
            .then((data) => ({
                data: data,
                status: response.status,
            }))
            .then((res) => {
                console.log(res.data);
                if (res.data.length === 0) {
                    ordinateur.setAttribute("disabled", "true");
                    choixOrdi.innerHTML =
                        "Aucun ordinateur disponible pour cette date";
                } else {
                    ordinateur.removeAttribute("disabled");
                    choixOrdi.innerHTML = "Sélectionnez un ordinateur";
                    res.data.forEach((data) => {
                        console.log(data);
                        let option = document.createElement("option");
                        option.setAttribute("class", "tmp");
                        option.setAttribute("value", data["id"]);
                        option.innerHTML = data["nom"];
                        insertAfter(option, choixOrdi);
                    });
                }
            });
    });
});

horaire.addEventListener("change", async () => {
    for (let i = tmp.length - 1; i >= 0; --i) {
        tmp[i].remove();
    }

    fetch("/slots/create?d=" + date.value + "&h=" + horaire.value, {
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": document.head.querySelector(
                "[name=csrf-token][content]"
            ).content,
        },
        method: "get",
    }).then((response) => {
        response = response
            .json()
            .then((data) => ({
                data: data,
                status: response.status,
            }))
            .then((res) => {
                console.log(res.data);
                if (res.data.length === 0) {
                    ordinateur.setAttribute("disabled", "true");
                    choixOrdi.innerHTML =
                        "Aucun ordinateur disponible pour cette date";
                } else {
                    ordinateur.removeAttribute("disabled");
                    choixOrdi.innerHTML = "Sélectionnez un ordinateur";
                    res.data.forEach((data) => {
                        console.log(data);
                        let option = document.createElement("option");
                        option.setAttribute("class", "tmp");
                        option.setAttribute("value", data["id"]);
                        option.innerHTML = data["nom"];
                        insertAfter(option, choixOrdi);
                    });
                }
            });
    });
});
