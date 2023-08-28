<?php

namespace Nigromante\Framework;


class Application
{

    public $config ;   

    public function __construct( $config ) {
        $this->config = $config ; 
    }


    public function run() {

        try {

            Dump::getInstance()->dump_group( 'Application', 'Application' ) ; 

            Dump::getInstance()->dumpsection( 'Guitar' , 'Name' ) ;
    
            Dump::getInstance()->dump_group( 'Routes', 'Routes' ) ; 
            Dump::getInstance()->dumpsection( Router::list() , 'All Routes' ) ;
    
            $uri = $_SERVER["REQUEST_URI"] ; 
            $method = $_SERVER["REQUEST_METHOD"] ; 

            $workRoute = Router::evalRequest( $uri, $method );

            Dump::getInstance()->dump_group( 'Route', 'Route' ) ; 
            Dump::getInstance()->dumpsection( $workRoute , 'workRoute' ) ;

            $response = Router::dispatch($workRoute, $uri, $method );

            echo $response;
            
        } catch ( \Exception $e) {

            FileLog::Error( $e->getMessage() );

            header( sprintf( "HTTP/1.0 500 Internal Server Error: %s", $e->getMessage()));
        }

    }

}
