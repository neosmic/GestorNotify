<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#cargarnotas').click( function( ) {
        $('#messages').first('p').text('Cargando notas...');
        $('#messages').show();
        $.ajax( {
            'dataType': "json",
            'url': 'http://localhost/gestornotify/gestornotify/backend/',
            'success' : function( data ) {
                $('#messages').hide();
                $('#notasTable > tbody').empty();
                //$("#notasTable").html(data);
                //console.log(data);
                for ( b in data ) {
                    addnota( data[b] );
                }
                $('#notaForm').show();
            }
        } );
    });

    function addnota( nota )
    {
        $('#notasTable > tbody').append('<tr><td>' + nota.titulo + '</td><td>' + nota.contenido + '</td><td></td></tr>');
    }

    $('#notaSave').click( function( ) {
        var newnota = {
            titulo: $('#notaTitle').val(),
            contenido: $('#notaContenidoId').val(),
            id_genero: $('#notaFecha').val(),
        }

        $('#messages').first('p').text('Guardando libro...');
        $('#messages').show();
        $.ajax( {
            'url': window.location.href + (window.location.href.substr(window.location.href.length - 1) == '/' ? '' : '/' ) + 'notas',
            'method': 'POST',
            'data': JSON.stringify( newnota ),
            'success' : function( data ) {
                $('#messages').hide();
                addnota( newnota );
            }
        } );
    });


    </script>
    
</html>