const form = document.getElementById("login--form");
const registerBtn = document.getElementById("register-button");
form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const mail = e.target.email;
    const password = e.target.pass;

    // doing the request to the login service
    const res = await fetch("/cryptoRestaurant/controller/controller.php?login=true", {
        method: "POST",
        body: JSON.stringify({
            mail,
            password
        })
    });

    if (res.status === 200) {
        window.location.href = "/cryptoRestaurant/views/index.php";
    }
})

registerBtn.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = "/cryptoRestaurant/views/register-user.php";
})