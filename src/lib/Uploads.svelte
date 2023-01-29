<script>
   import { trocarEstado } from "../stores";


   
   let files;

    $: if (files) {
        console.log(files);

        for (const file of files) {
            console.log(`${file.name}: ${file.size} bytes`);
        }
    }

</script>

<h1> Pagina de Uploads </h1>

   <div>
      <h2>Coloque aqui atividades para seu aluno</h2>

      <input bind:files id="many" multiple type="file" />

      {#if files}
          <h2>Arquivos selecionados:</h2>

          {#each Array.from(files) as file}
              <p>{file.name} ({file.size} bytes)</p>
          {/each}
      {/if}
  </div>



  <div>
   <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
    <button id="button" on:click={() => trocarEstado("professor")}> voltar para o perfil </button> 
    
</div>



