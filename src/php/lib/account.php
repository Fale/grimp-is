<?php

require "../config.php";

class account
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
        $query = "INSERT INTO account ( ID, name, type ) VALUES ( '', $name, $type );";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

/*    function list()
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "SELECT * FROM account";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        $blurb = mysql_fetch_array( $qresult ) or die( mysql_error() );
        print( "$blurb[0]" ); //To be checked
    }
*/
    function changeName( $id, $newName )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "UPDATE account SET name=$newName WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function changeType( $id, $newType )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "UPDATE account SET type=$newType WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

/*    function delete( $id )
    {
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "DELETE * FROM account WHERE ID=$id;";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }
*/
}

?>

 
