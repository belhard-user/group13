<?php
require_once "vendor/autoload.php";

class Foo
{
    public function bar($id, $name, $email)
    {
        return "$id $name $email";
    }
}


try{
    $users = [];
    $pdo = new PDO('mysql:dbname=study;host=localhost', 'root', '');
    // $pdo = new PDO('sqlite:test.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    $sqls = [
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
        'INSERT INTO users (name, email, age) VALUES (?,?,?)',
    ];
    try {
        $pdo->beginTransaction();
        foreach ($sqls as $sql) {

            $stmt = $pdo->prepare($sql);
            $random = mt_rand(100, 1000);
            $stmt->execute([
                'Neo_' . $random,
                'neo_' . $random . '@gmail.com',
                $random
            ]);
        }
        $pdo->commit();
    }catch(PDOException $e){
        $pdo->rollBack();
    }


    /*$sql = "SELECT name, email, age FROM users WHERE name like :name";
    $stmt = $pdo->prepare($sql);
    $r = $stmt->execute(['name' => '%n%']);

    dump($stmt->fetchAll(PDO::FETCH_CLASS, 'Foo'));*/

    /*$name = 'Tom Smith';
    $email = strtolower($name) . '@gmail.com';
    $age = 5;*/
    // $name = $pdo->quote($name);
    // $email = $pdo->quote($email);

    /*$sql = "INSERT INTO users (name, email, age) VALUES (:name, :email, :age)";
    $stmt = $pdo->prepare($sql);*/
    /*$stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam('age', $age, PDO::PARAM_INT);*/
    /*$r = $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':age' => $age
    ]);*/

    /*$sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $r = $stmt->execute([$name, $email]);*/
    // dump($r);
    /*$pdo->exec($sql);*/
    /*$sql = "SELECT * FROM users";
    $r = $pdo->query($sql);*/

    // dump($r->fetchAll(PDO::FETCH_OBJ));

    /*while($row = $r->fetchObject('User')){
        $users[] = $row;
    }*/
    // $users = $r->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
    // $admin = new User('admin', 'admin@gmail.com');
    /*$users = $r->fetchAll(PDO::FETCH_FUNC, function($id, $name, $email){
        return "$id @@@ $name @@@ $email";
    });*/



}catch (PDOException $e){
    echo $e->getMessage();
}