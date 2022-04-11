
        @extends("layouts.app")
        

                @section('content')

                    @foreach ($stagiaires as $key=>$stagiaire)

                        <h2><a href="/detail/{{ $key }}">{{ $stagiaire }}</a></h2>
                        
                    @endforeach

                @endsection


       

