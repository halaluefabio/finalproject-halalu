
<script>
    import { trocarEstado } from "../stores";
       
</script>

<img class="imagemJU" src="./src/imagens/caderno-removebg-preview.png" />



<div>

<h2><button class="lele"> Olá professor, aqui estão algumas dicas para lhe ajudar:  </h2> 
<p class="lili">
    <br>
    <strong class="lolo" >DICA 1:</strong> Você pode adicionar vídeos do youtube clicando no botão "criar playlist", <br>
     esses vídeos apareceram direto no perfil do seu aluno.    
</p>

<p class="lulu" >
    
    <br>
    <strong class="lale" >DICA 2:</strong> Você também pode fazer upload de materiais que você criou ou que estejam em seus arquivos <br>
     esses meteriais apareceram direto no perfil do seu aluno.  
     <br>
     obs: renomei seus arquivos direitinho para facilitar na hora de encontrá-los.   
</p>

<p class="lilo">
    <br>
    <strong class="lolu">DICA 3:</strong> Sempre acompanhe o seu aluno pelo perfil dele.  
</p>
</div>
<img class="imagemju" src="./src/imagens/lapis-removebg-preview.png" />
<div>
     <button  class="butu" id="button" on:click={() => trocarEstado("professor")}> voltar para o perfil </button> 
     
 </div>