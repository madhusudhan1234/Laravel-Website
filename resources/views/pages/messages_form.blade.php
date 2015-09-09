<!--<div class="container">
    <div class="row">
    <div class="col-md-4">-->
        <div class="panel panel-default plane-default">
            <div class="panel-heading">
                <h4 class="panel-title">Send Us Message</h4>
            </div>
            <div class="panel-body">
                @include('partials/flash_message')
                @include('errors/list')
                <!--
                                               <form method="POST" action="http://localhost:8000/messages" accept-charset="UTF-8" class="form-horizontal">
                                                   <input name="_token" type="hidden" value="qNaz5x6aPoskoGi8yz2l1FdBqofKvsvjzbPnN5ya">-->
                {!! Form::open(['url' => 'messages','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    <!--<label for="first_name" class="col-sm-2 control-label">First Name *</label>-->
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name*">
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="last_name" class="col-sm-2 control-label">Last Name *</label>-->
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name*">
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="email" class="col-sm-2 control-label">Email Address *</label>-->
                    <div class="col-sm-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*">
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="message" class="col-sm-2 control-label">Your Message *</label>-->
                    <div class="col-sm-12">
                        <textarea class="form-control" name="message" placeholder="Messages" id="message" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-sm-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <div class=" col-sm-12">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    <!--</div>
</div>
</div>-->