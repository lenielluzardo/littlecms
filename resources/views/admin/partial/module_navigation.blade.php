<nav id="admin-navigation" class="admin-navigation">
         
    <a href="{{url('/')}}"> Web </a>
    <a href="{{url('/admin')}}"> Admin </a> 
    <form method="POST" action="{{route('logout')}}">
        {{ csrf_field() }}
        <button >Logout </button> 
    </form>

    @foreach($modules as $module)

        <a href="{{ route('admin.module.index', strtolower($module->name)) }}">
            <div class="module-card"> {{ $module->name }} </div>           
        </a>

    @endforeach

</nav>