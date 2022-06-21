function gravar(){

    $.ajax({

        type: "POST",
        url: "index.php",
        data: {
            "nome": document.getElementById("nome").value,
            "idade": document.getElementById("idade").value,
            "sexo": document.getElementById("sexo").value,
            "email": document.getElementById("email").value,
            "telefone": document.getElementById("telefone").value
        }
    });
}