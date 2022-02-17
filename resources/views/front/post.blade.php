<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <div class="container">
        <div class="row mb-5">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
        </div>
        <div class="row mt-5">
            <div class="row text-center mb-5">
                <h5 class="">title :{{$post->title}}</h5>
            </div>
            
            <div class="col-4">    
                <div class="card " style="width: 18rem;">                
                    <img src="{{ asset('assets/uploads/post/'.$post->image) }}"  style=" width: 140px; height: 100px;object-fit: contain;text-center" class="card-img-top" alt="post">
                        <div class="card-body">
                            {{-- <h5 class="card-title">title :{{$post->title}}</h5> --}}
                            <p class="card-text">Details :{{$post->details}}</p>
                            <p class="card-text " style="float: right">Date :{{$post->date}}</p>
                
                        </div>
                </div>
                 
            </div>
            
        </div>

    </div>
    
</body>
</html>