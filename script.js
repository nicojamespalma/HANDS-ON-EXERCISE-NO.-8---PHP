const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");

function showForm(theform){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"))
    document.getElementById(theform).classList.add("active")
}