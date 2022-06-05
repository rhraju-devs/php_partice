
<!doctype html>
<html>
<head>
 <title>Destructor Example</title>
 <style>
  body
    {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
    <h2><?php echo "Destructor Method Partice"; ?></h2>
 </section> 

 <section class="maincontent">
   <?php
    class Person{
        public $personName;
        public $personAge;
        public $id;
        public function __construct($name, $age)
        {
            $this->personName = $name;
            $this->personAge = $age;
        }
        public function setId($id){
            $this->id = $id;
        }
        // public function getName(){
        //     echo "Person name is : {$this->personName}<br>";
        // }
        // public function getAge(){
        //     echo "Person age is : {$this->personAge}<br>";
        // }
        function __destruct()
        {
            if(!empty($id)){
                // echo "Your Id number is {$this->id}<br>";
                echo "Saving Data";
            }
        }

    }

    $newPerson = new Person("Md. Rajib Hossain", 26);
    // $newPerson->getName();
    // $newPerson->getAge();
    $newPerson->setId(12);
    unset($newPerson);

   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>