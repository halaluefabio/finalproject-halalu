<script>
    import { usuarios } from "../stores";
    import VoltarHome from "./VoltarHome.svelte";

    const form = {
        username: "",
        pw: "",
    
    };

    const addUser = () => {
        $usuarios = $usuarios.concat({
            username: form.username,
            pw: form.pw,
            opcao: form.opcao,
        });

        form.username = "";
        form.pw = "";


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

         
    <div> 
        <p>Sou:</p>

        <input type="radio"
            id="professor"
            name="opcao"
            bind:value={form.opcao} 
            required >
            <label for="professor">Professor</label>
    <br>           
        <input type="radio"
            id="aluno" 
            name="opcao"
            bind:value={form.opcao}
            required>
            <label for="aluno">Aluno</label>
    </div>     
 
<br>

    <button>
            Cadastrar
    </button>


    </fieldset>

</form>
<button>
    <VoltarHome/>
</button>


