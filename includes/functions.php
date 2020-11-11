<?php
    // $result will store the database request results so that we can encode and return them to index.php
    $result = array();

    function getAllUsers($conn) {
        $query = "SELECT * FROM myfavouritethings";
    
        $runQuery = $conn->query($query); //havent done anything with it
    
        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        } // this grabs the data and shows it
    
        // return $result;
        //var_dump($result);
        echo(json_encode($result));
    }

// get a specific user 

    function getSingleUser($conn, $id) {
        $query = "SELECT * FROM myfavouritethings WHERE id=" . $id . "";

        $runQuery = $conn->query($query); //havent done anything with it

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        } // this grabs the data and shows it

        echo(json_encode($result));
    }