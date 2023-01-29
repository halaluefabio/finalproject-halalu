<script>
    import { trocarEstado } from "../stores";
       
</script>


<h1>Ajuda</h1>

<h2>Ola professor, aqui estao algumas dicas para lhe ajudar: </h2> 
<p>
    <br>
    <strong>DICA 1:</strong> Voce pode adicionar videos do youtube clicando no botao "criar playlist", <br>
     esses videos apareceram direto no perfil do seu aluno.     
</p>

<p>
    <br>
    <strong>DICA 2:</strong> Voce tambem pode fazer upload de materiais que voce criou ou que estejam em seus arquivos <br>
     esses meteriais tambem apareceram direto no perfil do seu aluno.  
     <br>
     obs: renomei seus arquivos direitinho para bfacilitar na hora de encontra-los.   
</p>

<p>
    <br>
    <strong>DICA 3:</strong> Sempre acompanhe o seu aluno pelo perfil dele.  
</p>


<div>
    <!-- <button id="button" on:click={() => iniciarArquivos()}> ajuda </button> -->
     <button id="button" on:click={() => trocarEstado("professor")}> voltar para o perfil </button> 
     
 </div>



 


