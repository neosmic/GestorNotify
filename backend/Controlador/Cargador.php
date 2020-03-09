<?php  namespace Controlador;

class Cargador{
    private $accion;
    private $user;
    private $pswd;

    public function __construct(){
        $resourceId = 

        $method = $_SERVER['REQUEST_METHOD'];

    switch ( strtoupper( $method ) ) {
        case 'GET':

            if ( !empty( $resourceId ) ) {
                if ( array_key_exists( $resourceId, $books ) ) {
                    echo json_encode(
                        $books[ $resourceId ]
                    );
                } else {
                    header( 'Status-Code: 404' );
    
                    echo json_encode(
                        [
                            'error' => 'Book '.$resourceId.' not found :(',
                        ]
                    );
                }
            } else {
                echo json_encode(
                    $books
                );
            }

        break;
        case 'POST':

            
        break;
        case 'PUT':
            
        break;
        case 'DELETE':
            
        break;


    }




}
}

?>