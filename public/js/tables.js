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
