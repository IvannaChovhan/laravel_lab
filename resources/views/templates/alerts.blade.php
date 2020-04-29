<div class = "container">
    <div class = "row">
        @if($errors->any())
            <div class = "col-md-12">
                <ul style="list-style-type: none">
                    @foreach($errors->all() as $i)
                        <li style="color: red">{{ $i }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class = "col-md-12">
                <p style="text-align: center; color: green">{{ session('success') }}</p>
            </div>
        @endif
    </div>
</div>
