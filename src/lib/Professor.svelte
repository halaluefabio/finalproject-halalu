<script>
    import VoltarHome from "./VoltarHome.svelte";
    import { trocarEstado } from "../stores";
    

 /*
    function iniciarArquivos() {
        // @ts-ignore
        button.style.visibility = "hidden";
        // @ts-ignore
        arquivos.style.visibility = "visible";
    }
   
     */
  
</script>

<main>
    <h1>Ola, Professor!</h1>
    <br>
     <p>O que deseja fazer?</p>

    <div>      
         <button id="button" on:click={() => trocarEstado("uploads")}> Fazer Uploads </button>       
     </div>

    <div>
        <a href="https://youtube.com/playlist?list=PL-UjvsbvwwyB4xd2REAEjnbBeTJ27_q3a"
            target="_blank"
            rel="noopener noreferrer" >
            <button>criar playlist</button>
        </a>
    </div>

    <!-- svelte-ignore a11y-click-events-have-key-events -->
    <!--    <div id="button" on:click={() => iniciarArquivos()}> -->

    <div>
       <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
        <button id="button" on:click={() => trocarEstado("ajudaProf")}> ajuda </button> 
        
    </div>

    <button>
        <VoltarHome />
    </button>
</main>
<!--
<style>
    #arquivos {
        visibility: hidden;
    }

    #button {
        visibility: visible;
    }
</style>
-->