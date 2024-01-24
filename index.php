  
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pass Gen</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>


    
        <div class="text-white text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera password sicura</h2>
        </div>  

        <main class="container bg-white"> 
            
            
            <from class="row">

                <div class="col-7 p-4">
                    <label class="d-block mb-3" for="length">Lunghezza password:</label>
                    <label for="repeatRadio" class="mb-5">Consenti ripetizioni di uno o piu' caratteri:</label>
                    <div class="buttons mt-5 pt-5 mb-4">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </div>

                <div class="col-5 p-3">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="length" name="length">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat" id="repeat" value="1" checked>
                        <label class="form-check-label" for="repeat">
                            Si
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="repeat" id="repeat" value="0">
                        <label class="form-check-label" for="repeat">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="lettere">
                        <label class="form-check-label" for="flexCheckDefault" >
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="numeri">
                        <label class="form-check-label" for="flexCheckChecked" >
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="simboli">
                        <label class="form-check-label" for="flexCheckChecked">
                            Simboli
                        </label>
                    </div>
                </div>


            </from>

        </main>



    </body>
    </html>