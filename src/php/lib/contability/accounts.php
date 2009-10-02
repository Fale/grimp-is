<?php

require "../../config.php";

class accounts
{
    /* Types:
        - 0 = virtual
        - 1 = cache
        - 2 = credit
        - 3 = debit

    */

    function add( $name, $type )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "INSERT INTO accounts ( ID, name, type ) VALUES ( '', $name, $type );";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function view( $id )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "SELECT * FROM accounts WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        $blurb = mysql_fetch_array( $qresult ) or die( mysql_error() );
        return $blurb;
    }

    function listAll()
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "SELECT * FROM accounts;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        $blurb = mysql_fetch_array( $qresult ) or die( mysql_error() );
        return $blurb;
    }

    function changeName( $id, $newName )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "UPDATE accounts SET name=$newName WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function changeType( $id, $newType )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "UPDATE accounts SET type=$newType WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function remove( $id )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "DELETE * FROM accounts WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }
}

?>

 
