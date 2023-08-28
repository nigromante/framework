<?php
namespace Nigromante\Framework;


class Session {

    public static function Start( $config ) {

    
        // use Framework\SessionManager;

        // $handler_session = new SessionManager( $config['session'] , Functions::getClientIp() );
        // session_set_save_handler(
        //     [$handler_session, 'open'],
        //     [$handler_session, 'close'],
        //     [$handler_session, 'read'],
        //     [$handler_session, 'write'],
        //     [$handler_session, 'destroy'],
        //     [$handler_session, 'gc']
        // );



        session_name($config['session']['SESSION_KEY']);
        session_start();
        session_gc();
    }

} 

