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

    <main class="container">
    
        <div class="text-white text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera password sicura</h2>
        </div>  
        
        <div class="bg-white p-3 rounded d-flex justify-content-between">

            <div class="left">
                <p class="mb-3">Lunghezza password:</p>
                <p>Consenti ripetizioni di uno o più caratteri:</p>
                <div class="buttons">
                    <button class="btn-primary btn">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </div>

            <div class="right">

                <input type="number" class="form-control mb-3" id="length" name="length">

                <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio" value="1" checked>

                <label class="form-check-label" for="repeatRadio">
                    Si
                </label>

            </div>

        </div>

    </main>



    </body>
    </html>