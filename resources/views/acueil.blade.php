@extends('index')

@section('acueil')

        <div class="acueil">
              <header>
                  <a href="">contact us</a>
              </header>

              <main>

                  @if (isset($headers))
                      @foreach ( $headers as $header )
                      <div class="importantNews">
                        <div class="contenaireImg">
                            <img src="{{ Storage::url($header->image->path) }}" alt="">
                         </div>
                        <p class="titre" >{{ $header->title }}</p>
                        <p class="desc">{{ $header->text }}</p>
                    </div>
                      @endforeach
                  @endif

                  @if (isset($nexts))
                  @foreach ( $nexts as $next)
                  <div class="nextMatch">
                    <div class="logo">
                         <div class="circleWac">
                             <!--<img src="" alt="">-->
                           </div>
                        <p>VS</p>
                        <div class="circleAdversaire">
                            <!-- <img src="{ Storage::url($next->image->path) }" alt=""> -->
                           </div>
                    </div>
                    <p class="nextMatch-text">nextmatch</p>
                    <p class="date">{{ $next->date }}</p>
                </div>
                  @endforeach
                  @endif
                  
              </main>
          </div>

@endsection

@section('all')
    <div class="all">
        <div class="news">
            @if (isset($news))
              @foreach ($news as $new )
               <!-- start of post section -->
                 <div class="post">
                       <div class="postImg">
                           <img src="{{ Storage::url($new->image->path) }}" alt="">
                          </div>
                     <div class="postDesc">
                          <p class="postTitle">{{ $new->title }}</p>
                          <div class="postDesc-2">
                             <p>{{ $new->text}}</p>
                           </div>
                       </div>
                   </div>
                <!-- end of p section -->
              @endforeach
            @endif
        </div>

        <div class="info">
            @if (isset($infos))
            @foreach ( $infos as $info )
            <div class="point">
                <div class="fixed">
                    <p>point:</p>
                    <p>{{ $info->point}}</p>
                </div>
            </div>
            <div class="classement">
                <div class="fixed">
                    <p>classement:</p>
                    <p>{{ $info->classement}}  </p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection

@section('contact')
    <div class="contact">
        <header>
            <p>contact us</p>
        </header>
        <main>
            <form method="post" action="{{ route('contact') }}">
                @csrf
                <div class="email">
                    <p>email:</p>
                    <input type="email" name="email">
               </div>
               <div class="message">
                     <p>message:</p>
                     <textarea name="message"></textarea>
               </div>
               <div class="buton">
                   <button>send</button>
               </div>
            </form>
        </main>
    </div>
@endsection