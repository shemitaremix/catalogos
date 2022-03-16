<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
    body{background:#59ABE3;margin:0}
    .form{width:340px;
        height:440px;
        background:#e6e6e6;
        border-radius:8px;
        box-shadow:0 0 40px -10px #000;
        margin:calc(50vh - 220px) auto;
        padding:20px 30px;
        max-width:calc(100vw - 40px);
        box-sizing:border-box;
        font-family:'Montserrat',sans-serif;
        position:relative}
    h2{margin:10px 0;
        padding-bottom:10px;
        width:180px;
        color:#78788c;
        border-bottom:3px solid #78788c}
    input{width:100%
        padding:10px;
        box-sizing:border-box;
        background:none;
        outline:none;
        resize:none;
        border:0;
        font-family:'Montserrat',sans-serif;
        transition:all .3s;
        border-bottom:2px solid #bebed2}
    input:focus{border-bottom:2px solid #78788c}
    p:before{content:attr(type);
        display:block;
        margin:28px 0 0;
        font-size:14px;
        color:#5a5a5a}
    button{float:right;
        padding:8px 12px;
        margin:8px 0 0;
        font-family:'Montserrat',sans-serif;
        border:2px solid #78788c;
        background:0;
        color:#5a5a6e;
        cursor:pointer;
        transition:all .3s}
    button:hover{background:#78788c;
        color:#fff}
    div{content:'Hi';
        position:absolute;
        bottom:-15px;
        right:-20px;
        background:#50505a;
        color:#fff;
        width:320px;
        padding:16px 4px 16px 0;
        border-radius:6px;
        font-size:13px;
        box-shadow:10px 10px 40px -14px #000}
    span{margin:0 5px 0 15px}
    </style>
</head>
<
<body>
    <form class="form">
        <h2>CodigosPostales</h2>
        <input type="text" name="codigo" id="search">
        <input type="button" id="action-button" value="BUSCAR">
        <h3>Asentamiento(s)</h3>
        <select id="asentamiento" style="margin-top: 10%;">
            <option value="">Seleccione una opcion</option>
        </select>
        <h3>Municipio(s)</h3>
        <select id="municipio" style="margin-top: 10%;">
            <option value="">Seleccione una opcion</option>
        </select>
        <br>

    </form>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script type="text/javascript">


    $(document).ready(function(){
        $('#action-button').click(function(){
            let codigo = $('#search').val();
            // -- Ajax a show
            $.ajax({
                url: '{{route('codigos.show')}}'+'/'+codigo,
                type: 'GET',
                dataType: 'json',
                success: function(response){
                    let codigos = response.codigos;
                    // -- Vaciar select
                    $('#asentamiento').empty();
                    // -- Agregar opciones
                    for(let i = 0; i < codigos.length; i++){
                        $('#asentamiento').append('<option value="'+codigos[i].asentamiento+'">'+codigos[i].asentamiento+'</option>');
                    }
                }
            });
        });

        $("#asentamiento").change(function(){
            let codigo = $('#search').val();
            let asentamiento = $('#asentamiento').val();
            alert(asentamiento);
            //-- Ajax a show
            $.ajax({
                url: '{{route('codigos.asentamientos')}}'+'/'+codigo+'/'+asentamiento,
                type: 'GET',
                dataType: 'json',
                success: function(response){
                    let codigos = response.codigos;
                    console.log(codigos);
                    // -- Vaciar select
                    $('#municipio').empty();
                    // -- Agregar opciones
                    for(let i = 0; i < codigos.length; i++){
                        $('#municipio').append('<option value="'+codigos[i].ciudad+'">'+codigos[i].ciudad+'</option>');
                    }
                }
            });
        });
    });
</script>
</html>
