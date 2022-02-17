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

            <div class="row my-5">
                <h2>all categories</h2>
                <div class="row text-center">
                        @foreach ($categories as $category)
                            <div class="col-2">
                                <a href="#"
                                    class="dropdown-item">{{ $category->name }} 
                                </a>                             
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row text-center mb-5">
                <h2>all posts</h2>
            </div>
            <div class="row text-end ">
                <form class="form-inline my-2 my-lg-0 w-50"  method="POST" action="{{ route('search') }}">
                    @csrf
                    <div class="row" style="width: 200px; text-align:end">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 btn btn-info" type="submit">Search for posts</button>
                    </div>                   
                  </form>
            </div>
            <div class="row my-5">
            @foreach ($posts as $post)
            <div class="col-4">    
                <div class="card " style="width: 18rem;">           
                    <img src="{{ asset('assets/uploads/post/'.$post->image) }}"  style=" width: 140px; height: 100px;object-fit: contain;text-center" class="card-img-top" alt="post">
                        <div class="card-body">
                            <div class="row">
                                <a href="{{ route('front.post',$post->id) }}" class="btn btn-primary card-title">{{$post->title}}</a>
                            </div>
                            {{-- <h5 class="card-title"></h5> --}}
                            <p class="card-text">{{$post->details}}</p>
                            <p class="card-text " style="float: right">Date :{{$post->date}}</p>                          
                        </div>
                </div>            
            </div>
            @endforeach 
        </div>
    </div>    
</body>
</html>