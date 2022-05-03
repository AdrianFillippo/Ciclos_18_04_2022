let enviar = async()=>{
    let peticion = await fetch("api.php");
    let data = await peticion.text();
    document.body.insertAdjacentHTML("beforeend", data);
}
enviar();