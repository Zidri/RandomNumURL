<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/046dd30d2f.js" crossorigin="anonymous"></script>
    <title>Random Number URL</title>

    <?php
        //get URL from form or use default

        $URL = "https://www.printables.com/model/";
        
        //check if base URL leads to page
        $page_headers = @get_headers($endURL);
        if(!$page_headers || $page_headers[0] !== 'HTTP/1.1 404 Not Found') {

            $exists = true;

            //random number
            $randNum = rand(1,10000000);

            //put number at end of URL
            $endURL = $URL + $randNum;

            //check if random URL leads to page
            $page_headers = @get_headers($endURL);
            if(!$page_headers || $page_headers[0] == 'HTTP/1.1 404 Not Found') {
                $exists = false;
                
                //new random number
            }
            else {
                $exists = true;

                //display URL
            }
        

        

        echo('
        </head>
        
        <body>    
        
            <div class="header">
                <h1>Random Number URL</h1><br>
            </div>
            <div class="container">
        
        
                <div class="URLDisplay">                   
        
                    <div class="URLWarning" id="URLWarning"></div>
                    <form class="URLForm" name="URLForm" method="post" action="index.php">
                        <input type="text" id="URLbase" name="URLbase">
                        <button type="button" class="btn" id="URLBtn">Load URL</button>
                    </form>
        
                </div>
            </div>
        </body>');
        }
        
        else{

            $exists = false;
            
            //that url doesn't exist


            echo('</head>
        
            <body>    
            
                <div class="header">
                    <h1>Random Number URL</h1><br>
                </div>
                <div class="container">
            
            
                    <div class="URLDisplay">                   
            
                        <div class="URLWarning" id="URLWarning"></div>
                        <form class="URLForm" name="URLForm" method="post" action="index.php">
                            <input type="text" id="URLbase" name="URLbase">
                            <button type="button" class="btn" id="URLBtn">Load URL</button>
                        </form>
            
                    </div>
                </div>
            </body>'');
        }
        
        ?>

</html>