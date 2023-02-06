

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

<div class="fundo-cad">
    <img class="imagemhom" src="./src/imagens/índice-removebg-preview.png" />
  </div>



    <div>

<form class="uiui" on:submit|preventDefault={addUser}  >
        <legend class="tutu">Cadastro</legend>

<br>

        <input class="impute"
            
            type="Nome"
            name="username"
            bind:value={form.username}
            placeholder="Nome"
            required
            autocomplete="off"
        />
    

        <input class="imputee"
            type="password"
            name="pw"
            bind:value={form.pw}
            placeholder="Senha"
            required
        />

       <p class="eu" >Sou:</p>
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
            <br>
            <br>
  <input class="unha" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
<br>
<br>
<button class="pe" >
    <VoltarHome/>
</button>          
</form>

</div>