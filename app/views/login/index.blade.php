@extends('layouts.default')

@section('content')

<!-----start-main---->
<div class="login-form">
    <div class="logo">
        <img src="images/logo.png" alt=""/>
    </div>
    <h1>Fidelizare clienti<br/></h1>	
    <form>
        <input type="text" class="text" value="Cod card..." onfocus="this.value = '';" onblur="if (this.value == '') {
                    this.value = 'Cod card...';
                }" >
        <input type="submit" onclick="myFunction()" value="" >
    </form>
</div>
<!-----start-copyright---->
<div class="copy-right">
    <p>Copyright <a href="http://w3layouts.com">Newpixel</a></p> 
</div>
<!-----//end-copyright---->

@stop