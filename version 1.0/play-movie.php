<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML-PHP Form</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="http://bleepinghost.online/uploads/nemo.jpeg">
    
    
</head>
<body>
    
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-1">
        
        <div class="container-fluid">
            <a class="navbar-brand lead fw-bold nav-title fs-3" href="#">The Clever Dev</a>    
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center nav-text-size" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-underline" aria-current="page" href="http://bleepinghost.online/">Home</a>
                    </li>
                </ul>
            </div>
            
        </div>
        
    </nav>
    






    <?php

    $raw_file = $_GET['movie'];
    $movie = str_replace(array('"', "'"), '', $raw_file);
    $file = pathinfo($movie);
    $no_ext = $file['filename'];

    





    ?>
    
    
    
    
    
    
    
    
    <div class=" bg-dark" style="padding-bottom: 500px;">   
        
        <div class="container" >
            
            <div class="row justify-content-center"></div>
            
            <div class="mt-5 bg-dark text-white p-3 fw-bold"> <span style="color: red;">Now Playing:</span> <?php echo $no_ext; ?></div>
            
            
            <div class="text-center">
            
                <video class="img-fluid " controls>
                    
                    <source src="<?php echo $movie; ?> ">
                    
                    <track src=" <?php echo "movies/" . $no_ext . '.vtt' ?> " srclang="en" kind="subtitles" label="English">
                
                </video>
            </div>
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Footer Sect -->
    <footer id="footer" style="margin-top: 1px;">
        
        <div class="container-fluid bg-dark p-4">
            
            <div class="container text-center">
                
                <div class="row justify-content-center">
                    
                    
                    <!-- Site Navigation -->
                    <div class="col-12 text-center">
                        
                        <h2 class="mb-5 text-white fs-3 fw-bold">Site Navigation</h2>
                        <a href="http://bleepinghost.online/" class="fs-5 text-white">Back to Home</a><br>
                        
                        
                    </div>
                    
                    
                    <div class="col-12 text-white text-center" style="margin-top: 100px;">
                        
                        <h2 class="fw-bold">The Clever Dev</h2>
                        <p class="lead">Copyright &copy; 2023. Designed by Jess Bugs</p>
                        
                    </div>
                    
                    
                    
                    
                </div> <!-- row -->
                
                
                
            </div>
            
        </div>
        
        
    </footer>
    
    
    
    
    
    
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>