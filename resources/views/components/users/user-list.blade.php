<nav>
    <ul class="list-group">
        @forelse($users as $user) <!--si aspetterà in input un array -->
            <li class="list-group-item">{{$loop->index+1}} {{$user->name}} </li> <!-- classi del css di bootstrap, contenute nel default blade! -->
        @empty
            <li class="list-group-item">no data found</li>
        @endforelse
    </ul>
</nav>

