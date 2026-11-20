/** 
*!NOTE: 
*?1. "$"" -> Define variable
*?2. "." -> join while printing (echo) or string jora dewar jonno use kori
*?3. "->" -> object er vetor dhukte use kori
*?4. "::" -> class theke direct call korte "scope resolution operator" 

*/ 

<?php //* php code eikhan theke start hobe bujhanor jonno eita likhi

//* 1. variable and print

$name = "Amin";

echo "Hi " . $name . "\n"; 
echo "Hi $name\n";

//* 2. array and object
// aray
$skills = ["Java", "React", "Node"];

//object
$project = [
    "title" => "Todo app",
    "stars" => 10
];

echo $project["title"] . "\n";

// foreach loop
foreach ($skills as $skill) {
    echo $skill . "\n";
}

//* 3. function

function greet($name) {
    return "Hello" . $name;
}

echo greet("Al-Amin") . "\n";

//! 4. classes and object [most laravel code lives in classes]

class User {
    public function __construct(public $name) {}
}

$user = new User("Amin");
echo $user->name . "\n"; // here "->" this sign is a object operator

if($project["stars"] >= 50 ) {
    echo "Famous project\n";
} elseif ($project["stars"] >= 10){
    echo "Popular projecrt\n";
} else {
    echo "New project\n";
}

//* 5. scope resolution operator: class theke direct call korte use hoy

class Project {
    public static function create ($title){
        return "Created" . $title;
    }
}

echo Project::create("Portfolio") . "\n";