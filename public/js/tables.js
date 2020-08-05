var inputs = document.getElementsByClassName("quantityInput");

for (let input of inputs) {
    input.addEventListener("keypress", function(e) {
        if (e.key == "Enter") {
            const detail_id = this.dataset.id;
            if (this.value != "") {
                const quantity = this.value;
                fetch(`/cart/add?detail_id=${detail_id}&quantity=${quantity}`);
                const parent = this.parentElement;
                parent.classList.remove("added");
                setTimeout(function() {
                    parent.classList.add("added");
                }, 200);
            } else {
                fetch(`/cart/delete/${detail_id}`);
                this.parentElement.classList.remove("added");
            }
        }
    });
}

for (let input of inputs) {
    input.addEventListener("blur", function() {
        const detail_id = this.dataset.id;
        if (this.value != "") {
            const quantity = this.value;
            fetch(`/cart/add?detail_id=${detail_id}&quantity=${quantity}`);
            const parent = this.parentElement;
            parent.classList.remove("added");
            setTimeout(function() {
                parent.classList.add("added");
            }, 200);
        } else {
            fetch(`/cart/delete/${detail_id}`);
            this.parentElement.classList.remove("added");
        }
    });
}

window.addEventListener("hashchange", function() {
    window.scrollTo(window.scrollX, window.scrollY - 150);
});

document.getElementById("pageSelector").addEventListener("change", function() {
    document.getElementById(this.value).scrollIntoView();
    window.scrollBy(0, -150);
});

// for (let input of inputs) {
//     input.addEventListener("focus", function() {
//         let parent = document.createElement("ul");
//         let li1 = document.createElement("li");
//         li1.textContent = "50";
//         li1.onclick = function() {
//             this.parentElement.parentElement.firstElementChild.value = 50;
//             this.parentElement.parentElement.removeChild(
//                 this.parentElement.parentElement.lastElementChild
//             );
//         };
//         let li2 = document.createElement("li");
//         li2.textContent = "100";
//         li2.onclick = function() {
//             this.parentElement.parentElement.firstElementChild.value = 100;
//             this.parentElement.parentElement.removeChild(
//                 this.parentElement.parentElement.lastElementChild
//             );
//         };
//         let li3 = document.createElement("li");
//         li3.textContent = "150";
//         li3.onclick = function() {
//             this.parentElement.parentElement.firstElementChild.value = 150;
//             this.parentElement.parentElement.removeChild(
//                 this.parentElement.parentElement.lastElementChild
//             );
//         };
//         parent.append(li1, li2, li3);
//         this.parentElement.append(parent);
//     });
// }
