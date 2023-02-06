<script>
   import { trocarEstado } from "../stores";
</script>

<h1> <button class="mesa">Materais</button> </h1>

<div>
    <button class="lapis" id="button" on:click={() => trocarEstado("aluno")}> Voltar para o perfil </button> 
    
</div>