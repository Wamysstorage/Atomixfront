// adding divs with array
let seeMore = document.querySelector('.partners2-seeMore');
let container = document.querySelector('.partners2-cardContainer');

function addDiv() {

    let result = [];

    for (let i = 0; i <= 5; i++) {
        let div = document.createElement("div");
        for (let j = 0; j <= 1; j++) {
            let p = document.createElement("p");
            div.append(p);
        }
        div.classList.add('partners2-card');
        result.push(div);
    }

    return result

}

//
seeMore.addEventListener('click', () => {
    container.append(...addDiv());
})