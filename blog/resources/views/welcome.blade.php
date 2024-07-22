<h1>Hello laravel</h1>
<a href="home">Home</a>

<br/>
<x-massage-banner msg="User login massage send Successfully" class="success"/>

<x-massage-banner msg="Password not correct." class="error"></x-massage-banner>

<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 5px 10px;
        border-radius: 5px;
        display: inline-block;
        margin: 10px;
    }
    .error{
        background: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        display: inline-block;
        margin: 10px;
    }
</style>