 <script>
    import { trocarEstado } from "../stores";
 </script>

 <h1>ajuda aluno</h1>

 <div>
    <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
     <button id="button" on:click={() => trocarEstado("aluno")}> voltar para o perfil </button> 
     
 </div>