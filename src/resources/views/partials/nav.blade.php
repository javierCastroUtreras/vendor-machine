<a href="/"> Inicio </a>
@auth
<a href="/shop">Products </a>

<form action="login" method="post">
@method('put')
@csrf
<button>Logout</button>
</form>


@else
<a href="/login"> Login </a>
@endauth
