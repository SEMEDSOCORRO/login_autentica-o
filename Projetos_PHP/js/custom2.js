const cadForm = document.getElementById("cad-usuario-form");
const msgAlert = document.getElementById("msgAlert");
const msgAlertErroCad = document.getElementById("msgAlertErroCad");
const cadModal = new bootstrap.Modal(document.getElementById("cadUsuarioModal"));

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dadosForm = new FormData(cadForm);

    const dados = await fetch("cadastrar.php", {
        method: "POST",
        body: dadosForm 
    });

    const resposta = await dados.json();

    //console.log(resposta);

    if(resposta['erro']){
        msgAlertErroCad.innerHTML = resposta['msg'];
    }else{
        msgAlert.innerHTML = resposta['msg'];
        cadForm.reset();
        cadModal.hide();
    }   
});