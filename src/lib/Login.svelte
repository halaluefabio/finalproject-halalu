

<script> 

    import { paginaAtual, login } from "../stores";
    import VoltarHome from "./VoltarHome.svelte";
    import { usuarioAtual } from "../stores";
import { trocarEstado } from "../stores";

    const form = {
        username: "",
        pw: "",
    }
    
    const handleForm = async () =>{
        await login(form.username, form.pw);
        if ($paginaAtual){
            $paginaAtual = 'home';
        }
    };
    


    </script>

<div class="fundo-inici">
  <img class="imagemhom" src="./src/imagens/índice-removebg-preview.png" />
</div>

    <div id="form">   
         <form on:submit|preventDefault={handleForm} >
        <label>
            <legend class="title">Login</legend>
            <input class="imput"
            type="nome"
            name="username"
            bind:value={form.username}
            placeholder="Nome"
            required 
            autocomplete="off"
            />
            <input class="imputt"
            type="password"
            name="pw"
            bind:value={form.pw}
            placeholder="Senha"
            required 
            />
        
            <div> 
                <br>
                <p>Ainda não tem uma conta?</p>
                <div class="reg" on:click={() => trocarEstado("register")}>Clique aqui</div>
            </div>
            <div id="btn" >
            <button type="submit">Entrar</button>

            
            </div>
        </label>
    </form>
    
<button class="bu-voltar">
                <VoltarHome/>
            </button>


</div>





    