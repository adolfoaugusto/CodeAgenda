<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Agenda</title>

    <!-- Bootstrap
    <link href="css/app.css" rel="stylesheet">
    -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>
                Code.Education <br />
                <small><a href="{{ route('agenda.index') }}"><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</a></small>
                <span class="pull-right">
                    <form class="form-inline" action="{{ route('agenda.busca') }}" method="post">
                        <div class="input-group">
                            <input type="text" name="busca" class="form-control" placeholder="Pesquisar Contato...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                        </div><!-- /input-group -->
                    </form>
                </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach($letras as $letra)
            <a href="{{ route('agenda.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{ $letra }}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="{{ route('pessoa.create') }}" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        @yield('content')
    </div>

</div>


<!-- Include all compiled plugins (below), or include individual files as needed
<script src="js/scripts.js"></script>
-->
<script src="{{ url('js/scripts.js') }}"></script>
</body>
</html>