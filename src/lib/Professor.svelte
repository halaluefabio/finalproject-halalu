

<script>
    import VoltarHome from "./VoltarHome.svelte";
    import { trocarEstado } from "../stores";
    
  
</script>

<main>
    <h1><button class="tigre" > Olá, Professor!</button></h1>
    <br>
     <p class="leao" >O que deseja fazer ?</p>


   


    <div>      
         <button class="papagaio" id="button" on:click={() => trocarEstado("uploads")}> Fazer Uploads </button>       
     </div>

    <div >
        <a href="https://youtube.com/playlist?list=PL-UjvsbvwwyB4xd2REAEjnbBeTJ27_q3a"
            target="_blank"
            rel="noopener noreferrer" >
            <button class="zebra" >Criar playlist</button>
        </a>
    </div>

    <div>

        <button class="gato" id="button" on:click={() => trocarEstado("AjudaProf")}>Ajuda</button>      
    </div>
    
    <img class="imagemprof" src="./src/imagens/índice-removebg-preview.png" />

    <button class="cachorro" >
        <VoltarHome />
    </button>
</main>
