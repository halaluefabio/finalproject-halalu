
<script>
  import { trocarEstado } from "../stores";
  import { usuarioAtual } from "../stores";
</script>

<div class="inicio">
  <p class="titulo">HALALU</p>


<div class="fundo-inicio"></div>

  <img class="imagemhome" src="./src/imagens/índice-removebg-preview.png" />

</div>

<div>
<p class="mei">HALALU</p>
</div>

<div>
<p class="meio" >Vencer é nunca desistir...</p>
</div>

<button class="butao-inicio" on:click={() => trocarEstado("login")}>COMEÇAR</button>


<nav class="menu">

  <div class="buhome" on:click={() => trocarEstado("home")}>Home</div>

  <div class="busobre" on:click={() => trocarEstado("sobre")}>Sobre</div>


  {#if $usuarioAtual}

  {#if $usuarioAtual.opcao == 'aluno'}

  <div on:click={() => trocarEstado("aluno")}>Aluno</div>

  {:else if $usuarioAtual.opcao == 'professor'}
  <div on:click={() => trocarEstado("professor")}>Professor</div>
  {/if} 

  <div on:click={() => ($usuarioAtual = null)}>Logout</div>

  {:else}
  <div class="bucadastro" on:click={() => trocarEstado("register")}>
    Cadastrar </div>

  <div class="bulogin" on:click={() => trocarEstado("login")}>Login</div>
    
  {/if}

</nav>

<style>
  nav {
    display: flex;
    gap: 0.5em;
  }
  nav > div {
    border: 1px rgb(0, 0, 0);
    padding: 0 1em;
    cursor: pointer;
  }
</style>
