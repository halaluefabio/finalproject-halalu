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
 
 <h1><button class="sol">Página de Uploads</button> </h1>


   <h2> <button class="lua"> Coloque aqui atividades para seu aluno </button></h2>


    <div class="estrela">
        
       <input bind:files id="many" multiple type="file" />
 
       {#if files}
           <h2 >Arquivos selecionados:</h2>
 
           {#each Array.from(files) as file}
               <p>{file.name} ({file.size} bytes)</p>
           {/each}
       {/if}

   </div>
 

 
   <div>
    <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
     <button class="cometa" id="button" on:click={() => trocarEstado("professor")}> voltar para o perfil </button> 
     
 </div>