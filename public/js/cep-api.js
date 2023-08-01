window.onload = function() {
    var cep = document.getElementById('cep1');

//    cep.addEventListener("keyup", function(e) {
  //      if(cep.value.length == 9) {
    //        autoComplete(cep.value);
      //  }
    //})
};

/*
var cep = document.getElementById('cep1');

cep.addEventListener("keyup", function(e) {
    if(cep.value.length == 9) {
        autoComplete(cep.value);
    }
});
*/

function autoComplete(cep) {
    /* let url = `https://webmaniabr.com/api/1/cep/${cep}/?app_key=XXXyCDSLbfFqk0DXCzV5J4CPT8Oi445Y&app_secret=gPLAm0O6EHOC6thdBhqACiUiRXlmprVaG8sqUdnOzhDxlY3y`; */
       let url = `http://localhost:8000/cep/${cep}`;

    /* O fetch(), com sua nova API, é para fazer requisições. Ele retorna uma "promise", mas como não se sabe quanto
       tempo vai demorar para ficar pronto(depende da API), então usa-se o método then(), para quando ficar pronto, executar uma função.
       Esta função terá um parâmetro "response" que será a resposta que a API(do correio) irá dar pra gente. */
    fetch(url).then(function(response) {
            /* Verificando se a resposta foi ok, se foi código http 200 */
            if(response.ok) {
            response.json().then(function(endereco) {
                console.log(endereco);
                document.getElementById('rua1').value = endereco.endereco;
                document.getElementById('bairro1').value = endereco.bairro;
                document.getElementById('cidade1').value = endereco.cidade;
                document.getElementById('estado1').value = endereco.uf;
            });
        }
    });
}

