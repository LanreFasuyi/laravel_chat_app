@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    @foreach ($users as $user )
                    <li class="user" id="{{$user->id}}">
                        <span class="pending">1</span>
                        <div class="media">
                            <div class="media-left">
                                <img src="{{$user->avatar}}" alt="" class="media-object">
                            </div>
                            <div class="media-body">
                                <p class="name">{{$user->name}}</p>
                                <p class="email">{{$user->email}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach


                </ul>
            </div>
        </div>
        <div id="message" class="col-md-8">
            <div class="message-wrapper">
                <ul class="messages">
                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>


                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>


                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>


                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="recieved">
                            <p>Lorem ipsum dolor sit.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="input-text">
                <input type="text" name="messages" id="" class="submit">
            </div>
        </div>
    </div>
</div>
@endsection