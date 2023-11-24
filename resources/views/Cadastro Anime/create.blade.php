<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Anime</title>
    <link rel="stylesheet" href="/css/cadastrarani.css">
</head>
<body>

    <div class="box">
        <form action="/Cadastro Anime" method="POST">
        
           @csrf
           <fieldset>
            <legend><b>Cadastro Anime</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome_anime" id="nome_anime" class="inputUser" required>
                <label for="nome_anime" class="labelInput">Nome do Anime</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="nome_autor" id="nome_autor" class="inputUser" required>
                <label for="nome_autor" class="labelInput">Nome do Autor</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="nome_estudio" id="nome_estudio" class="inputUser" required>
                <label for="nome_estudio" class="labelInput">Nome do Estúdio</label>
            </div>
            <br><br>
            <div class="inputBox">
                <label for="gen_anime">Selecione o Genero do Anime</label>
                <select name="gen_anime" id="gen_anime" class="inputUser" size=" " required>
                  
                  <option >Ação</option>
                  <option>Isekai</option>
                  <option>Shounen</option>
                  <option>Comédia</option>
                  <option>Romance</option>
                </select>
              </div>
              <br><br>
            
                <label for="data_lançamento"><b> Data de Lançamento do Anime</b></label>
                <input type="date" name="data_lançamento" id="data_lançamento"  required>
                
            
            <br><br>
            
                <label for="data_termino"> <b>Data de Termino do Anime</b></label>
                <input type="date" name="data_termino" id="data_termino"  >
                
            
            <br><br>
            <div class="inputBox">
                <label for="num_episodios"> <b>Numero de Episódios do Anime</b></label>
                <input type="number" name="num_episodios" id="num_episodios" class="inputUser" required >
                
            </div>
            <br><br>
            <div class="inputBox">
                <label for="sinopse"> <b>Sinopse do Anime</b></label>
                <textarea name="sinopse" id="sinopse"  rows="5" class="inputUser"></textarea>
                
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">

            
           </fieldset>
        </form>
    </div>
    
</body>
</html>