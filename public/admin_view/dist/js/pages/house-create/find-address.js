function findAddress() {
    const zip = document.querySelector("#cep");
    zip.setAttribute("disabled", true)
    const street = document.querySelector("#street")
    const neighborhood = document.querySelector("#neighborhood")
    const city = document.querySelector("#city")
    const number = document.querySelector("#number")
    // Fazer a requisição usando fetch
    fetch("https://viacep.com.br/ws/" + zip.value + "/json")
        .then(response => {
            // Verificar se a requisição foi bem-sucedida (status code 200)
            if (!response.ok) {
                throw new Error(`Erro na requisição. Status: ${response.status}`);
            }
            // Parsear a resposta para JSON e retornar os dados
            return response.json();
        })
        .then(data => {
            // Retornar os dados do CEP
            const streetData = data['logradouro'];
            const neighborhoodData = data['bairro'];
            const cityData = data['localidade'];
            street.value = streetData
            neighborhood.value = neighborhoodData
            city.value = cityData
            number.setAttribute("placeholder", "Digite o número do imóvel")
            number.removeAttribute("disabled")
            zip.removeAttribute("disabled")
        })
        .catch(error => {
            // Lidar com erros durante a requisição
            street.value = ''
            neighborhood.value = ''
            city.value = ''
            street.setAttribute("disabled", true)
            neighborhood.setAttribute("disabled", true)
            city.setAttribute("disabled", true)
            number.setAttribute("disabled", true)
            number.setAttribute("placeholder", "Aguardando cep")
            zip.removeAttribute("disabled")
            toastr.error('Erro na consulta do cep!')
        });
}