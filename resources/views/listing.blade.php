<h1>{{$heading}}</h1>
@foreach($listings as $listing)
<h2><a href="/list/{{$listing['id']}}">{{$listing['title']}}</h2></a>
<p>{{$listing['description']}}</p>
@endforeach