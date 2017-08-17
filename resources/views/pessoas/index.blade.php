<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
          @foreach($pessoas as $pessoa)
            Nome: {{$pessoa->nome}}
            <br/>
            Telefone: 
            @foreach($pessoa->telefone as $telefones)
              {{$telefones->tel_numero}}
            @endforeach
          @endforeach
    </body>
</html>
