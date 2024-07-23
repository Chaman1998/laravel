<style>
    input {
        border: black 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 5px;
        color: black;
    }

    .input-wrapper {
        margin: 5px;
        padding: 5px;
    }

    button {
        border: green 2px solid;
        height: 35px;
        width: 200px;
        border-radius: 5px;
        color: black;
        background-color: #fff;
        cursor: pointer;
    }
    h3{
        text-align: center;
    }
    .center {
        display: grid;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="center">
    <h3>Add New User</h3>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user Email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user City" name="city">
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
