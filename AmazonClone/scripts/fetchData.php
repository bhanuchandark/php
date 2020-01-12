<?php 
    include_once("dbutils.php");

    //creating a query statement
    $query="select * from gadgets";

    //executing the query and getting the result in a result set
    $resultset=$conn->query($query);

?>