            
          <div class="navbar navbar-default">
            <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="/photogallery/public">Home</a>
            <a class="navbar-brand " href="/photogallery/public/albums/create">Create Album</a>
          

            @if (Auth::check())
            
            <span class="navbar-brand navbar-right" >{{ auth()->user()->name }}</span>
            
            <span class="navbar-brand  navbar-right glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
             <span id="shoppingCart" class="text-success navbar-right"></span>
          
             @else
              <span class="navbar-brand navbar-right" ></span>
            <a class="navbar-brand navbar-right" href="/photogallery/public/login">Log in </a>
            @endif
            <!-- za da se zemi imeto na logiran user mozi i vaka
             Auth::user()->name 
             --> 
          </div>
        </div>
 