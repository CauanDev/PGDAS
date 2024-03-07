const button = document.querySelector(".mb-3 button")

function verificar()
{
    senha = document.getElementsByName('senha')  
    senha2 = document.getElementsByName('senha1') 
    const regex = /^(?=.*[A-Z])(?=.*\d).+$/;
    senha.classList.add("form-control") 
    senha2.classList.add("form-control")   
    if(senha.value !== senha2.value && !(regex.test(senha)))
    {       
        senha.classList.add("is-invalid")  
        senha2.classList.add("is-invalid")  
        button.disabled = true;
    }
    else
    {
        senha.classList.add("was-validated")  
        senha2.classList.add("was-validated") 
        button.disabled = false;
    }
}

function formatarCPF(cpf) 
{
    // Remove caracteres não numéricos
    cpf = cpf.replace(/\D/g, '');
    cpf_input = document.getElementsByName('cpf')  
    cpf_input.classList.add("form-control")
    if(cpf.lenght === 11)
    {
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
        document.getElementsByName('name').value = cpf
        cpf_input.classList.add("was-validated")  
        button.disabled = false;
    }
    else
    {
        cpf_input.classList.add("is-invalid")  
        button.disabled = true;
    }

}

function validarNome(name) 
{
    // Verifica se o nome contém apenas letras e espaços
    name_input = document.getElementsByName('name')  
    name_input.classList.add("form-control")
    const regex = /^[a-zA-Z\s]+$/;

    if (regex.test(name)) 
    {
        name_input.classList.add("was-valid")
        button.disabled = false;
    } 
    else 
    {
        name_input.classList.add("is-invalid")   
        button.disabled = true; 
    }
}

function validarEmail(email) 
{
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    email_input = document.getElementsByName('email')  
    if (regex.test(email)) 
    {
        name_input.classList.add("was-valid")
        button.disabled = false;
    } 
    else 
    {
        name_input.classList.add("is-invalid")   
        button.disabled = true;
    }
}