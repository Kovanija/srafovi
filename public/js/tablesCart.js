function addToCart(input) {
    const detail_id = input.dataset.id;
    if (input.value !== "") {
        const quantity = input.value;
        fetch(`/cart/add?detail_id=${detail_id}&quantity=${quantity}`);
        const parent = input.parentElement;
        //parent.classList.remove("added");
        //setTimeout(function() {
        parent.classList.add("added");
        //}, 200);
    } else {
        fetch(`/cart/delete/${detail_id}`);
        input.parentElement.classList.remove("added");
    }
}
