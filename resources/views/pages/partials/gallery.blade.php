
@foreach(array_chunk($photos->getcollection()->all(),4) as $row)
    <div class="row">
       @foreach($row as $photo)
          <article class="col-md-3">
          <div class="thumbnail">
              <img src="images/photos/{{ $photo->image }}" alt="{{ $photo->title }}"  class="img-responsive img-rounded" height="230" width="230"/>
                <div class="caption">
                    {{ $photo->description }}
                </div>
          </div>
          </article>
       @endforeach
    </div>
@endforeach

