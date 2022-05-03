//let form = document.querySelector("#ciclo");
let enviar = async()=>{
    let peticion = await fetch("api.php");
    let data = await peticion.text();
    document.querySelector(".mensaje").insertAdjacentHTML("beforebegin", data);
}
enviar();

