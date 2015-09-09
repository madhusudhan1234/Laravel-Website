
<div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item"><i class="fa fa-newspaper-o  alert-success"></i> Student's Message</li>
        @foreach($student_message as $message)
        <li class="list-group-item">

            <div class="row">

                <div class="col-md-12" >
                    <div class="pull-left padding-right-bottom">
                        <a href="#"><img  class=" img-thumbnail" height="70px" width="70px" src="images/student_message/{{$message->student_image}}"/></a>
                    </div>
                    <div>
                        <b>{{$message->student_name}}</b>
                        <h6 class="dim-black"> {{$message->message}}</h6>
                        <p class="blog-timestamps">{{$message->published_at->diffforHumans()}}</p>
                    </div>
                </div>
            </div>

        </li>
        @endforeach
    </ul>
</div>