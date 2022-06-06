<!doctype html>
<html>
    <head>
        <title>Factory Design Pattern Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Factory Design Pattern Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
            <?php
                spl_autoload_register(function ($class_name){
                    include "factoryDesignPattern/" . $class_name . ".php";
                });

                
                $db = new Database();
                $db->setDriver("sqlite");
                $db->connect("host", "user", "db", "pass");

                // $db = new Database();
                // $db->setDriver("mysql");
                // $db->connect("host", "user", "db", "pass");


            ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>

