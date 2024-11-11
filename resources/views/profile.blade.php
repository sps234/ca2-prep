<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <h1> Profile Page </h1>

    @if( session('user') )
    <h1> welcome , {{ session('user')}} </h1>
    @else
    <h1> no user found </h1>
    @endif
    <a href="logout"> Logout </a>
</div>
