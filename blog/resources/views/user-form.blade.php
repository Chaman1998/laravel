<style>
    input {
        border: black 1px solid;
        height: 35px;
        width: 300px;
        border-radius: 5px;
        color: black;
    }

    .input-wrapper {
        margin: 5px;
        padding: 5px;
        display: grid;
        justify-content: center;
        align-items: center;
    }

    button {
        border: green 2px solid;
        height: 35px;
        width: 300px;
        border-radius: 5px;
        color: black;
        background-color: #fff;
        cursor: pointer;
    }

    h3 {
        text-align: center;
    }

    .center {
        display: grid;
        justify-content: center;
        align-items: center;
    }
    span{
        margin-top: 2px;
        color: red;
    }
    .input-error{
        border: red 1px solid;
        color: red;
    }
</style>
<div class="center">
    <h3>Add New User</h3>

    {{-- {{
        print_r($errors)
    }} --}}
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username') ? 'input-error' : ''}}"
            >
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user Email" name="email" value="{{old('email')}}"
            class="{{$errors->first('email') ? 'input-error' : ''}}"
            >
            <span>@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user City" name="city" value="{{old('city')}}"
            class="{{$errors->first('city') ? 'input-error' : ''}}"
            >
            <span>@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
