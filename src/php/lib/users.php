<?php

class users
{

    function add( $username, $password )
    {
        $password = md5( $password );
        $connession = mysql_connect( $db_host, $db_user ) or die( "Unable to open database" );
        mysql_select_db( $db_db ) or die( "Unable to access database" );
        $query = "INSERT INTO users ( ID, username, password ) VALUES ( '', $username, $password );";
        $qresult = mysql_query( $query ) or die( mysql_error() );
        return ( $qresult );
    }

    function login( $user, $pass )
    {
        $con = mysql_connect( $db_host, $db_user, $db_password );
        if ( !$con )
            die( 'Could not connect: ' . mysql_error() );

        mysql_select_db( $db_name, $con );
        $result = mysql_query( "SELECT ID, password FROM users WHERE username ='$_POST['posted_username']'" );
        $row = mysql_fetch_array( $result )
        session_start();

        if( $row['password'] == md5( $pass ) )
        {
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['user'] = $_POST['posted_username'];
            setcookie( "sav_user", $cok, time() + 31536000 );
            print ( 'Redirect in corso' );
            header( "Location: index.php" );
        }
    }

    function logout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        if( IsSet( $_COOKIE['sav_user'] ) )
            setcookie( "sav_user", $cok, time() - 31536000 );
        header( "Location: index.php" );
        exit;
    }
}

?>
