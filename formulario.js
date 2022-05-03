let enviar = async(config)=>{
    config.data.body = JSON.stringify(config.data.body);
    let peticion = await fetch(config.url, config.data);
    let data = await peticion.text();
    console.log(config);
    postMessage(data);
}

self.addEventListener("message", function(e){
    console.log("Hola del archivo formulario.js");
    enviar(e.data);
    
})