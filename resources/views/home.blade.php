@extends('layouts.home')
@section('sideForm')
<h2>Filter Results</h2>
<div class='cleaner_h20'></div>
<input type='text' placeholder="Search" class='span4' value='BMW M5'/>
<div class='cleaner_h10'></div>
<input type='text' placeholder="Min Price" class='span2'/> to <input type='text' placeholder="Max Price" class='span2'/>
<div class='cleaner_h10'></div>
<input type='text' placeholder="Min Year" class='span2'/> to <input type='text' placeholder="Max Year" class='span2'/>
<div class='cleaner_h10'></div>
<select class='span4'>
    <option>Show All</option>
    <option>Show ads by Private Sellers Only</option>
    <option>Show ads by Dealers Only</option>
</select>
<div class='cleaner_h20'></div>
<button class='btn'>Reset</button>
<button class='btn primary'>Update</button>
@endsection
@section('content')
<div class="col-lg-8 " >
    <div class="well span4">
        <div class="container-fluid">
            <div class="row-fluid" style="background:#eee">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
