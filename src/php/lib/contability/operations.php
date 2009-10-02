<?php

require "../dati.h";

class operations
{
    function add( $account, $import, $user, $to, $cause, $category )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "INSERT INTO operations ( ID, dati, user, import, account, person, cause, category ) VALUES ( '', " . dati->get() . ", $user, $import, $account, $to, $cause, $category );";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function view( $id )
    {}

//    function list( $account, $since, $to )
//    {}
}

?>


