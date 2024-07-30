<div>
    <h2>Add new Student</h2>
    <form action="add" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br />
        <input type="email" name="email" placeholder="Enter Email ID">
        <br />
        <input type="text" name="phone" placeholder="Enter Phone No">
        <br />
        <button>Add Student</button>
    </form>
</div>

<style>
    input,button{
        margin: 5px;
        padding: 5px;
        border-radius: 5px;
    }
</style>