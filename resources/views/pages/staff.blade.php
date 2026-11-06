<x-layouts.default>
    <x-slot:title>
        {{$title}}
    </x-slot:title><!-- placeholder in default per il titolo pagina -->
    <div>
        <!-- When there is no desire, all things are at peace. - Laozi -->
        <h1>{{$title}}</h1>

        <x-users.user-list :users="$staff"/> <!-- devo passare il parametro users al componente, prendo staff dal controller e lo rimbalzo, devo prima definire il costruttore -->
        <!-- non ha figli, pertanto va aperto e chiuso subito -->
    </div>
</x-layouts.default>
<x-script text="sei in staff"/>

