<script>
    import VoltarHome from "./VoltarHome.svelte";
     import { usuarioAtual} from "../stores";
     import { trocarEstado } from "../stores";
     
</script>

<main>

    <h1><button class="rosa"> Olá, Aluno!</button></h1>

    <p class="lirio">Playlist com vídeos para você </p>
        <a href="https://youtube.com/playlist?list=PL-UjvsbvwwyB4xd2REAEjnbBeTJ27_q3a" 
        target="_blank" 
        rel="noopener noreferrer"> <button class="margarida">Playlist</button> 
        </a>
        
    <div>

        <button class="girasol" id="button" on:click={() => trocarEstado("AjudaAlu")}>Materias</button> 
             
    </div>  
     
    <img class="image" src="./src/imagens/índice-removebg-preview.png" />

</main>

<button class="lavanda">
    <VoltarHome/>
</button>