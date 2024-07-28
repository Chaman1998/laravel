<div>
    <h3>Add Account</h3>
    @if (session('message'))
        <span class="success">{{ session('message') }}</span>
    @endif

    {{-- {{session()->reflash()}} --}}
    {{-- {{session()->keep(['massage'])}} --}}
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter Username">
        <br />
        <br />
        <input type="email" name="email" placeholder="Enter Email">
        <br />
        <br />
        <input type="phone" name="phone" placeholder="Enter Phone">
        <br />
        <br />
        <button>Add</button>
    </form>
</div>

<style>
    .success {
        color: rgb(9, 168, 9);
        padding: 5px;
        margin: 2px;
    }
</style>
