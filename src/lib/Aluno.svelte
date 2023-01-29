<script>
    import VoltarHome from "./VoltarHome.svelte";
     import { usuarioAtual} from "../stores";
     import { trocarEstado } from "../stores";

     

</script>

<main>

    <h1>Ola, Aluno!</h1>

    <p>Playlist com videos para você </p>
        <a href="https://youtube.com/playlist?list=PL-UjvsbvwwyB4xd2REAEjnbBeTJ27_q3a" 
        target="_blank" 
        rel="noopener noreferrer"> <button>playlist</button> 
        </a>
        
    <div>
            <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
        <button id="button" on:click={() => trocarEstado("ajudaAlu")}> ajuda </button> 
             
    </div>   

</main>

<button>
    <VoltarHome/>
</button>