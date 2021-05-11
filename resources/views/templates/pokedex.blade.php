<?

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitis Pokedex</title>

    {{ HTML::style('bootstrap4/bootstrap-4.3.1.css') }}
    {{ HTML::style('datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ HTML::style('datatables-responsive/css/responsive.bootstrap4.min.css') }}

    {{ HTML::script('jquery-3.4.1.js') }}
    {{ HTML::script('bootstrap4/bootstrap-4.3.1.min.js') }}
    {{ HTML::script('datatables/jquery.dataTables.min.js') }}
    {{ HTML::script('datatables-bs4/js/dataTables.bootstrap4.min.js') }}
    {{ HTML::script('datatables-responsive/js/dataTables.responsive.min.js') }}
    {{ HTML::script('datatables-responsive/js/responsive.bootstrap4.min.js') }}
    
    {{ HTML::script('js/pokedex.js') }}
    <style>
        .header {
            
            margin: 0;
            margin-top:-12px;
            background: #0c517b;
            color: #fff;
        }
        .logo2{
            display:inline-block;
        }
    </style>
</head>
<body>


    <div id="wrapper" >

        <div id="page-wrapper" >
        
            <div class="header">
                <div class="container-fluid" style="max-width:960px;" >
                    <div class="row">
                        <div class="col-4">
                            {{ HTML::image('img/logo-bitis.png', 'alt text', array('class' => 'class-name')) }}

                        </div>

                        <div class="col-8 ">
                            <H3 STYLE="margin-top:10px">Pokédex</H3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid" style="max-width:960px; background-color: #FFF">	
                @yield('content')                                    
            </div>
                           

            

        </div>
    </div>
    
</body>
</html>