<script>
  import { trocarEstado } from "../stores";
  import { usuarioAtual } from "../stores";
  
  </script>
  
  
  <div class="inicio">
  
      <p class="titulo" >HALALU</p>
      <p class="subtitulo"> Vencer é nunca desistir... </p>
  
  </div>
  
  <div class="fundo-inicio" >
  </div>
  
  <!-- svelte-ignore a11y-click-events-have-key-events -->
  <nav class="menu" >
  
      <div class="buhome" on:click={() => trocarEstado("home")}>Home</div>
  
      <div class="busobre" on:click={() => trocarEstado("sobre")}>Sobre</div>
  
      <div on:click={() => trocarEstado("professor")}>Professor</div>
      <div on:click={() => trocarEstado("aluno")}>Aluno</div>
       
  
      {#if !$usuarioAtual}
        <div class="bucadastro" on:click={() => trocarEstado("register")}>Cadastrar</div>
  
        <div class="bulogin" on:click={() => trocarEstado("login")}>Login</div>
      {:else}
       <!-- <div on:click={() => trocarEstado("aluno")}>Aluno</div> -->
        <div on:click={() => ($usuarioAtual = null)}>Logout</div>
      {/if}
    </nav>
   
    <style >
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