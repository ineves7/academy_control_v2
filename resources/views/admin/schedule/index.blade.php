@extends('admin.layouts.layout')


@section('page-style')

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>

@endsection


@section('content')

<section class="mb-5 px-2">
                <div class="row">
                    <div class="col-3 mt-2">
                        <!-- Tab navs -->
                        <div
                        class="nav flex-column nav-pills text-center"
                        id="v-pills-tab"
                        role="tablist"
                        aria-orientation="vertical"
                        >
                        @php 
                            $i=0;
                        @endphp
                        @foreach ($week_days as $week_day)
                            <a
                                class="nav-link {{$i==0 ? 'active' : ''}}"
                                id="v-pills-{{$week_day->id}}-tab"
                                data-mdb-toggle="pill"
                                href="#v-pills-{{$week_day->id}}"
                                role="tab"
                                aria-controls="v-pills-{{$week_day->id}}"
                                aria-selected="true">

                                    {{$week_day->week_day}}

                            </a >
                            @php 
                                $i++;
                            @endphp
                        @endforeach
                        
                        </div>
                        <!-- Tab navs -->
                    </div>

                    <div class="col-9">
                        <!-- Proteção Integral -->
                            @foreach($week_days as $week_day)
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-{{$week_day->id}}" role="tabpanel" aria-labelledby="v-pills-{{$week_day->id}}-tab">
                                            @foreach($week_day->schedules as $schedule)
                                                <div class="col-md-4 py-3">
                                                    <a href="" style="text-decoration: none">
                                                        <div class="text-center mt-2" style="border-radius: 5px 5px 5px 15px; ">
                                                            <h3 style="font-size: 16px; color: #4c4c4c" class="title-font">   
                                                            <strong> {{$schedule->start_time}} </strong>
                                                            </h3>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
            </section>

@endsection

@section('page-script')

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>

@endsection