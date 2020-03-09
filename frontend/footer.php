<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#cargarnotas').click( function( ) {
        $('#messages').first('p').text('Cargando notas...');
        $('#messages').show();
        $.ajax( {
            'dataType': "json",
            'url': 'http://localhost/gestornotify/gestornotify/backend/index.php?user_id='+$("#user_id").html()+'&token='+$("#dueToken").html()+'',
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

    $('#nuevaNota').click( function( ) {
        var newnota = {
            titulo: $('#notaTitle').val(),
            contenido: $('#notaContenido').val(),
            categoria: $('#notaCategoria').val(),
            usuario_id: $("#user_id").html(),
            token: $("#dueToken").html()
        }

        $('#messages').first('p').text('Guardando Nota...');
        $('#messages').show();
        console.log(newnota);
        $.ajax( {
            'url': 'http://localhost/gestornotify/gestornotify/backend/',
            'method': 'POST',
            'data': newnota,
            'success' : function( data ) {
                console.log(data);
                var shower = JSON.stringify( newnota );
                $('#messages').hide();
                addnota( newnota );
            }
        } );
    });


    </script>
    
</html>