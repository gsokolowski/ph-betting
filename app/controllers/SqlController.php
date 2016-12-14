<?php


use Phalcon\Di\FactoryDefault;

class SqlController extends ControllerBase
{

    public function indexAction()
    {


        $connection = $di = $this->getDI()->getDb();
        $sql = "SELECT id, type, name FROM categories";


        $result = $connection->fetchOne( $sql );

        var_dump($result);
        echo '<br />';


        $robots = $connection->fetchAll($sql);
        foreach ($robots as $robot) {
            echo $robot["name"];
        }


        echo '<br />';


        $result = $connection->query($sql);

        while ($category = $result->fetch()) {
            echo $category["name"];
        }

        echo '<br />';


        $result = $connection->query($sql);

        $result->setFetchMode(Phalcon\Db::FETCH_NUM);

        while ($category = $result->fetch() ) {
            echo $category[0];
        }


        echo '<br />';


        $result = $connection->query($sql);

        // Count the resultset
        echo $result->numRows();

        echo '<br />';


        $sql    = "SELECT * FROM categories WHERE name = ? ORDER BY name";
        $result = $connection->query(
            $sql,
            [
                "English FA Cup",
            ]
        );

        while ($category = $result->fetch() ) {
            var_dump($category);
        }

        echo $result->numRows();


        echo '<br />';



        ////////////////////////////////////////////
        // INSERT
        ////////////////////////////////////////////

        // With placeholders
        $sql     = "INSERT INTO categories (type, name, fr_id, parent_id) VALUES (?, ?, ?, ?)";
        $success = $connection->execute(
            $sql,
            [
                "markets",
                "Dumbarton v Falkirk - Double Result",
                "435065226",
                "5"
            ]
        );

        var_dump($success);

        $sql     = "INSERT INTO categories(type, name) VALUES ('Astro Boy', 1952)";

        $connection->execute($sql);




        ////////////////////////////////////////////
        // MODEL
        ////////////////////////////////////////////



        $parameters["order"] = "id";

        $categories = Categories::find($parameters);


        foreach ($categories as $category) {
            echo $category->name.'<br />';
        }

        die('jjjj');



    }

}

