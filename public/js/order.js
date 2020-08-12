const _token = document.getElementsByName("_token")[0].value;
const orderTable = document.getElementById("orderTable");

var formData = new FormData();
formData.append("_token", _token);

document.getElementById("orderBtn").addEventListener("click", function() {
    fetch(`/cart/order`, {
        method: "post",
        credentials: "same-origin",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            let html = `<p>${data.success}</p><ul>`;
            for (let item of data.exist) {
                html += `<li>${item}</li>`;
            }
            html += "</ul>";
            document.getElementById("successBox").innerHTML = html;
        });
});

// var deleteButtons = document.getElementsByClassName("deleteItemBtn");
// for (let btn of deleteButtons) {
//     btn.addEventListener("click", function() {
//         const detail_id = this.dataset.id;
//         fetch(`/cart/delete/${detail_id}`)
//             .then(response => response.text())
//             .then(data => (orderTable.innerHTML = data));
//     });
// }

function deleteFromCart(id) {
    const detail_id = id;
    console.log("clicK");
    console.log(detail_id);
    fetch(`/cart/delete/${detail_id}`)
        .then(response => response.text())
        .then(data => (orderTable.innerHTML = data));
}
