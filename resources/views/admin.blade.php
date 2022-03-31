<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Wydad Athletic Club | ADMIN</title>
</head>
<body>
    <div class="admin">
        <header>
            <p>admin</p>
        </header>
        <main>
            <div class="crnews">
                <form  method="post" action="{{ route('createNews') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="title">
                        <p>title:</p>
                        <input type="text" name="title">
                    </div>
                      <div class="desc">
                           <p>text:</p>
                           <textarea name="text" cols="30" rows="10"></textarea> 
                    </div> 
                       <div class="butt">
                           <div class="image">
                              <input  type="file" id="image" name="image" accept="image/*">
                              <label for="image">image</label>
                           </div>
                           <button>create</button>
                       </div> 
                </form>
            </div>
            <div class="all-News">
                <p>all news:</p>
                <div class="box">
                    @if (isset($news))
                        @foreach ($news as $new)
                            <p>{{$new->title}}</p>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="crinfo">
                <form method="post" action="{{ route('info') }}">
                    @csrf
                     <div class="pnt">
                         <p>point:</p>
                         <input type="number" name="point">
                     </div>
                     <div class="clas">
                         <p>clasement:</p>
                         <input type="number" name="clasement">
                     </div>
                     <button>save</button>
                </form>
            </div>
        </main>
    </div>
    <div class="admin2">
        <div class="crnews">
            <form  method="post" action="{{ route('createInpNews') }}" enctype="multipart/form-data" >
                @csrf
                <div class="title">
                    <p>title:</p>
                    <input type="text" name="title">
                </div>
                  <div class="desc">
                       <p>text:</p>
                       <textarea name="text" cols="30" rows="10"></textarea> 
                </div> 
                   <div class="butt">
                       <div class="image">
                          <input  type="file" id="imageheader" name="imageheader" accept="image/*">
                          <label for="imageheader">image</label>
                       </div>
                       <button>create</button>
                   </div> 
            </form>
        </div>
        <div class="nextmatch">
            <form  method="post" action="{{ route('nextMatch') }}" enctype="multipart/form-data" >
                @csrf
                <div class="title">
                    <p>date :</p>
                    <input type="text" name="date">
                </div> 
                <div class="butt">
                    <div class="image">
                       <input  type="file" id="logo" name="logo" accept="image/*">
                       <label for="logo">logo d'advairssaires</label>
                    </div>
                    <button>create</button>
                </div> 
            </form>
        </div>
    </div>
</body>
</html>