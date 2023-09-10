// data for search
const options = [
    {
        name: "Sao Paulo, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Combatentes, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Sao Pedro da Barra, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Porto Pesqueiro, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Petrangol, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Uige, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Kwanzas, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Ngola Kiluanji, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Miramar, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Marcal, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    }, {
        name: "Bairro operario, Sambizanga - Luanda",
        url: "imoveis.html?location=Luanda",
    },
];

const optionsEL = document.querySelector(".options");
options.forEach((i) => {
    let option = document.createElement("li");
    option.classList.add(
        "option",
        "list-unstyled",
        "h-12",
        "text-muted",
        "text-dark",
        "border-gray-600",
        "items-center",
        "px-4",
        "my-2",
        "pointer-event"
    );
    option.innerHTML = i.name;

    option.addEventListener('click', function () {
        location.href = i.url;
    })

    option.setAttribute("style", "cursor:pointer;");

    optionsEL.appendChild(option);
});

// search function

const optionsEls = document.querySelectorAll(".option");
const searchEl = document.querySelector(".search");
const lista = document.querySelector("#lista");

lista.style.display = "none";
function mostra() {

    if (searchEl.value.length > 0) {
        lista.style.display = "block";

        optionsEls.forEach(
            (e) =>
            (e.style.display =
                e.innerHTML.toUpperCase().indexOf(searchEl.value.toUpperCase()) >
                    -1
                    ? ""
                    : "none")
        );
    } else {
        lista.style.display = "none";
    }
}
