<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="row row d-flex justify-content-center line">    
            <div class=" col-md-6 background_form">
                <div class=" form">    
                    <h2>Ajout des notes</h2>
                    <form method="post" action="result.php">
                        <div>
                            <div>
                                <p>Question 1 :</p>
                                <input type="radio" name="question1" value="0" id="0" required/> 
                                <label for="0">0</label>
                                <br />
                                <input type="radio" name="question1" value="1" id="1" required/> 
                                <label for="1">1</label>
                                <p>Question 2 :</p>
                                <input type="radio" name="question2" value="0" id="0" required/> 
                                <label for="0">0</label>
                                <br />
                                <input type="radio" name="question2" value="1" id="1" required/> 
                                <label for="1">1</label>
                                <p>Question 3 :</p>
                                <input type="radio" name="question3" value="0" id="0" required/> 
                                <label for="0">0</label>
                                <br />
                                <input type="radio" name="question3" value="1" id="1" required/> 
                                <label for="1">1</label>
                                <p>Question 4 :</p>
                                <input type="radio" name="question4" value="0" id="0" required/> 
                                <label for="0">0</label>
                                <br />
                                <input type="radio" name="question4" value="1" id="1" required/> 
                                <label for="1">1</label>
                            </div>                            
                            <button type="submit" name="note" class="btn btn-dark">Secondary</button>

                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>