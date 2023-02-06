<script>
// @ts-nocheck

  import Home from "./lib/Home.svelte";
  import Register from "./lib/Register.svelte";
  import Login from "./lib/Login.svelte";
  import Sobre from "./lib/Sobre.svelte";
  import Aluno from "./lib/Aluno.svelte";
  import { paginaAtual} from "./stores";
  import Professor from "./lib/Professor.svelte";
  import AjudaProf from "./lib/AjudaProf.svelte";
  import AjudaAlu from "./lib/AjudaAlu.svelte";
  import Uploads from "./lib/Uploads.svelte";


</script>

<main>
  
  <div>
    {#if $paginaAtual == "home"}
      <Home />
    {:else if $paginaAtual == "register"}
      <Register />
    {:else if $paginaAtual == "login"}
      <Login />
    {:else if $paginaAtual == "sobre"}
      <Sobre />
    {:else if $paginaAtual == "aluno"}
      <Aluno />
    {:else if $paginaAtual == "professor"}
    <Professor />
    {:else if $paginaAtual == "AjudaProf"}
    <AjudaProf />
    {:else if $paginaAtual == "AjudaAlu"}
    <AjudaAlu />
    {:else if $paginaAtual == "uploads"}
    <Uploads />
     
    {/if}
  </div>
</main>


