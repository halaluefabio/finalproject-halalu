<script>
    
    import { usuarios } from "../stores";
    import VoltarHome from "./VoltarHome.svelte";

    // let a = document.querySelector('input[name="opcao"]:checked')
    
    const form = {
        username: "",
        pw: "",
        opcao: "",
    
    };

    const addUser = () => {
        $usuarios = $usuarios.concat({
            username: form.username,
            pw: form.pw, 
            opcao: document.querySelector('input[name="opcao"]:checked').id  ,
        });

        form.username = "";
        form.pw = "";
        form.opcao;


        alert("Cadastro efetuado com sucesso!");
    };
</script>


<form on:submit|preventDefault={addUser}  >
    <fieldset>
        <legend>Cadastro</legend>

    <div>
        <input
            
            type="text"
            name="username"
            bind:value={form.username}
            placeholder="username"
            required
        />
    

        <input
            type="password"
            name="pw"
            bind:value={form.pw}
            placeholder="password"
            required
        />
    </div>

         
   

<form>
    <div>
       <p>Sou:</p>

        <input type="radio"
            id="professor"
            name="opcao"
            bind:value={form.opcao}
            required > Professor
            
    <br>           
        <input type="radio"
            id="aluno"
            name="opcao"
            bind:value={form.opcao}
            required> Aluno
            
    </div>     
</form>
<br>

<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">


    </fieldset>

</form>
<button>
    <VoltarHome/>
</button>


