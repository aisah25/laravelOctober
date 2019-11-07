@extends('../layouts.master') 
@section('content')
<main role="main">
    <!-- Content -->
    <article>

        <header class="section background-dark">
           
        </header>
        <form action="{{route('reminders.update',$id,$code)}}" method="post">
<label>Forget password</label><br>
<label for="email">Email</label><br>
<input type="text" name="email" id="email"/>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
