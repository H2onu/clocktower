<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style>

        .input {

            width: 150px;
        }

        #submit, #reset {
            display: inline;
            float: left;
            padding-right: 25px;
        }


    </style>

</head>

<body>

<div class="container">

    <h1>ClockTower Vue.js</h1>

    <div id="root">

        <input type="text" id="startTime" placeholder="Start Time" type="number" v-model="message" maxlength="5">

        <input type="text" id="endTime" placeholder="End Time" type="number" v-model="message2" maxlength="5">

        <p>The Number of Chimes is: @{{ chimes }}</p>

    </div>

    <hr>

    <h1>Clocktower PHP</h1>
    <h3>The Number Of Chimes Is: @if( ! empty($sum) )  {{ $sum }} @endif</h3>

    {!! Form::open([ 'id' => 'clockTower' , 'name'=> 'ClockTower' , 'route' => ['clockTower'  ] ]) !!}

    <div class="input">

        {!! Form::label('StartTime', 'Start Time', ['class' => 'control-label']) !!}

        <br>

        {!! Form::text('StartTime', null, ['class' => 'form-control', 'placeholder' => 'Start Time', 'required' => 'required', 'maxlength' => '5'])  !!}

    </div>

    <div class="input">

        {!! Form::label('EndTime', 'End Time', ['class' => 'control-label']) !!}

        <br>

        {!! Form::text('EndTime', null, ['class' => 'form-control', 'placeholder' => 'End Time', 'required' => 'required', 'maxlength' => '5'])  !!}

    </div>
    <br>

    <div>
        <div class="input" id="submit">

            {!! Form::submit("submit", ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>
<br>
    <hr>

    <div>

        <h5>Code Submission By: Ray Culver</h5>


    </div>

</div>


    <script src="https://unpkg.com/vue@2.4.2/dist/vue.js"></script>

    <script>


        new Vue({

            el: '#root',
            data: {

                message: '',
                message2: '',


            },

            methods: {

                chimes2(i){

                    if (i >= 13 && i <= 24) {

                        i = (i - 12);

                    }

                    if (i > 24) {

                        i = (i - 24);

                    }

                    return i;

                },

                end(eTime){

                    endTime = (eTime + 24);

                    return endTime;

                },

            },

            computed: {

                chimes(){

                    var startTime = parseInt(this.message);
                    var endTime = parseInt(this.message2);

                    if (startTime >= endTime) {

                        var endTime = this.end(endTime);

                    }

                    var sum = 0, i;

                    for (i = startTime; i <= endTime; i++) {

                        var x = this.chimes2(i);

                        sum = sum + x;

                    }

                    return sum;

                },


            },


        })
        ;


    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>


    <script>

        $('#StartTime').on('keydown', function (e) {
            //your code
            if (e.keyCode != 8 && (this.value.length === 2)) {
                this.value += ":";
            }
            //collapse double colons
            this.value = this.value.replace(/:+/g, ":");
        });
        $('#startTime').on('keydown', function (e) {
            //your code
            if (e.keyCode != 8 && (this.value.length === 2 )) {
                this.value += ":";
            }
            //collapse double colons
            this.value = this.value.replace(/:+/g, ":");
        });

        $('#EndTime').on('keydown', function (e) {
            //your code
            if (e.keyCode != 8 && (this.value.length === 2 )) {
                this.value += ":";
            }
            //collapse double colons
            this.value = this.value.replace(/:+/g, ":");
        });
        $('#endTime').on('keydown', function (e) {
            //your code
            if (e.keyCode != 8 && (this.value.length === 2 )) {
                this.value += ":";
            }
            //collapse double colons
            this.value = this.value.replace(/:+/g, ":");
        });


    </script>


</body>

</html>