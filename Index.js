document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-contato');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const email = document.getElementById('email').value;

        // Simula envio (backend fictício)
        console.log("E-mail cadastrado:", email);

        // Limpa o campo e dá feedback ao usuário
        alert("E-mail cadastrado com sucesso!");
        form.reset();
    });
});
