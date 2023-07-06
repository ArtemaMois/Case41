<?php  require "../Classes/BinaryTree.php";
    require "answer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/answer.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@700&family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="navigation">
            <div class="navigation__abstract"><p>PHP</p></div>
            <div class="navigation__theme"><p>< CONTENT ></p></div>
            <div class="navigation__logo"><img src="../images/ele.png" alt=""></div>
        </div>
    </header>
    <div class="main">
        <?php
        
        $tree = new BinaryTree();
        
        foreach($arr as $key => $value){
            $tree->Insert($value['title'], $value['description'], $value['date']);

        }
        // function debug($value)
        // {
        //     echo '<pre>';
        //     var_dump($value);
        //     echo '</pre>';
        // }

        // debug($arr);


        // if () {
        //     $title = $_POST['title'];
        //     $description = $_POST['description'];
        //     $date = $_POST['date'];
        //     $tree->Insert($title, $description, $date);
        // } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //     if ($tree->getroot() == NULL){
        //         die ("Дерево пустое!"."<br>");
        //     }
        $tree->Show($tree->getroot());
        // }
        ?>
    </div>
</body>

</html>
<?php
$arr[] = [
        'title' => 'Behavioral',
        'description' => 'Some text for the first pattern',
        'date' => '2003-09-13'
    ];
$arr[] = [
        'title' => 'Creational',
        'description' => 'There is must be text about second pattern',
        'date' => '1999-04-28'
    ];
$arr[] = [
        'title' => 'Structural',
        'description' => 'Patterns from site habr.com',
        'date' => '2013-12-09'
    ];
$arr[] = [
        'title' => 'Memento',
        'description' => 'Chain of responsibility',
        'date' => '2009-02-03'
    ];
$arr[] = [
        'title' => 'Observer',
        'description' => 'Determine independence between objects',
        'date' => '2000-10-15'];
$arr[] = [
        'title' => 'State',
        'description' => 'Allow object change  self behavoir',
        'date' => '2018-03-19'
    ];
$arr[] = [
        'title' => 'Interpreter',
        'description' => 'Determine representation his grammatics',
        'date' => '2001-10-12'
    ];